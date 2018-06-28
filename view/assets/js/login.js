var modalLogin = $("#login-modal");
$("#btn-login").click(function(){
    modalLogin.modal();
});
$(".btn-close").click(function(){
    modalLogin.modal("hide");
});