const toggleMenu = () => {
    const menu = document.querySelector(".menu");
    menu.classList.toggle("hidden");
};

window.onload = function () {
    let menu = document.getElementById("menu");
    let selOptions = document.getElementById("select-options");

    document.onclick = function (e) {
        if (e.target.id !== "menu-btn" && e.target.id !== "menu") {
            menu.classList.add("hidden");
        }

        if (
            window.location.href.includes("endereco") ||
            window.location.href.includes("fale-conosco") ||
            window.location.href.includes("pesquisa")
        ) {
            if (
                e.target.id !== "select-bar" &&
                e.target.id !== "select-arrow"
            ) {
                selOptions.classList.add("hidden");
            }
        }
    };
};
