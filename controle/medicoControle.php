<?php

require_once 'modelo/dominio/Medico.php';
require_once 'modelo/dao/medicoDao.php';

$medicoDao = new MedicoDao();

$acao = isset($_REQUEST['acao']) ? $_REQUEST['acao'] : NULL;

if ($acao == NULL) {
    include 'pages/medicoForm.php';
} else if ($acao == "salvar") {
    $medico = new Medico();
    $medico->setNome($_POST['nome']);
    $medico->setRg($_POST['rg']);
    $medico->setCpf($_POST['cpf']);
    $medico->setCrm($_POST['crm']);
    $medico->setEndereco($_POST['endereco']);
    $medico->setTelefone($_POST['telefone']);

    $medicoDao->salvar($medico);

    header("Location: ?page=medicoControle&acao=listar");
} else if ($acao == "listar") {
    $medicos = $medicoDao->listar();
    include 'pages/listarMedico.php';
} else if ($acao == "alterar") {
   
    $medico = new Medico();
    $medico->setNome($_POST['nome']);
    $medico->setRg($_POST['rg']);
    $medico->setCpf($_POST['cpf']);
    $medico->setCrm($_POST['crm']);
    $medico->setEndereco($_POST['endereco']);
    $medico->setTelefone($_POST['telefone']);
    $medicoDao->atualizar($medico);

    header("Location: ?page=medicoControle&acao=listar");
    
} else if ($acao == "excluir") {
    $cpf = $_GET['cpf'];
    $medicoDao->deletar($cpf);
    header("Location: ?page=medicoControle&acao=listar");
}else if($acao == "get"){
    $cpf = $_GET['cpf'];

   $medico = $medicoDao->get($cpf);
    include 'pages/medicoForm.php';

}else if($acao == "buscar"){
    
    $filtro = $_POST['filtro'];
    $medicos = $medicoDao->buscar($filtro);

    include 'pages/listarMedico.php';

}

