<?php
    require_once("../controller/alerta.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estilo Japonês Sistema Delivery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Architects+Daughter">
    <link rel="stylesheet" href="assets/css/barraNavegacao.css">
    <link rel="stylesheet" href="assets/css/cardapio.css">
    <link rel="stylesheet" href="assets/css/carrinho.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/rodape.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="d-flex justify-content-center align-items-center align-content-center" id="banner"><img class="img-fluid d-flex align-items-center align-content-center align-self-center m-auto" src="assets/img/japa.png"></div>
    <nav class="navbar navbar-light navbar-expand-md sticky-top">
        <div class="container-fluid"><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto" id="nav-userOn">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" id="nome-usuarioLogado">Nome Usuário</a></li>
                    <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" id="minha-conta"><i class="fa fa-user-circle-o" id="icone-usuario"></i>&nbsp;</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Meus Pedidos</a><a class="dropdown-item" role="presentation" href="#">Alterar Dados</a><a class="dropdown-item" role="presentation" href="#">Sair</a></div>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#carrinho" data-toggle="modal" data-target="#carrinho"><i class="material-icons" id="btn-carrinho">shopping_cart</i></a></li>
                </ul>
                <ul class="nav navbar-nav d-flex" id="nav-noUserOn">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#login-modal" id="btn-login" data-toggle="modal" data-target="#login-modal">Login</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-white" href="#" id="btn-cadastro" data-toggle="modal" data-target="#cadastro-modal">Cadastre-se</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="cardapio"> <!--Início Cardápio-->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Faça seu pedido</h1>
                    <div class="input-group" id="pesquisa-produto">
                        <div class="input-group-prepend"></div><input class="form-control" type="text" placeholder="Pesquisar..." id="campo-pesquisa">
                        <div class="input-group-append"><button class="btn btn-outline-light" type="button" id="btn-pesquisa"><i class="icon ion-search" data-bs-hover-animate="pulse" style="font-size:18px;"></i></button></div>
                    </div>
                    <div>
                        <ul class="nav nav-pills" id="opcoes-cardapio">
                            <li class="nav-item btn-categoria"><a class="nav-link active" role="tab" data-toggle="pill" href="#tab-10">Temakis</a></li>
                            <li class="nav-item btn-categoria"><a class="nav-link" role="tab" data-toggle="pill" href="#tab-2">Niguiris</a></li>
                            <li class="nav-item btn-categoria"><a class="nav-link" role="tab" data-toggle="pill" href="#tab-3">Sashimis</a></li>
                            <li class="nav-item btn-categoria"><a class="nav-link" role="tab" data-toggle="pill" href="#tab-4">Rolls</a></li>
                            <li class="nav-item btn-categoria"><a class="nav-link" role="tab" data-toggle="pill" href="#tab-5">Yakisobas</a></li>
                            <li class="nav-item btn-categoria"><a class="nav-link" role="tab" data-toggle="pill" href="#tab-6">Combos</a></li>
                            <li class="nav-item btn-categoria"><a class="nav-link" role="tab" data-toggle="pill" href="#tab-7">Variados</a></li>
                            <li class="nav-item btn-categoria"><a class="nav-link" role="tab" data-toggle="pill" href="#tab-8">Sobremesas</a></li>
                            <li class="nav-item btn-categoria"><a class="nav-link" role="tab" data-toggle="pill" href="#tab-9">Bebidas</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" role="tabpanel" id="tab-2">
                                <div class="card-group d-inline-flex align-items-center flex-wrap">
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                </div>
                                <div class="card-group d-inline-flex align-items-center flex-wrap">
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" role="tabpanel" id="tab-3">
                                <div class="card-group d-inline-flex align-items-center flex-wrap">
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                </div>
                                <div class="card-group d-inline-flex align-items-center flex-wrap">
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" role="tabpanel" id="tab-4">
                                <div class="card-group d-inline-flex align-items-center flex-wrap">
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                </div>
                                <div class="card-group d-inline-flex align-items-center flex-wrap">
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" role="tabpanel" id="tab-5">
                                <div class="card-group d-inline-flex align-items-center flex-wrap">
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                </div>
                                <div class="card-group d-inline-flex align-items-center flex-wrap">
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" role="tabpanel" id="tab-6">
                                <div class="card-group d-inline-flex align-items-center flex-wrap">
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                </div>
                                <div class="card-group d-inline-flex align-items-center flex-wrap">
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" role="tabpanel" id="tab-7">
                                <div class="card-group d-inline-flex align-items-center flex-wrap">
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                </div>
                                <div class="card-group d-inline-flex align-items-center flex-wrap">
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" role="tabpanel" id="tab-8">
                                <div class="card-group d-inline-flex align-items-center flex-wrap">
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                </div>
                                <div class="card-group d-inline-flex align-items-center flex-wrap">
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" role="tabpanel" id="tab-9">
                                <div class="card-group d-inline-flex align-items-center flex-wrap">
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                </div>
                                <div class="card-group d-inline-flex align-items-center flex-wrap">
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" role="tabpanel" id="tab-10">
                                <div class="card-group d-inline-flex align-items-center flex-wrap">
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                </div>
                                <div class="card-group d-inline-flex align-items-center flex-wrap">
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                    <div class="card flex-wrap item-cardapio">
                                        <div class="card-body d-flex flex-column align-items-center"><img class="img-fluid imagens-cardapio" src="assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <div class="d-flex flex-column"><span class="m-auto">Quantidade</span>
                                                <div class="m-auto quantidade"><button class="btn btn-danger qtd-botoes qtd-remove" type="button">-</button><input type="number" value="0" min="0" class="qtd-produto"><button class="btn btn-danger qtd-botoes qtd-add" type="button">+</button></div>
                                            </div><button class="btn btn-outline-danger btn-block btn-adicionar-carrinho" type="button">Adicionar ao Carrinho</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--Final Cardápio-->
    <div><!--Inicio Onde Estamos-->
        <div class="container">
            <h1>Onde Estamos</h1>
            <div class="row">
                <div class="col-md-6">
                    <div id="endereco">
                        <p class="lead text-center"><br>Rua Ibitinga 103, esquina com a Rua Ierê<br>Vicente De Carvalho - Rio De Janeiro<br>Horário de funcionamento: Qua-Dom 18:00 - 00:00<br><br></p>
                    </div>
                    <div>
                        <h4>Telefones para contato</h4>
                        <p>(21) 98783-5146/ (21) 96966-7362 &nbsp;<i class="icon ion-social-whatsapp" style="color:rgb(28,170,5);font-size:33px;"></i><br></p>
                    </div>
                </div>
                <div class="col-md-6"><iframe allowfullscreen="" frameborder="0" width="100%" height="400" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCZNR2AJJi4RiOxbqPL5vuzWm4zEWnD5eE&amp;q=Rua+Ibitinga+103&amp;zoom=18"></iframe></div>
            </div>
        </div>
    </div>
    <div class="footer-basic"><!--Final Onde Estamos-->
        <footer>
            <div id="facebook"></div>
            <div id="horario-funcionamento"></div>
            <p class="copyright">Company Name © 2017</p>
        </footer>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="carrinho"> <!-- Início da Janela do Carrinho-->
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" id="cabecalho-carrinho">
                    <h4 class="modal-title">Seu Carrinho</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <div id="lista-carrinho">
                        <p class="text-center d-none" id="carrinho-vazio" style="font-size:26px;">Carrinho Vazio</p>
                    </div>
                    <div class="table-responsive table-bordered">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr class="table-danger">
                                    <th>Nome Produto</th>
                                    <th>Qtd</th>
                                    <th>Preço</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Sashimi Salmão</td>
                                    <td>3</td>
                                    <td>R$ 30,00</td>
                                    <td><span><i class="icon-close btn-remover-item"></i></span></td>
                                </tr>
                                <tr>
                                    <td>Sashimi Atum</td>
                                    <td>4</td>
                                    <td>R$ 40,00</td>
                                    <td><span><i class="icon-close btn-remover-item"></i></span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <ul class="list-group"></ul>
                </div>
                <div class="modal-footer">
                    <div class="d-flex" id="texto-total">
                        <h3>Total:<span id="valor-total">R$0,00</span></h3>
                    </div><button class="btn btn-primary" type="button" id="btn-finalizarPedido">Finalizar Pedido</button></div>
            </div>
        </div>
    </div> <!--Final da Janela do Carrinho-->
    <div class="modal fade" role="dialog" tabindex="-1" id="login-modal"> <!--Inicio Janela de Login-->
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body login-clean"><a class="float-right btn-close" href="#"><i class="fa fa-close float-right"></i></a>
                    <form method="post" action="../controller/login.php"id="login-cliente"><!--Form de login-->
                        <h2 class="sr-only">Login Form</h2>
                        <?php 
                            mostraAlerta("danger");
                            mostraAlerta("success");
                        ?>
                        <div class="illustration"><i class="icon ion-ios-navigate" style="color:rgb(157,0,33);"></i></div>
                        <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" id="email"></div>
                        <div class="form-group"><input class="form-control" type="password" name="senha" placeholder="Senha" id="senha"></div>
                        <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color:rgb(98,36,49);">Log In</button></div><a href="#" class="forgot" style="color:rgb(255,68,147);">Esqueceu sua Senha?</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade register-photo" role="dialog" tabindex="-1" id="cadastro-modal"><!--Inicio Janela de Cadastro-->
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body" style="padding:0px;"><a class="float-right btn-close" href="#"><i class="fa fa-close float-right"></i></a>
                    <form action="..\controller\cadastroUsuario.php" method="post" id="cadastro-cliente"><!--Form de Cadastro-->
                        <h2 class="text-center"><strong>Cadastre-se</strong></h2>
                        <div class="form-group"><input class="form-control" type="text" name="nome" placeholder="Nome Completo" id="nome"></div>
                        <div class="form-group"><input class="form-control" type="text" name="cpf" placeholder="CPF" id="cpf"></div>
                        <div class="form-group"><input class="form-control" type="text" name="endereco" placeholder="Endereço" id="endereco"></div>
                        <div class="form-group"><input class="form-control" type="text" name="telefone" placeholder="Telefone" id="telefone"></div>
                        <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" id="emailCadastro"></div>
                        <div class="form-group"><input class="form-control" type="password" name="senha" placeholder="Senha" id="senhaCadastro"></div>
                        <div class="form-group"><input class="form-control" type="password" name="senha-repetir" placeholder="Repita a Senha" id="repetirSenha"></div>
                        <div class="form-group"><button class="btn btn-primary btn-block" type="submit" id="btn-criarconta">Criar Conta</button></div><a href="#" class="already">Ja Possui uma conta? Login</a>
                    </form>
                </div>
            </div>
        </div>
    </div><!--Final Janela de Cadastro-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="assets/js/cadastro.js"></script>
    <script src="assets/js/cardapio.js"></script>
    <script src="assets/js/login.js"></script>
</body>

</html>