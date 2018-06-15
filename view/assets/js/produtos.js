
var produtos = $(".produtos").find(".card-group");
produtos.prepend(criarProduto(null,"Camarão","R$35,90","Temaki Camarão"));

function criarProduto(){
    var cardProduto = $("<div></div>").addClass("card flex-wrap item-cardapio produto"); //Cria o card 
    var cardProdutoBody = $("<div></div>").addClass("card-body d-flex flex-column align-itens-center");//cria o corpo do card

    cardProdutoBody.append(insereImagemProduto());
    cardProdutoBody.append(insereTituloProduto());
    cardProdutoBody.append(inserePrecoProduto());
    cardProdutoBody.append(insereDescricaoProduto());
    cardProdutoBody.append(insereQuantidadeProduto());
    cardProdutoBody.append(insereBtnAdicionarCarrinho());

    cardProduto.append(cardProdutoBody);

    return cardProduto;
   
}
function insereImagemProduto(img){
    var img = $("<img>").addClass("img-fluid imagem-produto");//Tag img
    img.attr("src","assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg"); //!!! Fazer com que a imagem se altere através do banco!!!
    return img;
}
function insereTituloProduto(titulo){
    var tituloProduto = $("<h4>").addClass("card-title titulo-produto center");
    tituloProduto.text(titulo);
    return  tituloProduto;
}
function inserePrecoProduto(preco){
    var precoProduto = $("<h5>").addClass("preco-produto center");
    precoProduto.text(preco);
    return precoProduto;
}
function insereDescricaoProduto(descricao){
    var descricaoProduto = $("<p>").addClass("card-text descricao-produto");
    descricaoProduto.text(descricao);
    return descricaoProduto;
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
    return divQtd;
}
function insereBtnAdicionarCarrinho(){
    var btnAdicionarCarrinho = $("<button>").addClass("btn btn-outline-danger btn-block btn-adicionar-carrinho");
    btnAdicionarCarrinho.attr("type","button");
    btnAdicionarCarrinho.text("Adicionar ao Carrinho");
    return btnAdicionarCarrinho;
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