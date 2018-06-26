var categoriasExistentes = [];

buscaCategorias();
categoriasExistentes.forEach(function(categoria){
    produtosCategoria(categoria);
});

function buscaCategorias(){
    var categorias = $("#opcoes-cardapio").find("a");
    categorias.each(function(categoria){

        var idCategoria = $(this).attr("id").replace("btn-","");    
        if (categoriasExistentes.indexOf(idCategoria) < 0) {
            categoriasExistentes.push(idCategoria);    
        }
    });
    console.log(categoriasExistentes);
}



btnCategoria = ($("#opcoes-cardapio").find("a")).click(function(){
    var opcao = $(this).attr("id").replace("btn-","");  
    var produtos = $(".produtos").find("#"+opcao);
    console.log(produtos);
    
    
});

function produtosCategoria(categoria){
    var cardapio = $("#cardapio-produtos>.produtos");    
    var tabPanel = $("<div></div>");
    tabPanel.addClass("tab-pane fade show");
    if(categoria == "temakis"){
        tabPanel.addClass("active");
    }
    tabPanel.attr("role", "tabpanel");
    tabPanel.attr("id",categoria);
    tabPanel.append(criaGrupoProdutos());
    tabPanel.append(criaGrupoProdutos());
    cardapio.append(tabPanel);
    return cardapio;
}
/*function produtosCategoria(categoria) {
    var cardapio = $("#cardapio-produtos>.produtos");    
    var tabPanel = $("<div></div>");
    tabPanel.addClass("tab-pane fade show active");
    tabPanel.attr("role", "tabpanel");
    var categoriasProd = ["temakis","niguiris","sashimis","rolls","yakisobas","combos","variados","sobremesas","bebidas"];
    categoriasProd.forEach(function(i){
        if(i == categoria){
            tabPanel.attr("id", categoria);
            for(var j = 0; j<2; j++){
                tabPanel.append(criaGrupoProdutos());
                
            }
        }else{
            return 0;
        }
    });
    cardapio.append(tabPanel);
    return cardapio;
}*/
function criaGrupoProdutos() {
    var cardGroup = $("<div></div>");
    cardGroup.addClass("card-group d-inline-flex align-items-center flex-wrap");
    cardGroup.prepend(criarProduto(null, "Camarão", "R$5,90", "Camarão Temaki"));
    cardGroup.prepend(criarProduto(null, "Salmão", "R$10,90", "Salmão Temaki"));
    cardGroup.prepend(criarProduto(null, "Atum", "R$5,80", "Atum Temaki"));
   
    return cardGroup;
}
function criarProduto(img, titulo, preco, descricao) {
    var cardProduto = $("<div></div>").addClass("card flex-wrap item-cardapio produto"); //Cria o card 
    var cardProdutoBody = $("<div></div>").addClass("card-body d-flex flex-column align-itens-center");//cria o corpo do card
    cardProdutoBody.append(insereImagemProduto(img));
    cardProdutoBody.append(insereTituloProduto(titulo));
    cardProdutoBody.append(inserePrecoProduto(preco));
    cardProdutoBody.append(insereDescricaoProduto(descricao));
    cardProdutoBody.append(insereQuantidadeProduto());
    cardProdutoBody.append(insereBtnAdicionarCarrinho());
    cardProduto.append(cardProdutoBody);
    return cardProduto;
}

function insereImagemProduto(img) {
    var img = $("<img>").addClass("img-fluid imagem-produto");//Tag img
    img.attr("src", "assets/img/aea6de9cbaee9d2704dcf81f4a194991-754x394.jpg"); //!!! Fazer com que a imagem se altere através do banco!!!
    return img;
}

function insereTituloProduto(titulo) {
    var tituloProduto = $("<h4>").addClass("card-title titulo-produto center");
    tituloProduto.text(titulo);
    return tituloProduto;
}

function inserePrecoProduto(preco) {
    var precoProduto = $("<h5>").addClass("preco-produto center");
    precoProduto.text(preco);
    return precoProduto;
}
function insereDescricaoProduto(descricao) {
    var descricaoProduto = $("<p>").addClass("card-text descricao-produto");
    descricaoProduto.text(descricao);
    return descricaoProduto;
}

function insereQuantidadeProduto() {
    var divQtd = $("<div>").addClass("d-flex flex-column quantidade-produto");
    var txtSpanQtd = $("<span>").addClass("m-auto").text("Quantidade");
    var qtdController = $("<div>").addClass("m-auto quantidade");
    var btnRemoveQtd = $("<button>").addClass("btn btn-danger qtd-botoes qtd-remove").attr("type", "button").text("-");
    var btnAdicionarQtd = $("<button>").addClass("btn btn-danger qtd-botoes qtd-add").attr("type", "button").text("+");
    var inputQtd = $("<input>").addClass("qtd-produto").attr("type", "number").attr("value", "0").attr("min", "0");
    divQtd.append(txtSpanQtd);
    qtdController.append(btnRemoveQtd);
    qtdController.append(inputQtd);
    qtdController.append(btnAdicionarQtd);
    divQtd.append(qtdController);
    return divQtd;
}

function insereBtnAdicionarCarrinho() {
    var btnAdicionarCarrinho = $("<button>").addClass("btn btn-outline-danger btn-block btn-adicionar-carrinho");
    btnAdicionarCarrinho.attr("type", "button");
    btnAdicionarCarrinho.text("Adicionar ao Carrinho");
    return btnAdicionarCarrinho;
}