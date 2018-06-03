$(function(){
    var produtos = $(".produtos").find(".card-group");
    var teste = $("<h1></h1>").text("TESTE");
    $.prepend(teste);
    if(produtos){
        console.log("achou");
        console.log(produtos);
    }
    produtos.prepend(criarProduto());
});


function criarProduto(){
    var cardProduto = $("<div>").addClass("card flex-wrap item-cardapio produto"); //Cria o card 
    var cardProdutoBody = $("<div>").addClass("card-body d-flex flex-column align-itens-center");//cria o corpo do card

    cardProdutoBody.append(insereImagemProduto());
    cardProdutoBody.append(insereTituloProduto());
    cardProdutoBody.append(inserePrecoProduto());
    cardProdutoBody.append(insereDescricaoProduto());
    cardProdutoBody.append(insereQuantidadeProduto());
    cardProdutoBody.append(insereBtnAdicionarCarrinho());

    cardProduto.append(cardProdutoBody);
}
function insereImagemProduto(){
    var img = $("<img>").addClass("img-fluid imagem-produto");//Tag img
    img.attr("src","assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg"); //!!! Fazer com que a imagem se altere através do banco!!!
}
function insereTituloProduto(){
    var tituloProduto = $("<h4>").addClass("card-title titulo-produto");
    tituloProduto.text("Titulo");
}
function inserePrecoProduto(){
    var precoProduto = $("<h5>").addClass("preco-produto");
    precoProduto.text("R$0,00");
}
function insereDescricaoProduto(){
    var descricaoProduto = $("<p>").addClass("card-text descricao-produto");
    descricaoProduto.text("Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.");
}
function insereQuantidadeProduto(){
    var divQtd = $("<div>").addClass("d-flex flex-column quantidade-produto");
    var txtSpanQtd = $("<span>").addClass("m-auto").text("Quantidade");


    var qtdController = $("<div>").addClass("m-auto quantidade");
    var btnRemoveQtd = $("<button>").addClass("btn btn-danger qtd-botoes qtd-remove").attr("type","button").text("-");
    var btnAdicionarQtd = $("<button>").addClass("btn btn-danger qtd-botoes qtd-add").attr("type","button").text("+");
    var inputQtd = $("<input>").addClass("qtd-produto").attr("type","number").attr("value","0").attr("min","0");
    
    divQtd.append(txtSpanQtd);
   
    qtdController.append(btnRemoveQtd);
    qtdController.append(inputQtd);
    qtdController.append(btnAdicionarQtd);

    divQtd.append(qtdController);
}
function insereBtnAdicionarCarrinho(){
    var btnAdicionarCarrinho = $("<button>").addClass("btn btn-outline-danger btn-block btn-adicionar-carrinho");
    btnAdicionarCarrinho.attr("type","button");
    btnAdicionarCarrinho.text("Adicionar ao Carrinho");
}
/*
Produto
    imagem-produto
    titulo-produto
    preco-produto
    quantidade-produto
    quantidade
    btn-adicionar-carrinho
*/