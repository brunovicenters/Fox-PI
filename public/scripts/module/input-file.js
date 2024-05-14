const qtyImgs = (id) => {
    const qtyImgs = document.getElementById(id);

    const labelQty = document.getElementById("labelQtyImgs");

    labelQty.innerHTML =
        qtyImgs.files.length +
        " arquivo" +
        (qtyImgs.files.length > 1 ? "s" : "") +
        " selecionado" +
        (qtyImgs.files.length > 1 ? "s" : "");

    labelQty.classList.toggle("text-gray-400");

    labelQty.classList.add("text-laranja-claro");
};
