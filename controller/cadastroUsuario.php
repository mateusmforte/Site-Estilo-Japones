<?php
require_once("logica-usuario.php");
require_once("conecta.php");

#Verificando os campos em branco
verificaCadastro($conexao, $_POST);