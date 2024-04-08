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
