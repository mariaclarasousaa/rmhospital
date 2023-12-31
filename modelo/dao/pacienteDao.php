<?php

        require_once 'modelo/dao/configConexaoDao.php';
        require_once 'modelo/dominio/paciente.php';
        require_once 'modelo/dao/pacienteDao.php';

        class PacienteDao extends configConexaoDao
        {
        
            public function salvar($paciente)
            {
                //  try {
        
               
        $nome = $paciente->getNome();
        $cpf = $paciente->getCpf();
        $telefone = $paciente->getTelefone();
        $rg = $paciente->getRg();
        $bairro = $paciente->getBairro();
        $nascimento = $paciente->getNascimento();
        $sexo = $paciente->getSexo();
 

        $query = $this->conexao->prepare('INSERT INTO pessoa(nome, nascimento, bairro, sexo, rg, cpf, telefone) VALUES (:nome, :nascimento, :bairro, :sexo, :rg, :cpf, :telefone)');
        $query->bindParam(':nome', $nome);
        $query->bindParam(':cpf', $cpf);
        $query->bindParam(':telefone', $telefone);
        $query->bindParam(':sexo', $sexo);
        $query->bindParam(':rg', $rg);
        $query->bindParam(':bairro', $bairro);
        $query->bindParam(':nascimento', $nascimento);
        
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
       
        $query = $this->conexao->prepare('SELECT id, nome, nascimento, bairro, sexo, rg, cpf, telefone FROM pessoa');
        $query->execute();
        $pacientes = $query->fetchAll(PDO::FETCH_CLASS);

        return $pacientes;

    }

    public function deletar($id)
    {
      
        $query = $this->conexao->prepare('delete from pessoa where id=:id');
        $query->bindParam(':id', $id);
        $query->execute();
    }


    public function atualizar($paciente)
    {
       
        $nome = $paciente->getNome();
        $cpf = $paciente->getCpf();
        $telefone = $paciente->getTelefone();
        $rg = $paciente->getRg();
        $bairro = $paciente->getBairro();
        $nascimento = $paciente->getNascimento();
        $sexo = $paciente->getSexo();
        $id = $paciente->getId();
 

        $query = $this->conexao->prepare('update pessoa set nome=:nome, cpf=:cpf, rg=:rg, telefone=:telefone, sexo=:sexo, bairro=:bairro, nascimento=:nascimento where id=:id');
        $query->bindParam(':nome', $nome);
        $query->bindParam(':cpf', $cpf);
        $query->bindParam(':telefone', $telefone);
        $query->bindParam(':sexo', $sexo);
        $query->bindParam(':rg', $rg);
        $query->bindParam(':bairro', $bairro);
        $query->bindParam(':nascimento', $nascimento);
        $query->bindParam(':id', $id);
        $query->execute();
        
    }

    public function get($id)
    {
       
        $query = $this->conexao->prepare('SELECT nome, nascimento, bairro, sexo, rg, cpf, telefone  FROM pessoa WHERE id=:id');
        $query->bindParam(':id',$id);
        $query->execute();
        $pacientes = $query->fetchAll(PDO::FETCH_CLASS);

        return $pacientes[0];

    }

    
    public function buscar($filtro){
       
        $filtro = "%".$filtro."%";

        $query = $this->conexao->prepare('SELECT id, nome, nascimento, bairro, sexo, rg, cpf, telefone FROM pessoa WHERE nome like :filtro');
        $query->bindParam(':filtro',$filtro);
        $query->execute();
        $pacientes = $query->fetchAll(PDO::FETCH_CLASS);

        return $pacientes;
    }
}