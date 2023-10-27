<?php

class PacienteDao
{

    public function salvar($paciente)
    {
        //  try {

        $host = "localhost";
        $usuario = "root";
        $senha = "";
        $bd = "mydb";

        $nome = $paciente->getNome();
        $nascimento = $paciente->getNascimento();
        $sexo = $paciente->getSexo();
        $rg = $paciente->getRg();
        $cpf = $paciente->getCpf();

        $conexao = new PDO("mysql:host=$host;dbname=$bd", $usuario, $senha);

        $query = $conexao->prepare('INSERT INTO pessoa(nome,nascimento, sexo, nomeDoRequisitante, rg, cpf) VALUES (:nome, :nascimento, :sexo, :nomeDoRequisitante, :rg, :cpf)');
        $query->bindParam(':nome', $nome);
        $query->bindParam(':nascimento', $nascimento);
        $query->bindParam(':sexo', $sexo);
        $query->bindParam(':rg', $rg);
        $query->bindParam(':cpf', $cpf);

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
    }

    public function deletar($id)
    {
    }

    public function atualizar($paciente)
    {
    }
}
