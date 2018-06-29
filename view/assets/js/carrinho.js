var carrinho = $("#tabela-pedido>table>tbody");
var countCarrinho = $("#qntd-carrinho");
var btnCarrinho = $("#btn-carrinho");
var countItemAdicionado = 0;
var btnAdcionaCarrinho = $(".btn-adicionar-carrinho");


btnAdcionaCarrinho.click(function(){
    console.log($(this).parent().find(".titulo-produto"));
    adicionaProduto($(this));
    totalPedido(buscaItensPedido());
});

function adicionaProduto(el){ //adiciona produto ao carrinho
    var nomeProduto = el.parent().find(".titulo-produto");
    var qtdProduto = el.parent().find(".qtd-produto").val();
    var precoProduto = el.parent().find(".preco-produto").text();
    
    if(qtdProduto == 0){
        alert("Insira ao menos 1 produto");
    }else{
        if(checkExiste($(nomeProduto).text(),buscaItensPedido())){
            alteraQtdProduto($(nomeProduto).text(),qtdProduto);
            console.log("Já existe esse pedido no carrinho");   
        }else{
            buildItemPedido(nomeProduto.text(),qtdProduto,precoProduto);
            alteraQtdItensCarrinho("add");
        }
    }
}

function buildItemPedido(nomeProduto,qtdProduto,precoProduto){//cria a linha na tabela contendo as informações sobre o pedido
    var novoItem = $("<tr></tr>");
   
    var nomeItem = $("<td></td>").addClass("nome-pedido").text(nomeProduto);
    var qtdItem = $("<td></td>").addClass("qtd-pedido").text(qtdProduto);
    var qtdPrecoItem = $("<td></td>").addClass("qtd-preco-pedido").text(precoProduto);
    var removerItem = $("<td></td>").addClass("remover-item");
    var botaoRemover = $("<span></span>").append("<i></i>").addClass("icon-close btn-remover-item").attr("onclick","removeProduto(this)");
    removerItem.append(botaoRemover);
   
    novoItem.append(nomeItem,qtdItem,qtdPrecoItem,removerItem);
    carrinho.append(novoItem);
    
}
function alteraQtdProduto(item,novaQtd){
    var itensNoCarrinho = buscaItensPedido();
    console.log(itensNoCarrinho);
    
    
   /* itensExistentes.each(function(){
        console.log($(this));
        console.log($(carrinho).find("*").find(".nome-pedido"));
        if($(this).text() == $(nomeItem).text()){
            console.log($(this).parent().find(".qtd-pedido").text());

            //var qtdNova = qtdAtual + parseInt($(qtdItem).text());
            //carrinho.find(".qtd-pedido").text(qtdNova.toString());
        }
    });*/
}
function removeSifrao(texto){//função pra remover o Sifrão do texto recebido por padrão
    texto = texto.replace("R$","").replace(".","").replace(",",".");
    texto = parseFloat(texto).toFixed(2);
    return texto;
}
function checkExiste(item,carrinhoAtual){
    var novoItem = item;
    var itensNoCarrinho = [];
    
    carrinhoAtual.forEach(function(i){
        itensNoCarrinho.push(i.nome);
    });
    for(var i = 0; i<=itensNoCarrinho.length; i++){
        if(novoItem == itensNoCarrinho[i]){
            return true;
        }else{
            return false;
        }
    }
}
function buscaItensPedido(){ //Localiza todos os pedidos dentro do carrinho
    var itensCarrinho = $(carrinho).find("tr");
    
    var itens = [];

    itensCarrinho.each(function(item){
        var nomeProduto = $(this).find(".nome-pedido").text();        
        var qtdItem = $(this).find(".qtd-pedido").text();
        var precoItem = removeSifrao($(this).find(".qtd-preco-pedido").text());
        precoItem = precoItem.replace(",",".");
        var propriedadesItem = {
            nome : nomeProduto,
            preco : precoItem,
            qtd : qtdItem
        };    
        itens.push(propriedadesItem);   
    });
   
    return itens;
}

function totalPedido(pedido){//exibe o valor total dos itens no carrinho
    var totalPedido = $("#valor-total");
    var valores = [];
    var total = 0;
    for(var i=0; i < pedido.length; i++){
        var multiplica = parseFloat(pedido[i].preco) * parseInt(pedido[i].qtd);
        valores.push(multiplica);
        }
    for (var j=0; j<valores.length; j++){
        total = total + valores[j];
    }
    total = total.toFixed(2);
    totalPedido.text("R$"+ total.toString().replace(".",","));
}

function removeProduto(el){// deleta produto do carrinho
    var item = $(el).closest("tr");
    var itemPreco = item.find(".qtd-preco-pedido").text();
    var itemQtd = item.find(".qtd-pedido").text();
    alteraQtdItensCarrinho("del");
    subtraiValorTotal(itemPreco,itemQtd);
    item.remove();
}

function subtraiValorTotal(itemPreco,itemQtd){//diminui o valor total quando um item é removido
    var precoItem = (removeSifrao(itemPreco) * itemQtd).toFixed(2);
    var total = removeSifrao($("#valor-total").text());
    var novoTotal = total - precoItem;
    $("#valor-total").text("R$" + novoTotal.toFixed(2).replace(".",","));
}

function alteraQtdItensCarrinho(action){// altera o contador (Badge) presente no icone de carrinho na barra de navegação
    if(action == "add"){
        if(countItemAdicionado >= 0)    
            countItemAdicionado ++;
        countCarrinho.text(countItemAdicionado.toString());
    }
    if(action == "del"){
        if(countItemAdicionado > 0){
            countItemAdicionado -= 1;
        }  
        countCarrinho.text(countItemAdicionado.toString());
    }

    if(countCarrinho.text() == "0"){
        $("#tabela-pedido").hide();
        $("#lista-carrinho").show();
    }
    else{
        $("#lista-carrinho").hide();
        $("#tabela-pedido").show();
    }
}