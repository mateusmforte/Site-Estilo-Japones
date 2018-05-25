var qtdAdd = $(".qtd-add");
var qtdRemove = $(".qtd-remove");

qtdAdd.click(adicionaQtd);
qtdRemove.click(removeQtd);
function adicionaQtd(){
    /*Retornar aqui caso n funcione em outros navegadores*/
    var qtd = document.querySelector(".qtd-produto");
    qtd.stepUp(1);
}
function removeQtd(){
   var qtd = document.querySelector(".qtd-produto");
   qtd.stepDown(1);
}

