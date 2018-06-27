<?php
require_once("../model/Clientes.php");
require_once("banco-usuario.php");

session_start();

function usuarioEstaLogado(){
    return isset($_SESSION["usuario_logado"]);
}

function verificaUsuario(){
    if(!usuarioEstaLogado()){
        $_SESSION["danger"] = "Você não tem acesso" ;
        header("Location: index.php");
        die();
    }
}

function usuarioLogado() {
    return $_SESSION["usuario_logado"];
}

function logaUsuario($email){
    $_SESSION["usuario_logado"] = $email;
}

function logout() {
    session_destroy();
    session_start();
}

function verificaCadastro($conexao, $post){
	$valido = True;
	$campos = array('nome','cpf','endereco','telefone','email','senha');
	$resultado = procuraUsuario($conexao,$post['cpf']);
	echo $resultado . "<br>";
	if (!empty($resultado)){?>
		<p>Usuario já existe</p>
	<?php
	}
	else{
		foreach ($campos as $campo){ 
			if(empty($post[$campo])){?>
				<p>Campo <?=$campo?> em branco</p>
				
			<?php
				$valido = False;
				exit;
				#header("Location:../view/index.php");
			}	
		}	
		#Enviado os dados para o banco	
		if($valido){
				$nome = $post['nome'];
				$cpf = $post['cpf'];
				$endereco = $post['endereco'];
				$email = $post['email'];
				$senha = $post['senha'];
				$telefone = $post['telefone'];
				
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
	}
}