<?php

require_once 'modelo/dominio/Medico.php';
require_once 'modelo/dao/medicoDao.php';
require_once 'modelo/dao/configConexaoDao.php';
        
        class MedicoDao extends configConexaoDao
        {
            public function salvar($medico)
            {
                //  try {
       

        $nome = $medico->getNome();
        $cpf = $medico->getCpf();
        $telefone = $medico->getTelefone();
        $crm = $medico->getCrm();
        $rg = $medico->getRg();
        $endereco = $medico->getEndereco();


        $query = $this->conexao->prepare('INSERT INTO pessoa(cpf, nome, telefone, rg, endereco) VALUES (:cpf, :nome, :telefone, :rg, :endereco)');
        $query->bindParam(':cpf', $cpf);
        $query->bindParam(':nome', $nome);
        $query->bindParam(':telefone', $telefone);
        $query->bindParam(':rg', $rg);
        $query->bindParam(':endereco', $endereco); 
        
        $query->execute();
        
        $id_pessoa = $this->conexao->lastInsertId();

        $query = $this->conexao->prepare('INSERT INTO medico(id, crm) VALUES (:id, :crm)');
        $query->bindParam(':id', $id_pessoa);
        $query->bindParam(':crm', $crm);

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
        
        $query = $this->conexao->prepare('SELECT p.cpf, p.nome, p.telefone, p.rg,  p.endereco, m.crm, p.id FROM pessoa p inner join medico m on p.id = m.id');
        $query->execute();
        $medicos = $query->fetchAll(PDO::FETCH_CLASS);

        return $medicos;

    }


    public function deletar($id)
    {
      
        $query = $this->conexao->prepare('delete from pessoa where id=:id');
        $query->bindParam(':id', $id);
        $query->execute();
    }


    public function atualizar($medico)
    {
        $nome = $medico->getNome();
        $cpf = $medico->getCpf();
        $rg = $medico->getRg();
        $endereco = $medico->getEndereco();
        
    
        $query = $this->conexao->prepare('update pessoa set nome=:nome, cpf=:cpf, rg=:rg, endereco=:endereco where id=:id');
        $query->bindParam(':nome', $nome);
        $query->bindParam(':cpf', $cpf);
        $query->bindParam(':rg', $rg);
        $query->bindParam(':endereco', $endereco);
        $query->bindParam(':id', $medico->id);
        $query->execute();

      

    }
    


public function get($id)
{
    $query = $this->conexao->prepare('SELECT p.cpf, p.nome, p.telefone, p.rg, p.endereco, m.crm, p.id FROM pessoa p INNER JOIN medico m ON p.id = m.id WHERE p.id=:id');
    $query->bindParam(':id', $id);
    $query->execute();
    $medicos = $query->fetchAll(PDO::FETCH_CLASS);

    if (!empty($medicos)) {
        return $medicos[0];
    } else {
        // Lidere com a situação em que nenhum resultado é encontrado.
        return null;
    }
}


public function buscar($filtro){
       
    $filtro = "%".$filtro."%";

    $query = $this->conexao->prepare('SELECT cpf, nome, telefone, rg,  endereco FROM pessoa WHERE nome like :filtro');
    $query->bindParam(':filtro',$filtro);
    $query->execute();
    $alunos = $query->fetchAll(PDO::FETCH_CLASS);

    return $alunos;
}
}

