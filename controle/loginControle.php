<?php

require_once 'modelo/dominio/login.php';
require_once 'modelo/dao/loginDao.php';

$loginDao = new loginDao();

$acao = isset($_REQUEST['acao']) ? $_REQUEST['acao'] : NULL;

if ($acao == NULL) {
    include 'pages/loginForm.php';
} else if ($acao == "salvar") {
    $login = new Login();
    $login->setNome($_POST['nome']);
    $login->setCpf($_POST['cpf']);
    $login->setId($_POST['id']);

    $loginDao->salvar($login);

    header("Location: ?page=loginControle&acao=listar");

} else if ($acao == "listar") {
    $logins = $loginDao->listar();
    include 'pages/listarLogin.php';

} else if ($acao == "alterar") {
   
    $login = new Login();
    $login->setNome($_POST['nome']);
    $login->setCpf($_POST['cpf']);
    $login->setId($_POST['id']);
    $loginDao->atualizar($login);

    header("Location: ?page=pacienteControle&acao=listar");
    
} else if ($acao == "excluir") {
    $cpf = $_GET['cpf'];
    $pacienteDao->deletar($cpf);
    header("Location: ?page=pacienteControle&acao=listar");
}else if($acao == "get"){
    $cpf = $_GET['cpf'];

   $paciente = $pacienteDao->get($cpf);
    include 'pages/pacienteForm.php';

}else if($acao == "buscar"){
    
    $filtro = $_POST['filtro'];
    $pacientes = $pacienteDao->buscar($filtro);

    include 'pages/listarPaciente.php';

}

