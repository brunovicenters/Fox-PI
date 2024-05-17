const btnsIncrement = document.querySelectorAll("button.btn-increment");
const btnsDecrement = document.querySelectorAll("button.btn-decrement");

function increment(e) {
    e.stopPropagation();
    e.preventDefault();
    const form = e.currentTarget.parentNode;
    const inputQtd = form.querySelector("input#qtd");
    let quantidadeElement = form.querySelector("span#text-qtd");
    let quantidade = parseInt(quantidadeElement.innerText);
    quantidadeElement.innerText = quantidade + 1;
    inputQtd.value++;
    form.submit();
}

function decrement(e) {
    e.preventDefault();
    const form = e.currentTarget.parentNode;
    const inputQtd = form.querySelector("input#qtd");
    let quantidadeElement = form.querySelector("span#text-qtd");
    let quantidade = parseInt(quantidadeElement.innerText);
    // if (quantidade > 1) {
    quantidadeElement.innerText = quantidade - 1;
    inputQtd.value--;
    form.submit();
    // }
}

btnsIncrement.forEach((btn) => {
    btn.addEventListener("click", (e) => increment(e));
});

btnsDecrement.forEach((btn) => {
    btn.addEventListener("click", (e) => decrement(e));
});
