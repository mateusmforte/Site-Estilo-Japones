<?php
    require_once("banco-usuario.php");
    require_once("logica-usuario.php");

#chamando a função para logar.
$usuario = buscaUsuario($conexao, $_POST['email'], $_POST['senha']);

#verificando se houve conseguiu acessar ou não
if($usuario == null) {
    $_SESSION['danger'] = "Usuário ou senha inválida";
    header("Location: ../view/index.php");
}   else{
    $_SESSION['success'] = "Usuário logado com sucesso.";
    logaUsuario($usuario["email"]);
    header("Location: ../view/index.php");
}

die();