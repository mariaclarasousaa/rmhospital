<?php

class PacienteDao
{

    public function salvar($paciente)
    {
        //  try {

        $host = "localhost";
        $usuario = "root";
        $senha = "aluno";
        $bd = "mydb";

        $nome = $paciente->getNome();
        $nascimento = $paciente->getNascimento();
        $bairro = $paciente->getBairro();
        $sexo = $paciente->getSexo();
        $rg = $paciente->getRg();
        $cpf = $paciente->getCpf();
        $telefone = $paciente->getTelefone();

        $conexao = new PDO("mysql:host=$host;dbname=$bd", $usuario, $senha);

        $query = $conexao->prepare('INSERT INTO paciente(nome,nascimento, bairro, sexo, rg, cpf, telefone) VALUES (:nome, :nascimento, :bairro, :sexo, :rg, :cpf, :telefone)');
        $query->bindParam(':nome', $nome);
        $query->bindParam(':nascimento', $nascimento);
        $query->bindParam(':bairro', $bairro);
        $query->bindParam(':sexo', $sexo);
        $query->bindParam(':rg', $rg);
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
        $host = "localhost";
        $usuario = "root";
        $senha = "aluno";
        $bd = "mydb";

        $conexao = new PDO("mysql:host=$host;dbname=$bd", $usuario, $senha);

        $query = $conexao->prepare('SELECT cpf, nome, nascimento, telefone, bairro, sexo, rg FROM paciente');
        $query->execute();
        $pacientes = $query->fetchAll(PDO::FETCH_CLASS);

        return $pacientes;

    }

    public function deletar($cpf)
    {
        $host = "localhost";
        $usuario = "root";
        $senha = "aluno";
        $bd = "mydb";

        $conexao = new PDO("mysql:host=$host;dbname=$bd", $usuario, $senha);
        
        $query = $conexao->prepare('delete from paciente where cpf=:cpf');
        $query->bindParam(':cpf', $cpf);
        $query->execute();
    }

    public function atualizar($paciente)
    {
        $host = "localhost";
        $usuario = "root";
        $senha = "aluno";
        $bd = "mydb";

        $nome = $paciente->getNome();
        $cpf = $paciente->getCpf();

        $conexao = new PDO("mysql:host=$host;dbname=$bd", $usuario, $senha);
        $query = $conexao->prepare('update paciente set nome=:nome where cpf=:cpf');
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

        $query = $conexao->prepare('SELECT cpf, nome, nascimento, telefone, bairro, rg, sexo FROM paciente WHERE cpf=:cpf');
        $query->bindParam(':cpf',$cpf);
        $query->execute();
        $pacientes = $query->fetchAll(PDO::FETCH_CLASS);

        return $pacientes[0];
    }
}