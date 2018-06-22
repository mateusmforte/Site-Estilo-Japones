<?php
require_once("banco-usuario.php");
require_once("conecta.php");
require_once("../model/Clientes.php");

#Verificando os campos em branco
if(empty($_POST['nome'])){?>
	<p>Campo Nome em branco</p>
<?php
}
elseif(empty($_POST['cpf'])){?>
	<p>Campo CPF em branco</p>
<?php
}
elseif(empty($_POST['endereco'])){?>
	<p>Campo ENDERECO em branco</p>
<?php
}
elseif(empty($_POST['telefone'])){?>
	<p>Campo TELEFONE em branco</p>
<?php
}
elseif(empty($_POST['email'])){?>
	<p>Campo E-MAIL em branco</p>
<?php
}
elseif(empty($_POST['senha'])){?>
	<p>Campo SENHA em branco</p>
<?php
}
elseif(empty($_POST['senha-repetir'])){?>
	<p>Campo SENHA REPETIR em branco</p>
<?php
}
#termina a verificação aqui!
#Enviado os dados para o banco	
else{
$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$endereco = $_POST['endereco'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$telefone = $_POST['telefone'];
	
	$clientes = new Clientes($nome,$cpf,$endereco,$email,$senha,$telefone);

/*Chamando a função de inserir novo cadastro. 
Checando se houve sucesso ou não na entrada dos dados ao banco.*/
	if(insereUsuario($conexao, $clientes)){
?>
		<p class="text-success">Usuário Cadastrado</p>
<?php 
	} else {
		$msg = mysqli_error($conexao);
?>
		<p class="text-danger">Usuário não cadastrado <?= $msg?></p>
<?php
	}
}
?>

