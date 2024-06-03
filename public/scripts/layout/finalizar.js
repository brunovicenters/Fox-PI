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

freteDA.addEventListener("click", () => {
    freteDA.classList.toggle("hidden");
    freteUA.classList.toggle("hidden");
    freteRes.classList.toggle("hidden");
    freteDesc.classList.toggle("hidden");
});

freteUA.addEventListener("click", () => {
    freteDA.classList.toggle("hidden");
    freteUA.classList.toggle("hidden");
    freteRes.classList.toggle("hidden");
    freteDesc.classList.toggle("hidden");
});

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
    precoFrete.innerText = preco.toLocaleString("pt-br", {
        minimumFractionDigits: 2,
    });
    freteFinal.innerText = preco.toLocaleString("pt-br", {
        minimumFractionDigits: 2,
    });

    let itens_final = Number(
        itensFinal.innerText.replace(".", "").replace(",", ".")
    );

    totalFinal.innerText = (Number(preco) + Number(itens_final)).toLocaleString(
        "pt-br",
        { minimumFractionDigits: 2 }
    );
};

const capitalizeFirstLetter = (string) => {
    return string.charAt(0).toUpperCase() + string.slice(1);
};

const pagamentoDA = document.querySelector("#pagamento-down-arrow");
const pagamentoUA = document.querySelector("#pagamento-up-arrow");
const pagamentoRes = document.querySelector("#pagamento-resumo");
const pagamentoDesc = document.querySelector("#pagamento-desc");

pagamentoDA.addEventListener("click", () => {
    pagamentoDA.classList.toggle("hidden");
    pagamentoUA.classList.toggle("hidden");
    pagamentoRes.classList.toggle("hidden");
    pagamentoDesc.classList.toggle("hidden");
});

pagamentoUA.addEventListener("click", () => {
    pagamentoDA.classList.toggle("hidden");
    pagamentoUA.classList.toggle("hidden");
    pagamentoRes.classList.toggle("hidden");
    pagamentoDesc.classList.toggle("hidden");
});

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
