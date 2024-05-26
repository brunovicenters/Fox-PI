let signinBtn = document.querySelector(".signinBtn");
let signupBtn = document.querySelector(".signupBtn");
let banner = document.querySelector(".banner-sign");

if (signupBtn) {
    signupBtn.onclick = function () {
        banner.classList.toggle("slide");
        banner.classList.toggle("rounded-r-3xl");
        banner.classList.toggle("rounded-l-3xl");
    };
}

if (signinBtn) {
    signinBtn.onclick = function () {
        banner.classList.remove("slide");
        banner.classList.toggle("rounded-r-3xl");
        banner.classList.toggle("rounded-l-3xl");
    };
}
const showPassword = (eye, input) => {
    const img_eye = document.getElementById(eye);
    const input_password = document.getElementById(input);

    if (input_password.type === "password") {
        input_password.type = "text";
        img_eye.src = "\\images\\eye-closed.svg";
    } else {
        input_password.type = "password";
        img_eye.src = "\\images\\eye-open.svg";
    }
};
