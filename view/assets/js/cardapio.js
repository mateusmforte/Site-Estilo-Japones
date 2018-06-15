$(document).ready(function(){
  var qtdAdd = $(".qtd-add");
  var qtdRemove = $(".qtd-remove");
  
  
  $(qtdAdd).on('click', function(){
    adicionaQtd( $(this) );
  });
  $(qtdRemove).on('click', function(){
    removeQtd( $(this) );
  });
});

function adicionaQtd(el){
	var produto = el.closest(".quantidade").find(".qtd-produto");
  var qtd = parseInt(produto.val());
  qtdAdiciona = qtd + 1;
	produto.val(qtdAdiciona);
}
function removeQtd(el){
	var produto = el.closest(".quantidade").find(".qtd-produto");
  var qtd = parseInt(produto.val());
  if(qtd == 0){
      return false;
  }else{
      qtdRemove = qtd - 1;
      produto.val(qtdRemove);
  }   
}