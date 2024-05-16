let toast = document.querySelector(".toasts");
if (toast) {
    setTimeout(() => {
        toast.classList.add("hidden");
    }, 3500);
}

function mascaraCPF(i) {
    let v = i.value;

    if (isNaN(v[v.length - 1])) {
        i.value = v.substring(0, v.length - 1);
        return;
    }

    i.setAttribute("maxlength", "14");
    if (v.length == 3 || v.length == 7) i.value += ".";
    if (v.length == 11) i.value += "-";
}
