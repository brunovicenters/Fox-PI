const valor = document.getElementById("valor");
const limiteDinheiro = document.getElementById("limite");

limiteDinheiro.oninput = function () {
    valor.innerHTML = "R$ " + this.value;
};
