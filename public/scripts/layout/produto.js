function increment() {
    console.log(1)
    let quantidadeElement = document.getElementById('quantidade');
    let quantidade = parseInt(quantidadeElement.innerText);
    quantidadeElement.innerText = quantidade + 1;
}

function decrement() {
    let quantidadeElement = document.getElementById('quantidade');
    let quantidade = parseInt(quantidadeElement.innerText);
    if (quantidade > 1) {
        quantidadeElement.innerText = quantidade - 1;
    }
}