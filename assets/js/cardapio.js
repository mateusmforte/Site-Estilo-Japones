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

/*menu.addEventListener("click",function(event){
    var opcao = event.target.id;
    console.log(opcao);
    switch (opcao) {
        case "opcao-temaki":
            var temaki = document.querySelector("#temaki");
            temaki.style.display = "block";
            menu.style.display = "none";
            break;
        case "opcao-niguiri":
            var niguiri = document.querySelector("#niguiri");
            niguiri.style.display = "block";
            menu.style.display = "none";
            break;
        case "opcao-sashimi":
            var sashimi = document.querySelector("#sashimi");
            sashimi.style.display = "block";
            menu.style.display = "none";
            break;
        case "opcao-gunkan":
            var gunkan = document.querySelector("#gunkan");
            gunkan.style.display = "block";
            menu.style.display = "none";
            break;
        case "opcao-roll":
            var roll = document.querySelector("#rollmaki");
            roll.style.display = "block";
            menu.style.display = "none";
            break;
        case "opcao-yakisoba":
            var yakisoba = document.querySelector("#yakisoba");
            yakisoba.style.display = "block";
            menu.style.display = "none";
            break;
        case "opcao-variados":
            var variados = document.querySelector("#variados");
            variados.style.display = "block";
            menu.style.display = "none";
            break;
        case "opcao-bebidas":
            var bebidas = document.querySelector("#bebidas");
            bebidas.style.display = "block";
            menu.style.display = "none";
            break;
    }
});*/