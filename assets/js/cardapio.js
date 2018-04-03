var menu = document.querySelector('.opcoes-menu');
var botaoVoltar = document.querySelector('#botaoVoltar');
var textoOpcoes = document.querySelector('#texto-opcoes');
function mostraOpcoesSabor(event){
   var opcaoEscolhida = event.target.id;
   var opcoesDisponiveis = ["opcao-temaki",
                            "opcao-sashimi",
                            "opcao-niguiri",
                            "opcao-gunkan",
                            "opcao-roll",
                            "opcao-yakisoba",
                            "opcao-variados",
                            "opcao-bebidas"];
    var divsCardapio = ["#temaki",
                        "#sashimi",
                        "#niguiri",
                        "#gunkan",
                        "#rollmaki",
                        "#yakisoba",
                        "#variados",
                        "#bebidas"];
   console.log(opcaoEscolhida);
   for(var i = 0; i<opcoesDisponiveis.length; i++){
       if(opcaoEscolhida == opcoesDisponiveis[i]){
           var opcao = document.querySelector(divsCardapio[i]);
           opcao.style.display = "block";
           menu.style.display = "none";
       }
   }
}
menu.addEventListener("click",mostraOpcoesSabor);
textoOpcoes.style.display = "none";
botaoVoltar.addEventListener("click",function(){
    menu.style.display = "block";
    opcao.style.display = "none";
});

