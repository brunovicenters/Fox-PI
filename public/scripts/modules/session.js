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
