<?php

class MedicoDao
{

    public function salvar($medico)
    {
        //  try {

        $host = "localhost";
        $usuario = "root";
        $senha = "aluno";
        $bd = "mydb";

        $nome = $medico->getNome();
        $rg = $medico->getRg();
        $cpf = $medico->getCpf();
        $endereco = $medico->getEndereco();
        $telefone = $medico->getTelefone();
        $crm = $medico->getCrm();
        $medico = new Medico();

        $conexao = new PDO("mysql:host=$host;dbname=$bd", $usuario, $senha);

        $query = $conexao->prepare('INSERT INTO medico(nome, rg, cpf, endereco, telefone, crm) VALUES (:nome, :rg, :cpf, :endereco, :telefone, :crm)');
        $query->bindParam(':nome', $nome);
        $query->bindParam(':endereco', $endereco);
        $query->bindParam(':rg', $rg);
        $query->bindParam(':cpf', $cpf);
        $query->bindParam(':telefone', $telefone);
        $query->bindParam(':crm', $crm);
        
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
        $host = "localhost";
        $usuario = "root";
        $senha = "aluno";
        $bd = "mydb";

        $conexao = new PDO("mysql:host=$host;dbname=$bd", $usuario, $senha);

        $query = $conexao->prepare('SELECT nome, rg, cpf, endereco, telefone, crm FROM medico');
        $query->execute();
        $medicos = $query->fetchAll(PDO::FETCH_CLASS);

        return $medicos;

    }

    public function deletar($cpf)
    {
        $host = "localhost";
        $usuario = "root";
        $senha = "aluno";
        $bd = "mydb";

        $conexao = new PDO("mysql:host=$host;dbname=$bd", $usuario, $senha);
        
        $query = $conexao->prepare('delete from medico where cpf=:cpf');
        $query->bindParam(':cpf', $cpf);
        $query->execute();
    }

    public function atualizar($medico)
    {
        $host = "localhost";
        $usuario = "root";
        $senha = "aluno";
        $bd = "mydb";

        $nome = $medico->getNome();
        $cpf = $medico->getCpf();

        $conexao = new PDO("mysql:host=$host;dbname=$bd", $usuario, $senha);
        $query = $conexao->prepare('update medico set nome=:nome where cpf=:cpf');
        $query->bindParam(':nome', $nome);
        $query->bindParam(':cpf', $cpf);
        $query->execute();
        
    }

    public function get($cpf)
    {
        $host = "localhost";
        $usuario = "root";
        $senha = "aluno";
        $bd = "mydb";

        $conexao = new PDO("mysql:host=$host;dbname=$bd", $usuario, $senha);

        $query = $conexao->prepare('SELECT nome, rg, cpf, endereco, telefone, crm FROM medico WHERE cpf=:cpf');
        $query->bindParam(':cpf',$cpf);
        $query->execute();
        $medicos = $query->fetchAll(PDO::FETCH_CLASS);

        return $medicos[0];
    }
    public function buscar($filtro){
        $host = "localhost";
        $usuario = "root";
        $senha = "aluno";
        $bd = "mydb";

        $filtro = "%".$filtro."%";

        $conexao = new PDO("mysql:host=$host;dbname=$bd", $usuario, $senha);

        $query = $conexao->prepare('SELECT nome, rg, cpf, endereco, telefone, crm FROM medico WHERE nome like :filtro');
        $query->bindParam(':filtro',$filtro);
        $query->execute();
        $medicos = $query->fetchAll(PDO::FETCH_CLASS);

        return $medicos;
    }
}