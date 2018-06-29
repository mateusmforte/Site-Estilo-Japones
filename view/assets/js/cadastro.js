var modalCadastro = $("#cadastro-modal");

var nome = $("#nome");

var cpf = $("#cpf");
var cpfInvalido =$("#cpfInvalido");

var endereco = $("#endereco");

var telefone = $("#telefone");
var telefoneInvalido = $("#telefone-invalido");

var email = $("#emailCadastro");

var senha = $("#senhaCadastro");
var repetirSenha = $("#repetirSenha");
var senhaIncompativel = $("#senhaIncompativel");

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
repetirSenha.on("input", function() {
    var senhaDigitada = senha.val();
    var digitado = repetirSenha.val();
    var comparavel = senhaDigitada.substr(0, digitado.length);

    if (digitado == comparavel) {
        repetirSenha.css("border-color","green");
        senhaIncompativel.hide();
    } else {
        repetirSenha.css("border-color","red");
        senhaIncompativel.show();
    }
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

   //strCpf = cpf.cleanVal(); 
    strTelefone = telefone.cleanVal();
    
    
    if(CPF.validate(cpf.val())){
       cpf.css("border-color","green");
       cpfInvalido.hide();
    }else{
       cpf.css("border-color","red");
       cpfInvalido.show();
       return false;
    }

    if(testaTelefone(strTelefone)){
        telefone.css("border-color","green");
        telefoneInvalido.hide();
    }else{
        telefone.css("border-color","red");
        telefoneInvalido.show();
        return false;
    }

    if(senha.val() != repetirSenha.val()){
        return false;
    }
});

function verificaCampoVazio(campo){    
    if(campo.length == 1 | campo.length == 0){
        campo.css("border-color","yellow");
    }else{
        return false;
    }
}
function testaTelefone(strTelefone){
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
