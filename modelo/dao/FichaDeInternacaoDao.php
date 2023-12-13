<?php

require_once 'modelo/dominio/fichaDeInternacao.php';
require_once 'modelo/dao/fichaDeInternacaoDao.php';
require_once 'modelo/dao/configConexaoDao.php';
        
        class fichaDeInternacaoDao extends configConexaoDao
        {
            public function salvar($fichaDeInternacao)
            {
                //  try {
                    $nome = $fichaDeInternacao->getNome();
                    $id = $fichaDeInternacao->getId();
            
            
            
            
                    $query = $this->conexao->prepare('INSERT INTO pessoa(nome) VALUES (:nome)');
                    $query->bindParam(':nome', $nome);
                    $query->execute();
                               
                    $id = $this->conexao->lastInsertId();
                               
                    $query = $this->conexao->prepare('UPDATE pessoa SET id = :id WHERE id IS NULL');
                    $query->bindParam(':id', $id);
                    $query->execute();

        
       //    $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //  $this->conexao->exec('SET NAMES "utf8"');

        // } catch (Exception $e) {
        //    print $e->getMessage();
        //  exit();
        // }
    }


    public function listar()
    {
       
        $query = $this->conexao->prepare('SELECT nome, id FROM pessoa');
        $query->execute();
        $fichaDeInternacaos = $query->fetchAll(PDO::FETCH_CLASS);

        return $fichaDeInternacaos;

    }

    public function deletar($id)
    {
      
        $query = $this->conexao->prepare('delete from pessoa where id=:id');
        $query->bindParam(':id', $id);
        $query->execute();
    }

    public function atualizar($FichadeInternacao)
    {
        $nome = $FichadeInternacao->getNome();
        $id = $FichadeInternacao->getId();
        $medico = $FichadeInternacao->getMedico();
        $datadaInternaçao = $FichadeInternacao->getDatadaInternaçao();
        $justificativadaInternaçao = $FichadeInternacao->getJustificativadaInternaçao();
    
        $query = $this->conexao->prepare('update pessoa set nome=:nome, medico=:medico,
        datadaInternaçao=:datadaInternaçao, justificativadaInternaçao=:justificativadaInternaçao where id=:id');
        $query->bindParam(':nome', $nome);
        $query->bindParam(':datadaInternaçao', $datadaInternaçao);
        $query->bindParam(':justificativadaInternaçao', $justificativadaInternaçao);
        $query->bindParam(':medico', $medico);


        $query->execute();
    }


    public function get($id)
    {
       
        $query = $this->conexao->prepare('SELECT nome, medico,  datadaInternaçao, justificativadaInternaçao FROM pessoa WHERE id=:id');
        $query->bindParam(':id',$id);
        $query->execute();
        $FichadeInternacaos = $query->fetchAll(PDO::FETCH_CLASS);

        return $FichadeInternacaos[0];

    }

    
    public function buscar($filtro){
       
        $filtro = "%".$filtro."%";

        $query = $this->conexao->prepare('SELECT nome, medico,  datadaInternaçao, justificativadaInternaçao FROM pessoa WHERE nome like :filtro');
        $query->bindParam(':filtro',$filtro);
        $query->execute();
        $FichadeInternacaos = $query->fetchAll(PDO::FETCH_CLASS);

        return $FichadeInternacaos;
    }
}