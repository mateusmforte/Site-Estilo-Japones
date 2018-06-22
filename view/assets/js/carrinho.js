var carrinho = $("#tabela-pedido>table>tbody");
var countCarrinho = $("#qntd-carrinho");
var btnCarrinho = $("#btn-carrinho");

$(document).ready(function(){
    var btnAdcionaCarrinho = $(".btn-adicionar-carrinho");
    btnAdcionaCarrinho.click(function(){
        adicionaProduto($(this));
        totalPedido(buscaItensPedido());
        alteraQtdItensCarrinho("add");
    });
});

function buildItemPedido(nomeProduto,qtdProduto,precoProduto){
    var novoItem = $("<tr></tr>");
   
    var nomeItem = $("<td></td>").addClass("nome-pedido").text(nomeProduto);
    var qtdItem = $("<td></td>").addClass("qtd-pedido").text(qtdProduto);
    var qtdPrecoItem = $("<td></td>").addClass("qtd-preco-pedido").text(precoProduto);
    var removerItem = $("<td></td>").addClass("remover-item");
    var botaoRemover = $("<span></span>").append("<i></i>").addClass("icon-close btn-remover-item");
    removerItem.append(botaoRemover);

    novoItem.append(nomeItem,qtdItem,qtdPrecoItem,removerItem);
    carrinho.append(novoItem);
    var btnRemoveCarrinho = $(".btn-remover-item");
    btnRemoveCarrinho.click(function(){
        removeProduto($(this));
    });
    return carrinho;
}

function removeSifrao(texto){
    var re =  /\d[0-9]*,\d[0-9]*/g;
    var textoSemSifrao = re.exec(texto).toString();
    return textoSemSifrao;
}

function buscaItensPedido(){
    var itensCarrinho = $(carrinho).find("tr");
    $("#lista-carrinho").hide();
    $("#tabela-pedido").show();
    var itens = [];
   
    itensCarrinho.each(function(item){
        var qtdItem = $(this).find(".qtd-pedido").text();
        var precoItem = removeSifrao($(this).find(".qtd-preco-pedido").text());
        precoItem = precoItem.replace(",",".");
        propriedadesItem = {
            preco : precoItem,
            qtd : qtdItem
        };
        itens.push(propriedadesItem);
    });
    return itens;
}

function totalPedido(pedido){
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

function adicionaProduto(el){ //adiciona produto ao carrinho
    var nomeProduto = el.parent().find(".titulo-produto");
    var qtdProduto = el.parent().find(".qtd-produto").val();
    var precoProduto = el.parent().find(".preco-produto").text();
    var precoProdutoExp = removeSifrao(precoProduto);
    buildItemPedido(nomeProduto.text(),qtdProduto,precoProduto);
    
}

function removeProduto(el){
    item = el.parent().parent();
    item.remove();
    alteraQtdItensCarrinho("del");
}

var countItemAdicionado = 0;
console.log(countItemAdicionado);
function alteraQtdItensCarrinho(action){
    if(action == "add"){
        if(countItemAdicionado >= 0)    
            countItemAdicionado += 1;
            console.log(countItemAdicionado);
            countCarrinho.text(countItemAdicionado.toString());
    }else{
            if(countItemAdicionado > 0)    
            countItemAdicionado -= 1;
            console.log(countItemAdicionado);
            countCarrinho.text(countItemAdicionado.toString());
    }
  

}