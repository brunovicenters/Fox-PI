const inputQtd = document.querySelector("input#qtd");
const btnCompra = document.querySelector("button#btnComprar");

function increment(qtdMaxima) {
    let quantidadeElement = document.getElementById("quantidade");
    let quantidade = parseInt(quantidadeElement.innerText);
    console.log(quantidade, qtdMaxima);
    if (quantidade < qtdMaxima) {
        quantidadeElement.innerText = quantidade + 1;
        inputQtd.value++;
    } else {
        alert("Quantidade máxima alcançada");
    }
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

document.getElementById("cepButton").addEventListener("click", function () {
    const cepInput = document.getElementById("cep").value;
    const cepMessage = document.getElementById("cepMessage");

    if (cepInput.length === 9) {
        const precoMin = parseFloat(cepMessage.getAttribute("data-preco-min"));
        const precoMax = parseFloat(
            cepMessage.getAttribute("data-preco-max").replace(",", ".")
        );

        cepMessage.textContent = `Frete de R$ ${precoMin
            .toFixed(2)
            .replace(".", ",")} até R$ ${precoMax
            .toFixed(2)
            .replace(".", ",")}`;
        cepMessage.classList.remove("text-vermelho");
        cepMessage.classList.add("text-verde");
    } else {
        cepMessage.textContent = "CEP inválido";
        cepMessage.classList.remove("text-verde");
        cepMessage.classList.add("text-vermelho");
    }
});
