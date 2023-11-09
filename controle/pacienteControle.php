<?php

require_once 'modelo/dominio/paciente.php';
require_once 'modelo/dao/pacienteDao.php';

$pacienteDao = new pacienteDao();

$acao = isset($_REQUEST['acao']) ? $_REQUEST['acao'] : NULL;

if ($acao == NULL) {
    include 'pages/pacienteForm.php';
} else if ($acao == "salvar") {
    $paciente = new paciente();
    $paciente->setNome($_POST['nome']);
    $paciente->setNascimento($_POST['nascimento']);
    $paciente->setSexo($_POST['sexo']);
    $paciente->setRg($_POST['rg']);
    $paciente->setCpf($_POST['cpf']);

    $pacienteDao->salvar($paciente);

    header("Location: ?page=pacienteControle&acao=listar");
} else if ($acao == "listar") {
    $pacientes = $pacienteDao->listar();
    include 'pages/listarPaciente.php';
} else if ($acao == "alterar") {
    echo "alterando...";
} else if ($acao == "excluir") {
    echo "excluindo...";
}
