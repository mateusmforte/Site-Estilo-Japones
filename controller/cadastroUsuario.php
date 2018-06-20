<?php
require_once("banco-usuario.php");
require_once("conecta.php");
require_once("../model/Clientes.php")

#Chamando a função de inserir novo cadastro. Checando se houve sucesso ou não.
if(insereUsuario($conexao, $clientes){?>
	<p class="text-success">Usuário Cadastrado</p>
<?php 
} else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">Usuário não cadastrado <?= $msg?></p>
<?php
}
?>