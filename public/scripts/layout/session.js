let signinBtn = document.querySelector(".signinBtn");
let signupBtn = document.querySelector(".signupBtn");
let banner = document.querySelector(".banner-sign");

signupBtn.onclick = function () {
    banner.classList.toggle("slide");
    banner.classList.toggle("rounded-r-3xl");
    banner.classList.toggle("rounded-l-3xl");
};

signinBtn.onclick = function () {
    banner.classList.remove("slide");
    banner.classList.toggle("rounded-r-3xl");
    banner.classList.toggle("rounded-l-3xl");
};

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
