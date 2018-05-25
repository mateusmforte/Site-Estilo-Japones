<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estilo Japonês Sistema Delivery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
    <link rel="stylesheet" href="assets/css/barraNavegacao.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="d-flex justify-content-center align-items-center align-content-center" id="banner"><img class="img-fluid d-flex align-items-center align-content-center align-self-center m-auto" src="assets/img/japa.png"></div>
    <nav class="navbar navbar-light navbar-expand-md">
        <div class="container-fluid"><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="#">
                            <div class="input-group">
                                <div class="input-group-prepend"></div><input class="form-control" type="text" placeholder="Pesquisar...">
                                <div class="input-group-append"><button class="btn btn-outline-light" type="button"><i class="icon ion-search" data-bs-hover-animate="pulse" style="font-size:18px;"></i></button></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav ml-auto" id="nav-userOn">
                    <li class="dropdown"><a class="dropdown-toggle nav-link text-monospace dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" id="minha-conta"><i class="fa fa-user-circle-o" id="icone-usuario"></i>&nbsp;</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Meus Pedidos</a><a class="dropdown-item" role="presentation" href="#">Alterar Dados</a><a class="dropdown-item" role="presentation" href="#">Sair</a></div>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-monospace" href="#"><i class="material-icons" id="carrinho">shopping_cart</i></a></li>
                </ul>
                <ul class="nav navbar-nav d-flex" id="nav-noUserOn">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#login-modal" id="btn-login" data-toggle="modal" data-target="#login-modal">Login</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-white" href="#" id="btn-cadastro" data-toggle="modal" data-target="#cadastro-modal">Cadastre-se</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="modal fade" role="dialog" tabindex="-1" id="login-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body login-clean"><a class="float-right btn-close" href="#"><i class="fa fa-close float-right"></i></a>
                    <form method="post" id="login-cliente">
                        <h2 class="sr-only">Login Form</h2>
                        <div class="illustration"><i class="icon ion-ios-navigate" style="color:rgb(157,0,33);"></i></div>
                        <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" id="email"></div>
                        <div class="form-group"><input class="form-control" type="password" name="senha" placeholder="Senha" id="senha"></div>
                        <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color:rgb(98,36,49);">Log In</button></div><a href="#" class="forgot" style="color:rgb(255,68,147);">Esqueceu sua Senha?</a></form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade register-photo" role="dialog" tabindex="-1" id="cadastro-modal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body" style="padding:0px;"><a class="float-right btn-close" href="#"><i class="fa fa-close float-right"></i></a>
                    <form action = "login.php" method="post" id="cadastro-cliente">
                        <h2 class="text-center"><strong>Cadastre-se</strong></h2>
                        <div class="form-group"><input class="form-control" type="text" name="nome" placeholder="Nome Completo" id="nome"></div>
                        <div class="form-group"><input class="form-control" type="text" name="cpf" placeholder="CPF" id="cpf"></div>
                        <div class="form-group"><input class="form-control" type="text" name="endereco" placeholder="Endereço" id="endereco"></div>
                        <div class="form-group"><input class="form-control" type="text" name="telefone" placeholder="Telefone" id="telefone"></div>
                        <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" id="email"></div>
                        <div class="form-group"><input class="form-control" type="password" name="senha" placeholder="Senha" id="senha"></div>
                        <div class="form-group"><input class="form-control" type="password" name="senha-repetir" placeholder="Repita a Senha" id="repetirSenha"></div>
                        <div class="form-group"><button class="btn btn-primary btn-block" type="submit" id="btn-criarconta">Criar Conta</button></div><a href="#" class="already">Ja Possui uma conta? Login</a></form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="assets/js/cadastro.js"></script>
    <script src="assets/js/login.js"></script>
</body>

</html>