const inputQtd = document.querySelector("input#qtd");
const btnCompra = document.querySelector("button#btnComprar");

function increment() {
    let quantidadeElement = document.getElementById("quantidade");
    let quantidade = parseInt(quantidadeElement.innerText);
    quantidadeElement.innerText = quantidade + 1;
    inputQtd.value++;
}

function decrement() {
    let quantidadeElement = document.getElementById("quantidade");
    let quantidade = parseInt(quantidadeElement.innerText);
    if (quantidade > 1) {
        quantidadeElement.innerText = quantidade - 1;
        inputQtd.value--;
    }
}

btnCompra.addEventListener("click", (e) => {
    e.preventDefault();
    const form = document.querySelector("form#form");
    const inputTipoAcao = document.querySelector("input#acao");

    // TIPOS DE ACAO
    // SOMENTE ADICIONA AO CARRINHO = 0
    // ADICIONA AO CARRINHO E FINALIZA COMPRA = 1

    inputTipoAcao.value = 1;
    form.submit();
});
