var menu = document.querySelector('#menu');
var botaoVoltar = document.querySelectorAll(".botaoVoltar");
function mostraOpcoesSabor(event){
   var opcaoEscolhida = event.target.id;
   var opcoesDisponiveis = ["opcao-temaki",
                            "opcao-sashimi",
                            "opcao-niguiri",
                            "opcao-combos",
                            "opcao-roll",
                            "opcao-yakisoba",
                            "opcao-variados",
                            "opcao-bebidas","opcao-sobremesas"];
    var divsCardapio = ["#temaki",
                        "#sashimi",
                        "#niguiri",
                        "#combos",
                        "#rollmaki",
                        "#yakisoba",
                        "#variados",
                      "#sobremesas",
                        "#bebidas"];
   for(var i = 0; i<opcoesDisponiveis.length; i++){
       if(opcaoEscolhida == opcoesDisponiveis[i]){
           var opcao = document.querySelector(divsCardapio[i]);
           menu.classList.add("fade-out");
           setTimeout(function(){
              menu.style.display = "none";
              menu.classList.remove("fade-out");
           },500);
           opcao.classList.add("fade-in");
           setTimeout(function(){
             opcao.style.display = "block";
             opcao.classList.remove("fade-in");
           },500);
       }
   }
    botaoVoltar.forEach(function(botao){
        botao.addEventListener("click",function(){
             opcao.classList.add("fade-out");
             setTimeout(function(){
               opcao.style.display = "none";
               opcao.classList.remove("fade-out");
             },500);
             menu.classList.add("fade-in");
             setTimeout(function(){
                menu.style.display = "block";
                menu.classList.remove("fade-in");
             },500);
            console.log("Botao clicado");
        });
    });
}
menu.addEventListener("click",mostraOpcoesSabor);
