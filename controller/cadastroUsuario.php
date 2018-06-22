<?php
require_once("banco-usuario.php");
require_once("conecta.php");
require_once("../model/Clientes.php");

if(isset($_POST)){
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$endereco = $_POST['endereco'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$telefone = $_POST['telefone'];
}
else{?>
	<p>Campo em branco</p>
<?php
}

$clientes = new Clientes($nome,$cpf,$endereco,$email,$senha,$telefone);

#Chamando a função de inserir novo cadastro. Checando se houve sucesso ou não.
if(insereUsuario($conexao, $clientes)){?>
	<p class="text-success">Usuário Cadastrado</p>
<?php 
} else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">Usuário não cadastrado <?= $msg?></p>
<?php
}
?>