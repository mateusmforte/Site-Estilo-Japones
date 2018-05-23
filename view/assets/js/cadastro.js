var modalCadastro = $("#cadastro-modal");
$("#btn-cadastro").click(function(){
     $(this).preventDefault;
     modalCadastro.modal();
});
$(".btn-close").click(function(){
    $(this).preventDefault;
    modalCadastro.modal(); 
});