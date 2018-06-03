var qtdAdd = $(".qtd-add");
var qtdRemove = $(".qtd-remove");
var produto = $(".qtd-produto");
console.log(produto);

qtdAdd.click(adicionaQtd);
qtdRemove.click(removeQtd);
function adicionaQtd(){
    var qtd = parseInt(produto.val());
    qtdAdiciona = qtd + 1;
    $(".qtd-produto").val(qtdAdiciona);
   
}
function removeQtd(){
    var qtd = parseInt($(".qtd-produto").val());
    if(qtd == 0){
        return false;
    }else{
         qtdRemove = qtd - 1;
         $(".qtd-produto").val(qtdRemove);
    }   
}