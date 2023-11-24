<?php

class ReceitaDao
{

    public function salvar($receita)
    {
        //  try {

        $host = "localhost";
        $usuario = "root";
        $senha = "aluno";
        $bd = "mydb";

        $id_receita = $receita->getId_receita();
        $data = $receita->getData();
        $descricao = $receita->getDescricao();
        $id_paciente = $receita->getId_paciente();
        $id_medico = $receita->getId_medico();

        $conexao = new PDO("mysql:host=$host;dbname=$bd", $usuario, $senha);

        $query = $conexao->prepare('INSERT INTO receita(id_receita, data, descricao, paciente_id, medico_id) VALUES (:id_receita, :data, :descricao, :id_paciente, :id_medico)');
        $query->bindParam(':id_receita', $id_receita);
        $query->bindParam(':data', $data);
        $query->bindParam(':descricao', $descricao);
        $query->bindParam(':id_paciente', $id_paciente);
        $query->bindParam(':id_medico', $id_medico);


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

        $query = $conexao->prepare('SELECT id_receita, data, descricao, id_paciente, id_medico FROM receita');
        $query->execute();
        $receitas = $query->fetchAll(PDO::FETCH_CLASS);

        return $receitas;

    }

    public function deletar($cpf)
    {
        $host = "localhost";
        $usuario = "root";
        $senha = "aluno";
        $bd = "mydb";

        $conexao = new PDO("mysql:host=$host;dbname=$bd", $usuario, $senha);
        
        $query = $conexao->prepare('delete from receita where id_medico=:id_medico');
        $query->bindParam(':id_medico', $id_medico);
        $query->execute();
    }

    public function atualizar($receita)
    {
        $host = "localhost";
        $usuario = "root";
        $senha = "aluno";
        $bd = "mydb";

        $id = $receita->getId();
        $id_medico = $receita->getId_medico();

        $conexao = new PDO("mysql:host=$host;dbname=$bd", $usuario, $senha);
        $query = $conexao->prepare('update receita set id_receita=:id_receita where id_medico=:id_medico');
        $query->bindParam(':id_receita', $id);
        $query->bindParam(':id_medico', $id_medico);
        $query->execute();
        
    }

    public function get($id)
    {
        $host = "localhost";
        $usuario = "root";
        $senha = "aluno";
        $bd = "mydb";

        $conexao = new PDO("mysql:host=$host;dbname=$bd", $usuario, $senha);

        $query = $conexao->prepare('SELECT id, data, descricao, paciente_id, id_medico FROM medico WHERE id=:id');
        $query->bindParam(':id',$id);
        $query->execute();
        $pacientes = $query->fetchAll(PDO::FETCH_CLASS);

        return $receitas[0];
    }
    public function buscar($filtro){
        $host = "localhost";
        $usuario = "root";
        $senha = "aluno";
        $bd = "mydb";

        $filtro = "%".$filtro."%";

        $conexao = new PDO("mysql:host=$host;dbname=$bd", $usuario, $senha);

        $query = $conexao->prepare('SELECT id, data, descricao, id_paciente, id_medico FROM receita WHERE id like :filtro');
        $query->bindParam(':filtro',$filtro);
        $query->execute();
        $receitas = $query->fetchAll(PDO::FETCH_CLASS);

        return $receitas;
    }
}