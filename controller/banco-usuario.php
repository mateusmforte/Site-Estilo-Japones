<?php

function buscaUsuario($conexao, $email, $senha){
    $senhaMd5 = md5($senha);
    $email = mysqli_real_escape_string($conexao, $email);
    $query = "select * from usuarios where usuario='{$email}' and senha='{$senhaMd5}'"; 
    $resultado = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
};

function insereUsuario($conexao, $nome, $cpf, $endereco, $telefone, $email, $senha){
	$senhaMd5 = md5($senha);
    $query = "insert into usuarios(usuario, senha) values('{$email}','{$senhaMd5}');
				insert into clientes(nome, cpf, endereco, telefone) 
                    values('{$nome}', {$cpf}, '{$endereco}', {$telefone})";
                
    return mysqli_multi_query($conexao, $query);
}