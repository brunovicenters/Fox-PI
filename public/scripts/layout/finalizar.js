const itensDA = document.querySelector("#itens-down-arrow");
const itensUA = document.querySelector("#itens-up-arrow");
const itensRes = document.querySelector("#itens-resumo");
const itensDesc = document.querySelector("#itens-desc");

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
    freteRes.innerText = capitalizeFirstLetter(frete);
    precoFrete.innerText = preco.toFixed(2);
};

const capitalizeFirstLetter = (string) => {
    return string.charAt(0).toUpperCase() + string.slice(1);
};
