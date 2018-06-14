<?php
require_once("banco-usuario.php");
require_once("conecta.php");

if(insereUsuario($conexao, $_POST['nome'], $_POST['cpf'], $_POST['endereco'],$_POST['telefone'], $_POST['email'], $_POST['senha']){?>
	<p class="text-success">Usuário Cadastrado</p>
<?php 
} else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">Usuário não cadastrado <?= $msg?></p>
<?php
}
?>