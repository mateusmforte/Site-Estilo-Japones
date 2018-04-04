var menu = document.querySelector('#menu');
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
           menu.style.display = "none";
           textoOpcoes.style.display = "none";
           opcao.style.display = "block";
       }
   }
}
menu.addEventListener("click",mostraOpcoesSabor);

/*botaoVoltar.addEventListener("click",function(){
    menu.style.display = "block";
    opcao.style.display = "none";
});*/

