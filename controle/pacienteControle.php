<?php

require_once 'modelo/dominio/Paciente.php';
require_once 'modelo/dao/PacienteDao.php';

$pacienteDao = new PacienteDao();

$acao = isset($_REQUEST['acao']) ? $_REQUEST['acao'] : NULL;

if ($acao == NULL) {
    include 'pages/pacienteForm.php';
} else if ($acao == "salvar") {
    $paciente = new Paciente();
    $paciente->setNome($_POST['nome']);
    $paciente->setNascimento($_POST['nascimento']);
    $paciente->setRg($_POST['rg']);
    $paciente->setSexo($_POST['sexo']);
    $paciente->setBairro($_POST['bairro']);
    $paciente->setTelefone($_POST['telefone']);
    $paciente->setCpf($_POST['cpf']);
    $pacienteDao->salvar($paciente);

    header("Location: ?page=pacienteControle&acao=listar");

} else if ($acao == "listar") {
    $pacientes = $pacienteDao->listar();
    include 'pages/listarPaciente.php';
} else if ($acao == "alterar") {
   
    $paciente = new Paciente();
    $paciente->setCpf($_POST['cpf']);
    $paciente->setNome($_POST['nome']);
    $paciente->setNascimento($_POST['nascimento']);
    $paciente->setRg($_POST['rg']);
    $paciente->setSexo($_POST['sexo']);
    $paciente->setBairro($_POST['bairro']);
    $paciente->setTelefone($_POST['telefone']);
    $paciente->setId($_POST['id']);
    $pacienteDao->atualizar($paciente);

    header("Location: ?page=pacienteControle&acao=listar");
    
} else if ($acao == "excluir") {
    $id = $_GET['id'];
    $pacienteDao->deletar($id);
    header("Location: ?page=pacienteControle&acao=listar");
    
}else if($acao == "get"){
    $cpf = $_GET['id'];

   $paciente = $pacienteDao->get($id);
    include 'pages/pacienteForm.php';

}else if($acao == "buscar"){
    
    $filtro = $_POST['filtro'];
    $pacientes = $pacienteDao->buscar($filtro);

    include 'pages/listarPaciente.php';

}

