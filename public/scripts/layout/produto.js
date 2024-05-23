const inputQtd = document.querySelector("input#qtd");
const btnCompra = document.querySelector("button#btnComprar");

function increment(qtdMaxima) {
    let quantidadeElement = document.getElementById("quantidade");
    let quantidade = parseInt(quantidadeElement.innerText);
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

const carouselContainer = document.querySelector("#carousel-container");
const arrowUp = document.querySelector("#up-arrow");
const arrowDown = document.querySelector("#down-arrow");

if ((carouselContainer.scrollHeight = carouselContainer.clientHeight)) {
    arrowDown.classList.add("hidden");
}

carouselContainer.addEventListener("scroll", () => {
    let scrollabeArea =
        carouselContainer.scrollHeight - carouselContainer.clientHeight;
    if (carouselContainer.scrollTop < scrollabeArea * 0.01) {
        arrowUp.classList.add("hidden");
    } else {
        arrowUp.classList.remove("hidden");
    }
    if (carouselContainer.scrollTop > scrollabeArea * 0.98) {
        arrowDown.classList.add("hidden");
    } else {
        arrowDown.classList.remove("hidden");
    }
});

const carouselPrev = () => {
    let scrollabeArea =
        carouselContainer.scrollHeight - carouselContainer.clientHeight;

    carouselContainer.scrollTop -= scrollabeArea * 0.33;
};

const carouselNext = () => {
    let scrollabeArea =
        carouselContainer.scrollHeight - carouselContainer.clientHeight;

    carouselContainer.scrollTop += scrollabeArea * 0.33;
};
