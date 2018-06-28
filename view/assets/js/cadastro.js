var modalCadastro = $("#cadastro-modal");

var nome = $("#nome");

var cpf = $("#cpf");
var cpfInvalido = $("#cpf-invalido");

var endereco = $("#endereco");

var telefone = $("#telefone");
var telefoneInvalido = $("telefone-invalido");

var email = $("#email");

var senha = $("#senha");
var repetirSenha = $("#repetirSenha");

$(function(){
    cpf.mask('000.000.000-00');
    telefone.mask('(00) 90000-0000');
});

$("#btn-cadastro").click(function(){
     modalCadastro.modal();
});
$(".btn-close").click(function(){

    modalCadastro.modal("hide"); 
});

var btnCadastrar = $("#btn-criarconta");
btnCadastrar.click(function(){

    verificaCampoVazio(nome);
    verificaCampoVazio(cpf);
    verificaCampoVazio(endereco);
    verificaCampoVazio(telefone);
    verificaCampoVazio(email);
    verificaCampoVazio(senha);
    verificaCampoVazio(repetirSenha);

    strCpf = cpf.cleanVal(); 
    strTelefone = telefone.cleanVal();
    
    if(TestaCPF(strCpf)){
        $("#cpf").css("border-color","green");
        $("#cpf-invalido").hide();
    }else{
        $("#cpf").css("border-color","red");
        $("#cpf-invalido").show();
    }

    if(TestaTelefone(strTelefone)){
        telefone.css("border-color","green");
    }else{
        telefone.css("border-color","red");
    }
});

function verificaCampoVazio(campo){    
    if(campo.length == 1 | campo.length == 0){
        campo.css("border-color","yellow");
    }else{
        return false;
    }
}
function TestaTelefone(strTelefone){
    if(strTelefone.length == 11 ||  strTelefone.length == 10){
        return true;
    }else{
        return false;
    }
}
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
