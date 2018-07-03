//Variaveis globais
var carrinho = $("#tabela-pedido>table>tbody"); 
var countCarrinho = $("#qntd-carrinho");
var btnCarrinho = $("#btn-carrinho");
var countItemAdicionado = 0; // Contador usado na adição e remoção de itens no carrinho
var btnAdcionaCarrinho = $(".btn-adicionar-carrinho");
var itensNoCarrinho = []; // Vetor que armazena o valor de cada item que é inserido no carrinho 

btnAdcionaCarrinho.click(function () { // Ao clicar o botão "Adicionar ao Carrinho" executa a função adiciona produto 
    adicionaProduto($(this));           // que recebe o elemento clicado como parametro e também executa a função totalPedido 
    totalPedido(buscaItensPedido());    // atualizando o total do pedido 
});

function adicionaProduto(el) { //adiciona produto ao carrinho
    var nomeProduto = el.parent().find(".titulo-produto"); // Nme do produto na tabela do carrinho 
    var qtdProduto = el.parent().find(".qtd-produto").val();    //Quantidade do produto na tabela do carrinho
    var precoProduto = el.parent().find(".preco-produto").text();   // Preco do produto na tabela do carrinho
        
    if (qtdProduto == 0) {  // Verifica se a quantidade de produtos adicionados não é igual a 0 
        alert("Insira ao menos 1 produto");
    } else { // caso a quantidade seja diferente, verifica se o produto já foi adicionado, caso sim, acrecenta a nova quantidade ao item no carrinho
        if (checkExiste(nomeProduto.text(), buscaItensPedido())) {
            alteraQtdProduto(nomeProduto.text(), qtdProduto); // Nome do produto para comparação e a nova quantidade 
        } else {
            buildItemPedido(nomeProduto.text(), qtdProduto, precoProduto);// se o produto não foi adicionado anteriormente, ele adiciona o item normalmente
            alteraQtdItensCarrinho("add");// Adiciona 1 ao valor de itens presentes no carrinho
        }
    }
}

function buildItemPedido(nomeProduto, qtdProduto, precoProduto) {//cria a linha na tabela contendo as informações sobre o pedido
    var novoItem = $("<tr></tr>"); // Cria uma nova linha na tabela

    var nomeItem = $("<td></td>").addClass("nome-pedido").text(nomeProduto); // cria  uma coluna(atributo) "Nome do produto"
    var qtdItem = $("<td></td>").addClass("qtd-pedido").text(qtdProduto); // cria a coluna "Quantidade do produto"
    var qtdPrecoItem = $("<td></td>").addClass("qtd-preco-pedido").text(precoProduto); // Coluna contendo o valor (R$) unitário do item 
    var removerItem = $("<td></td>").addClass("remover-item");// cria a coluna que irá conter o botão de remoção de um item no carrinho
    var botaoRemover = $("<span></span>").append("<i></i>").addClass("icon-close btn-remover-item").attr("onclick", "removeProduto(this)");// cria o botão de remoção de item
    removerItem.append(botaoRemover);// insere o botão na coluna "Remover"

    novoItem.append(nomeItem, qtdItem, qtdPrecoItem, removerItem);// insere todas as colunas na linha nova
    carrinho.append(novoItem);// insere a linha na tabela

}

function alteraQtdProduto(item, novaQtd) { // Função que atualiza a quantidade de um item caso seja adicionado mais produtos daquele tipo
    var itensNoCarrinho = buscaItensPedido(); // Recupera os valores presentes no carrinho
    var nomeItem = item; // Recebe o nome do item a ser buscado na tabela

    if (itensNoCarrinho == "undefined") { // Verifica se existe item no carrinho, caso não, retorna false
        return false;
    } else {
        itensNoCarrinho.forEach(function (item) {// Se existir itens no carrinho, percorre todos 
            if (item.nome == nomeItem) {// compara se existe algum item com o nome do novo item adicionado
                var produtoEncontrado = $('.nome-pedido:contains(' + nomeItem + ')'); // variável que armazena o objeto que corresponde aquele item existente
                var qtdAtual = $(produtoEncontrado).parent().find(".qtd-pedido");// encontra a quantidade que já se encontrava presente no item no carrinho
                var qtdNova = parseInt(qtdAtual.text()) + parseInt(novaQtd); // pega a quantidade atual e soma com a nova quantidade 

                $(qtdAtual).text(qtdNova.toString());// altera o texto da quantidade  do item no carrinho para o novo valor
            }
        });
    }
}

function removeSifrao(texto) {//função pra remover o Sifrão do texto recebido por padrão
    texto = texto.replace("R$", "").replace(".", "").replace(",", "."); 
    texto = parseFloat(texto).toFixed(2);
    return texto;
}

function checkExiste(item, carrinhoAtual, action) { // Função para verificar se o item já existe no carrinho
    var novoItem = item; // recebe o item que será verificado
    if (action == "del") { // verifica se a ação que chamou foi de uma remoção de produto
        if (itensNoCarrinho.indexOf(item) >= 0) { // se o nome do item existe no array do carrinho, remove ele
            itensNoCarrinho.pop(item);
        }
    } else { // se a ação não for de remoção 
        carrinhoAtual.forEach(function (i) { // busca todos os itens no carrinho
            if (itensNoCarrinho.indexOf(i.nome) < 0) { // se o nome do produto não está no carrinho
                itensNoCarrinho.push(i.nome); // adiciona ele ao vetor de itens no carrinho
            }
        });
        if (itensNoCarrinho.indexOf(novoItem) < 0) { // verifica se o nome do produto está no array do carrinho e se não existe retorna false se existe retorna true
            return false;
        } else {
            return true;
        }
    }

}

function buscaItensPedido() { //Localiza todos os pedidos dentro do carrinho
    var itensCarrinho = $(carrinho).find("tr"); //busca cada linha presente na tabela carrinho

    var itens = []; // armazena os itens

    itensCarrinho.each(function (item) { //varre cada item do carrinho pegando "Nome", "Quantidade" e "Preço" 
        var nomeProduto = $(this).find(".nome-pedido").text();
        var qtdItem = $(this).find(".qtd-pedido").text();
        var precoItem = removeSifrao($(this).find(".qtd-preco-pedido").text());
        precoItem = precoItem.replace(",", "."); // troca , para . para executar calculos com números decimais
        var propriedadesItem = { //objeto que contém as propriedades do item 
            nome: nomeProduto,
            preco: precoItem,
            qtd: qtdItem
        };
        itens.push(propriedadesItem); // insere o objeto com suas propriedades dentro do array
    });

    return itens;
}

function totalPedido(pedido) {//exibe o valor total dos itens no carrinho
    var totalPedido = $("#valor-total"); // Seleciona o texto do valor total 
    var valores = []; // Vetor que armazena os valores de cada item no carrinho
    var total = 0; //Variável que armazena o valor total
    for (var i = 0; i < pedido.length; i++) { // percorre os itens recebido pelo parâmetro (Função buscaItensPedidos())
        var multiplica = parseFloat(pedido[i].preco) * parseInt(pedido[i].qtd);// multiplica o preco do item pela sua quantidade
        valores.push(multiplica);// insere o valor multiplicado no array de valores de cada item
    }
    for (var j = 0; j < valores.length; j++) { // percorre o array de valores
        total = total + valores[j]; // soma todos os valores e insere o total deles
    }
    total = total.toFixed(2);// exibe 2 casas decimais depois da vírgula
    totalPedido.text("R$" + total.toString().replace(".", ",")); // coloca o R$ e troca o . por , (Apenas para exibição)
}

function removeProduto(el) {// deleta produto do carrinho
    var item = $(el).closest("tr"); // encontra a linha que o botão remover foi clicado
    var itemNome = item.find(".nome-pedido").text(); // encontra o nome do produto naquela linha
    var itemPreco = item.find(".qtd-preco-pedido").text(); // encontra o preço do item
    var itemQtd = item.find(".qtd-pedido").text(); // encontra a quantidade do item
    checkExiste(itemNome, null, "del"); // verifica se o item existe no array de itens existente se remove,para que possa ser adicionado o mesmo produto pelo usuário futuramente
    alteraQtdItensCarrinho("del"); // Alera o contador de itens presentes no carrinho
    subtraiValorTotal(itemPreco, itemQtd); // diminui o valor total de pedidos
    item.remove();// finalmente remove o item
}

function subtraiValorTotal(itemPreco, itemQtd) {//diminui o valor total quando um item é removido
    var precoItem = (removeSifrao(itemPreco) * itemQtd).toFixed(2); // recebe o preco do item
    var total = removeSifrao($("#valor-total").text()); //pega o texto atual do valor total e remove o sifrão
    var novoTotal = total - precoItem; // subtrai o preco do item do total
    $("#valor-total").text("R$" + novoTotal.toFixed(2).replace(".", ","));// altera o texto atual do total para o novo total subtraido
}

function alteraQtdItensCarrinho(action) {// altera o contador (Badge) presente no icone de carrinho na barra de navegação
    if (action == "add") { // se a ação é de adição de um novo item incrementa o item
        if (countItemAdicionado >= 0)
            countItemAdicionado++;
        countCarrinho.text(countItemAdicionado.toString());
    }
    if (action == "del") {  // se a ação é de remoção de um novo item decrementa o item
        if (countItemAdicionado > 0) {
            countItemAdicionado -= 1;
        }
        countCarrinho.text(countItemAdicionado.toString());
    }

    if (countCarrinho.text() == "0") { // verifica se o contador de quantidade de itens no carrinho é igual a zero, e se for, oculta a tabela e exibe a msg de carrinho vazio no lugar
        $("#tabela-pedido").hide();
        $("#lista-carrinho").show();
    }
    else { // se não for igual a 0, exibe a tabela e oculta a msg
        $("#lista-carrinho").hide();
        $("#tabela-pedido").show();
    }
}