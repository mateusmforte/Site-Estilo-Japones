$(document).ready(function(){
    var btnCarrinho = $(".btn-adicionar-carrinho");
    var countCarrinho = $("#qntd-carrinho");
    var carrinho = $("#btn-carrinho");

    btnCarrinho.on("click",function(){
        adicionaProduto($(this));
    });
});

function adicionaProduto(el){
    var re = /\d[0-9]*,\d[0-9]*/g;
    var nomeProduto = el.parent().find(".titulo-produto");
    var qtdProduto = el.parent().find(".qtd-produto").val();
    var precoProduto = el.parent().find(".preco-produto").text();
    var precoProdutoExp = re.exec(precoProduto).toString();
    console.log(nomeProduto.text());
    console.log(qtdProduto);
    if(qtdProduto>0){
        var totalProduto = (parseFloat(precoProdutoExp.replace(",",".")) * qtdProduto);
        console.log(totalProduto);
    }
}
