const toggleMenu = () => {
    const menu = document.querySelector(".menu");
    menu.classList.toggle("hidden");
};

window.onload = function () {
    let menu = document.getElementById("menu");
    document.onclick = function (e) {
        if (e.target.id !== "menu-btn" && e.target.id !== "menu") {
            menu.classList.add("hidden");
        }
    };
};
