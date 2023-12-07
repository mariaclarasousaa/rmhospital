<?php

require_once 'modelo/dominio/fichaDeInternacao.php';
require_once 'modelo/dao/fichaDeInternacaoDao.php';

$fichaDeInternacaoDao = new FichaDeInternacaoDao();

$acao = isset($_REQUEST['acao']) ? $_REQUEST['acao'] : NULL;

if ($acao == NULL) {
    include 'pages/fichaDeInternacaoForm.php';
} else if ($acao == "salvar") {
    $fichaDeInternacao = new fichaDeInternacao();
    $fichaDeInternacao->setNome($_POST['nome']);
    $fichaDeInternacao->setId($_POST['id']);
    $fichaDeInternacao->setNomeDoResponsavel($_POST['nomeDoResponsavel']);
    $fichaDeInternacao->setMedico($_POST['medico']);
    $fichaDeInternacao->setDatadaInternaçao($_POST['datadaInternaçao']);
    $fichaDeInternacao->setJustificativadaInternaçao($_POST['justificativadaInternaçao']);

    $fichaDeInternacaoDao->salvar($fichaDeInternacao);

    header("Location: ?page=medicoControle&acao=listar");
} else if ($acao == "listar") {
    $fichaDeInternacaos = $fichaDeInternacaoDao->listar();
    include 'pages/listarFichaDeInternacao.php';
} else if ($acao == "alterar") {
   
    $fichaDeInternacao = new fichaDeInternacao();
    $fichaDeInternacao->setNome($_POST['nome']);
    $fichaDeInternacao->setId($_POST['id']);
    $fichaDeInternacao->setNomeDoResponsavel($_POST['nomeDoResponsavel']);
    $fichaDeInternacao->setMedico($_POST['medico']);
    $fichaDeInternacao->setDatadaInternaçao($_POST['datadaInternaçao']);
    $fichaDeInternacao->setJustificativadaInternaçao($_POST['justificativadaInternaçao']);
    $medicoDao->atualizar($fichaDeInternacao);

    header("Location: ?page=fichaDeInternacaoControle&acao=listar");
    
} else if ($acao == "excluir") {
    $cpf = $_GET['id'];
    $fichaDeInternacaoDao->deletar($id);
    header("Location: ?page=fichaDeInternacaoControle&acao=listar");

}else if($acao == "get"){
    $id = $_GET['id'];

   $fichaDeInternacao = $fichaDeInternacaoDao->get($id);
    include 'pages/fichaDeInternacaoForm.php';

}else if($acao == "buscar"){
    
    $filtro = $_POST['filtro'];
    $fichaDeInternacaos = $fichaDeInternacaoDao->buscar($filtro);

    include 'pages/listarFichaDeInternacao.php';

}

