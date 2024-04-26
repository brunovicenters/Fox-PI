const valor = document.getElementById("valor");
const limiteDinheiro = document.getElementById("limiteDinheiro");

limiteDinheiro.oninput = function () {
    valor.innerHTML = "R$ " + this.value;
};
