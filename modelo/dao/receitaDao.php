<?php

require_once 'modelo/dao/configConexaoDao.php';

class ReceitaDao extends configConexaoDao
{

    public function salvar($receita)
    {
            $nome = $receita->getNome();
            $cpf = $receita->getCpf();
            $telefone = $receita->getTelefone();
            $rg = $receita->getRg();
            $bairro = $receita->getBairro();
            $nascimento = $receita->getNascimento();
            $sexo = $receita->getSexo();
        

$query = $this->conexao->prepare('INSERT INTO receita(id_receita, data, descricao, paciente_id, medico_id) VALUES (:id_receita, :data, :descricao, :id_paciente, :id_medico)');

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

$query = $this->conexao->prepare('SELECT id_receita, data, descricao, id_paciente, id_medico FROM receita');
$query->execute();
$alunos = $query->fetchAll(PDO::FETCH_CLASS);

return $receitas;

}


public function excluir($cpf)
{

$query = $this->conexao->prepare('delete from receita where id_receita=:id_receita');
$query->bindParam(':id_receita', $id_receita);
$query->execute();
}


public function atualizar($receita)
{

    $query->bindParam(':id_receita', $id_receita);
    $query->bindParam(':data', $data);
    $query->bindParam(':descricao', $descricao);
    $query->bindParam(':id_paciente', $id_paciente);
    $query->bindParam(':id_medico', $id_medico);


$query = $this->conexao->prepare('update receita set id_receita=:id_receita, data=:data, descricao=:descricao, id_paciente=:id_paciente, id_medico=:id_medico, bairro=:bairro where id_receita=:id_receita');
$query->bindParam(':id_receita', $id_receita);
$query->bindParam(':data', $data);
$query->bindParam(':descricao', $descricao);
$query->bindParam(':id_paciente', $id_paciente);
$query->bindParam(':id_medico', $id_medico);
$query->execute();

}

public function get($id_receita)
{

$query = $this->conexao->prepare('SELECT id_receita, data, descricao, id_paciente, id_medico  FROM receita WHERE id_receita=:id_receita');
$query->bindParam(':id_receita',$id_receita);
$query->execute();
$receitas = $query->fetchAll(PDO::FETCH_CLASS);

return $receitas[0];

}


public function buscar($filtro){

$filtro = "%".$filtro."%";

$query = $this->conexao->prepare('SELECT id_receita, data, descricao, id_paciente, id_medico  FROM receita WHERE nome like :filtro');
$query->bindParam(':filtro',$filtro);
$query->execute();
$receitas = $query->fetchAll(PDO::FETCH_CLASS);

return $receitas;
}
}       
