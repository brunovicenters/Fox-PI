const btnLupa = document.querySelector("button.lupa");
const formPesquisa = document.querySelector("form.pesquisa");
const inputPesquisa = document.querySelector("input#search");
inputPesquisa.addEventListener("keyup", (e) => {
    const inputPesquisaHidden = document.querySelector("input#search-hidden");
    inputPesquisaHidden.value = inputPesquisa.value;
});

btnLupa.addEventListener("click", (e) => {
    e.preventDefault();
    formPesquisa.submit();
});
