var modalCadastro = $("#cadastro-modal");
$(function(){
    $("#cpf").mask('000.000.000-00');
});
$("#btn-cadastro").click(function(){
     modalCadastro.modal();
});
$(".btn-close").click(function(){

    modalCadastro.modal("hide"); 
});

var btnCadastrar = $("#btn-criarconta");
btnCadastrar.click(function(){
    var cpf = $("#cpf").val();    
    if(TestaCPF(cpf)){
        $("#cpf").css("border-color","green");
    }else{
        $("#cpf-invalido").toggle();
        $("#cpf").css("border-color","red");
    }
});
function TestaCPF(strCPF) {
    var Soma;
    var Resto;
    Soma = 0;
    if (strCPF == "00000000000") return false;
     
    for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
    Resto = (Soma * 10) % 11;
     
    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(9, 10)) ) return false;
     
    Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;
     
    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(10, 11) ) ) return false;
    return true;
}
