function increment() {
    var quantidadeElement = document.getElementById('quantidade');
    var quantidade = parseInt(quantidadeElement.innerText);
    quantidadeElement.innerText = quantidade + 1;
}

function decrement() {
    var quantidadeElement = document.getElementById('quantidade');
    var quantidade = parseInt(quantidadeElement.innerText);
    if (quantidade > 1) {
        quantidadeElement.innerText = quantidade - 1;
    }
}