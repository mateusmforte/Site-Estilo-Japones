var modalLogin = $("#login-modal");
$("#btn-login").click(function(){
    modalLogin.modal();
});
$(".btn-close").click(function(){
    $(this).preventDefault;
    modalLogin.modal("hide");
});