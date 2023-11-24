<?php

require_once 'modelo/dominio/Receita.php';
require_once 'modelo/dao/ReceitaDao.php';

$receitaDao = new ReceitaDao();

$acao = isset($_REQUEST['acao']) ? $_REQUEST['acao'] : NULL;

if ($acao == NULL) {
    include 'pages/ReceitaForm.php';
} else if ($acao == "salvar") {
    $receita = new Receita();
    $receita->setId_receita($_POST['id_receita']);
    $receita->setData($_POST['data']);
    $receita->setDescricao($_POST['descricao']);
    $receita->setId_paciente($_POST['id_paciente']);
    $receita->setId_medico($_POST['id_medico']);
    $receitaDao->salvar($receita);


    header("Location: ?page=ReceitaControle&acao=listar");
} else if ($acao == "listar") {
    $receitas = $receitaDao->listar();
    include 'pages/listarReceita.php';
} else if ($acao == "alterar") {
   
    $receita = new Receita();
    $receita->setId_receita($_POST['id_receita']);
    $receita->setData($_POST['data']);
    $receita->setDescricao($_POST['descricao']);
    $receita->setId_paciente($_POST['id_paciente']);
    $receita->setId_medico($_POST['Id_medico;']);
    $receitaDao->atualizar($receita);

    header("Location: ?page=receitaControle&acao=listar");
    
} else if ($acao == "excluir") {
    $id_receita = $_GET['id_receita'];
    $receitaDao->deletar($id_receita);
    header("Location: ?page=receitaControle&acao=listar");
}else if($acao == "get"){
    $id_receita = $_GET['id_receita'];

   $receita = $receitaDao->get($id_receita);
    include 'pages/receitaForm.php';

}else if($acao == "buscar"){
    
    $filtro = $_POST['filtro'];
    $receitas = $receitaDao->buscar($filtro);

    include 'pages/listarReceita.php';

}

