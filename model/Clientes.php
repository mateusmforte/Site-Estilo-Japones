<?php

Class Clientes {

    private $id;
    private $senha;
    private $cpf;
    private $nome;
    private $endereco;
    private $email;
    private $telefone;

    function __construct($nome,$cpf,$endereco,$email,$senha,$telefone){
        $this->senha = $senha;
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->email = $email;
        $this->telefone = $telefone;
    }

    function getID(){
        return $this->id;
    }

    function setID($id){
        $this->id = $id;
    }

    function getSenha(){
        return $this->senha;
    }

    function setSenha($senha){
        $this->senha = $senha;
    }

    function getCPF(){
        return $this->cpf;
    }

    function setCPF($cpf){
        $this->cpf = $cpf;
    }

    function getNome(){
        return $this->nome;
    }

    function setNome($nome){
        $this->nome = $nome;
    }

    function getEndereco(){
        return $this->endereco;
    }

    function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    function getEmail(){
        return $this->email;
    }

    function setEmail($email){
        $this->email = $email;
    }

    function getTelefone(){
        return $this->telefone;
    }

    function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    function alterarCadastro(){

    }

    function alterarSenha(){

    }

    function desativarUsuario(){

    }

    function verificarStatusUsuario(){

    }


}

?>