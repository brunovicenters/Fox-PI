const valor = document.getElementById("valor");
const limiteDinheiro = document.getElementById("limite");

limiteDinheiro.oninput = function () {
    valor.innerHTML =
        "R$ " +
        Number(this.value).toLocaleString("pt-br", {
            minimumFractionDigits: 2,
        });
};
