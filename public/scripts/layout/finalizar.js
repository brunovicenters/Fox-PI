const totalFinal = document.querySelector("#total-final");

const itensDA = document.querySelector("#itens-down-arrow");
const itensUA = document.querySelector("#itens-up-arrow");
const itensRes = document.querySelector("#itens-resumo");
const itensDesc = document.querySelector("#itens-desc");
const itensFinal = document.querySelector("#itens-final");

itensDA.addEventListener("click", () => {
    itensDA.classList.toggle("hidden");
    itensUA.classList.toggle("hidden");
    itensRes.classList.toggle("hidden");
    itensDesc.classList.toggle("hidden");
});

itensUA.addEventListener("click", () => {
    itensDA.classList.toggle("hidden");
    itensUA.classList.toggle("hidden");
    itensRes.classList.toggle("hidden");
    itensDesc.classList.toggle("hidden");
});

const freteDA = document.querySelector("#frete-down-arrow");
const freteUA = document.querySelector("#frete-up-arrow");
const freteRes = document.querySelector("#frete-resumo");
const freteDesc = document.querySelector("#frete-desc");
const precoFrete = document.querySelector("#preco-frete");
const freteFinal = document.querySelector("#frete-final");

const toggleFrete = () => {
    freteDA.classList.toggle("hidden");
    freteUA.classList.toggle("hidden");
    freteRes.classList.toggle("hidden");
    freteDesc.classList.toggle("hidden");
};

freteDA.addEventListener("click", toggleFrete);

freteUA.addEventListener("click", toggleFrete);

const setFrete = (frete, preco) => {
    if (frete === "azul") {
        frete = "Azul Entregas";
    } else if (frete === "cometa") {
        frete = "Cometa Entregas";
    } else if (frete === "express") {
        frete = "Viagens Express";
    } else if (frete === "touro") {
        frete = "Touro Ltda";
    }

    preco = Number(preco.toFixed(2));

    freteRes.innerText = capitalizeFirstLetter(frete);
    precoFrete.innerText = preco;
    freteFinal.innerText = preco;

    let itens_final = Number(itensFinal.innerText.replace(/,/g, "."));

    totalFinal.innerText = (
        Number(precoFrete.innerText) + Number(itens_final)
    ).toFixed(2);
};

const capitalizeFirstLetter = (string) => {
    return string.charAt(0).toUpperCase() + string.slice(1);
};

const pagamentoDA = document.querySelector("#pagamento-down-arrow");
const pagamentoUA = document.querySelector("#pagamento-up-arrow");
const pagamentoRes = document.querySelector("#pagamento-resumo");
const pagamentoDesc = document.querySelector("#pagamento-desc");

const togglePagamento = () => {
    pagamentoDA.classList.toggle("hidden");
    pagamentoUA.classList.toggle("hidden");
    pagamentoRes.classList.toggle("hidden");
    pagamentoDesc.classList.toggle("hidden");
};

pagamentoDA.addEventListener("click", togglePagamento);

pagamentoUA.addEventListener("click", togglePagamento);

const setPagamento = (pagamento) => {
    if (pagamento === "pix") {
        pagamento = "Pix - Pague na próxima tela";
    } else if (pagamento === "boleto") {
        pagamento = "Boleto - Pague na próxima tela";
    } else if (pagamento === "credito") {
        pagamento = "Cartão de Crédito - 6x sem juros ou 12x com juros";
    }

    pagamentoRes.innerText = capitalizeFirstLetter(pagamento);
};

const btnFinalizar = document.querySelector("#btn-finalizar");
const btnInternoForm = document.querySelector("#btn-interno-form");
const formFinalizar = document.querySelector("#form-finalizar");

btnFinalizar.addEventListener("click", () => {
    if (!pagamentoDA.classList.contains("hidden")) {
        togglePagamento();
    }
    if (!freteDA.classList.contains("hidden")) {
        toggleFrete();
    }
    btnInternoForm.click();
});
