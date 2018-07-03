//Declaração das variaveis recebendo o objeto jQUery com seletores
var modalCadastro = $("#cadastro-modal");

var nome = $("#nome");

var cpf = $("#cpf");
var cpfInvalido = $("#cpf-invalido");

var endereco = $("#endereco");

var telefone = $("#telefone");
var telefoneInvalido = $("#telefone-invalido");

var email = $("#emailCadastro");

var senha = $("#senhaCadastro");
var repetirSenha = $("#repetirSenha");
var senhaIncompativel = $("#senhaIncompativel");

//Fim das declarações

$(function(){//Quando a página é carregada executa os códigos dentro dela
    cpf.mask('000.000.000-00'); //Mascara adicionada ao CPF e Telefone através da API Mask
    telefone.mask('(00) 90000-0000');
});

$("#btn-cadastro").click(function(){ // Ao clicar no botão "Cadastrar-se" na barra de navegação
     modalCadastro.modal(); // Abre a janela de cadastro
});
$(".btn-close").click(function(){
    modalCadastro.modal("hide"); // Ao clicar no X fecha a janela de Modal
});
repetirSenha.on("input", function() { // Verifica na hora se os caracteres inseridos no campo "Repetir Senha" batem com os do Minha senha
    var senhaDigitada = senha.val(); // valor digitado no campo senha
    var digitado = repetirSenha.val(); // valor digitado no campo repetir senha
    var comparavel = senhaDigitada.substr(0, digitado.length); //pega o valor contido na senha digitada e separa letra por letra pra ser comparado

    if (digitado == comparavel) { // se a letra digitada for igual a letra no campo senha manter a borda vermelha e oculta msg de senha diferente
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


    strTelefone = telefone.cleanVal(); // retira a mascara do telefone para ser comparavel
    

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

function verificaCampoVazio(campo){    // valida se o campo possui valor, caso não adiciona uma borda amarela
    if(campo.length == 1 | campo.length == 0){
          campo.css("border-color","yellow");          
          //campo.addClass("borda-amarela");
    }else{
        return false;
    }
}
function testaTelefone(strTelefone){ // verifica o tamanho de caracteres inseridos no campo telefone
    if(strTelefone.length == 11 ||  strTelefone.length == 10){ // verifica se o valor é 11(contém o digito 9)/10 ( sem o digito 9)
        return true;
    }else{
        return false;
    }
}
