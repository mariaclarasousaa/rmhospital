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
    $pacienteDao->salvar($paciente);

    header("Location: ?page=pacienteControle&acao=listar");
} else if ($acao == "listar") {
    $pacientes = $pacienteDao->listar();
    include 'pages/listarPaciente.php';
} else if ($acao == "alterar") {
   
    $paciente = new Paciente();
    $paciente->setCpf($_POST['cpf']);
    $paciente->setNome($_POST['nome']);
    $pacienteDao->atualizar($paciente);

    header("Location: ?page=pacienteControle&acao=listar");
    
} else if ($acao == "excluir") {
    $cpf = $_GET['cpf'];
    $pacienteDao->deletar($cpf);
    header("Location: ?page=pacienteControle&acao=listar");
}else if($acao == "get"){
    $cpf = $_GET['cpf'];

   $paciente = $pacienteDao->get($cpf);
    include 'pages/pacienteForm.php';
}
