<?php

        require_once 'modelo/dao/configConexaoDao.php';
        
        class MedicoDao extends configConexaoDao
        {
        
            public function salvar($medico)
            {
                //  try {
        
               
        $nome = $medico->getNome();
        $cpf = $medico->getCpf();
        $telefone = $medico->getTelefone();
 

        $query = $this->conexao->prepare('INSERT INTO pessoa(cpf, nome, telefone) VALUES (:nome, :cpf, :telefone)');
        $query->bindParam(':nome', $nome);
        $query->bindParam(':cpf', $cpf);
        $query->bindParam(':telefone', $telefone);
        
        $query->execute();
        

        //    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //  $conexao->exec('SET NAMES "utf8"');

        // } catch (Exception $e) {
        //    print $e->getMessage();
        //  exit();
        // }
    }

    public function listar()
    {
       
        $query = $this->conexao->prepare('SELECT cpf, nome, telefone, rg,  endereco, crm FROM pessoa');
        $query->execute();
        $alunos = $query->fetchAll(PDO::FETCH_CLASS);

        return $medicos;

    }

    public function deletar($cpf)
    {
      
        $query = $this->conexao->prepare('delete from pessoa where cpf=:cpf');
        $query->bindParam(':cpf', $cpf);
        $query->execute();
    }


    public function atualizar($medico)
    {
       
        $nome = $medico->getNome();
        $cpf = $medico->getCpf();
        $rg = $medico->getRg();

        
        $query = $this->conexao->prepare('update pessoa set nome=:nome, cpf=:cpf, rg=:rg where cpf=:cpf');
        $query->bindParam(':nome', $nome);
        $query->bindParam(':cpf', $cpf);
        $query->bindParam(':rg', $rg);
        $query->execute();
        
    }

    public function get($cpf)
    {
       
        $query = $this->conexao->prepare('SELECT cpf, nome, telefone, rg,  endereco, crm  FROM pessoa WHERE cpf=:cpf');
        $query->bindParam(':cpf',$cpf);
        $query->execute();
        $alunos = $query->fetchAll(PDO::FETCH_CLASS);

        return $medicos[0];

    }

    
    public function buscar($filtro){
       
        $filtro = "%".$filtro."%";

        $query = $this->conexao->prepare('SELECT cpf, nome, telefone, rg,  endereco, crm FROM pessoa WHERE nome like :filtro');
        $query->bindParam(':filtro',$filtro);
        $query->execute();
        $medicos = $query->fetchAll(PDO::FETCH_CLASS);

        return $medicos;
    }
}