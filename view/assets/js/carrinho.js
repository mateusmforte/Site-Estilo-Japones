var carrinho = $("#carrinho").find("#tabela-pedido>table>tbody");
$(document).ready(function(){
    var btnAdcionaCarrinho = $(".btn-adicionar-carrinho");
    var countCarrinho = $("#qntd-carrinho");
    var btnCarrinho = $("#btn-carrinho");
    btnAdcionaCarrinho.click(function(){
        adicionaProduto($(this));
    });
});
/*var carrinho = $("#carrinho").find("#tabela-pedido table");
var nomePedido = carrinho.find(".nome-pedido");
var qtdPedido = carrinho.find(".qtd-pedido");
var precoPedido = carrinho.find(".qtd-preco-pedido");
var removerItem = carrinho.find(".remover-item"); 
console.log(carrinho);
console.log(nomePedido.text());
console.log(qtdPedido.text());
console.log(precoPedido.text());
console.log(removerItem);*/


/*<td class="nome-pedido">Sashimi Salmão</td>
                                    <td class="qtd-pedido">3</td>
                                    <td class="qtd-preco-pedido">R$ 30,00</td>
                                    <td class="remover-item"><span><i class="icon-close btn-remover-item"></i></span></td>*/
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
    
    return carrinho;
}

function buscaItensPedido(){
    var carrinho = $("#carrinho").find("#tabela-pedido>table>tbody");
}

function totalPedido(preco,qtd){
    var totalPedido = $("#valor-total");
    var calculoTotal = (parseFloat(preco.replace(",",".")) * qtd);
    
}

function adicionaProduto(el){
    var re = /\d[0-9]*,\d[0-9]*/g;
    var nomeProduto = el.parent().find(".titulo-produto");
    var qtdProduto = el.parent().find(".qtd-produto").val();
    var precoProduto = el.parent().find(".preco-produto").text();
    var precoProdutoExp = re.exec(precoProduto).toString();
    if(qtdProduto>0){
        totalPedido(precoProdutoExp,qtdProduto);
    }
    buildItemPedido(nomeProduto.text(),qtdProduto,precoProduto);
}
