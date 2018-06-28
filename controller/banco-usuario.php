<?php

#Busca no banco de dados o login e senha do usuário para poder acessar.
function buscaUsuario($conexao, $email, $senha){
    $senhaMd5 = md5($senha);
    $email = mysqli_real_escape_string($conexao, $email);
    $query = "select * from usuarios where usuario='{$email}' and senha='{$senhaMd5}'"; 
    $resultado = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
};

#Função criada para adicionar novos clientes.
function insereUsuario($conexao, Clientes $clientes){
	$senhaMd5 = md5($clientes->getSenha());
    $query = "insert into clientes(nome, cpf, endereco, telefone) 
                values('{$clientes->getNome()}', {$clientes->getCPF()},
                    '{$clientes->getEndereco()}', {$clientes->getTelefone()});
                        insert into usuarios(usuario, senha, cliente_cpf) values(
                            '{$clientes->getEmail()}','{$senhaMd5}', {$clientes->getCPF()})";
                
    return mysqli_multi_query($conexao, $query);
}

function procuraCliente($conexao, $cpf){
    $query = "select * from clientes where cpf = {$cpf}";
    $resultado = mysqli_query($conexao, $query);
    $rows = mysqli_num_rows($resultado);
    return $rows;   
}