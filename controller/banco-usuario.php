<?php
require_once("conecta.php");

function buscaUsuario($conexao, $email, $senha){
    $senhaMd5 = md5($senha);
    $email = mysqli_real_escape_string($conexao, $email);
    $query = "select * from usuarios where usuario='{$email}' and senha='{$senhaMd5}'"; 
    $resultado = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
};

function insereUsuario($conexao, $nome, $cpf, $endereco, $telefone, $email, $senha){
    $query = "insert into usuarios (usuario, senha) values('{$email}','{$senha}')
                insert into cadastro (nome, cpf, endereco, telefone) 
                    values('{$nome}','{$cpf}','{$endereco}','{$telefone}'";
    return mysqli_query($conexao, $query);
}