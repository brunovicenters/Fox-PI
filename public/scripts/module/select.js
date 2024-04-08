const selBar = document.querySelector("#select-bar");
const selOptions = document.querySelector("#select-options");
const selOpen = document.querySelector(".select-open");

const select = document.querySelector("#endereco-salvo");
const options = select.options;

selOpen.addEventListener("click", () => {
    selOptions.classList.toggle("hidden");
});

// This function is on navbar.js, so it can work ->

// window.onload = function () {
//     let selOptions = document.getElementById("select-options");
//     document.onclick = function (e) {
//         if (
//             e.target.id !== "select-bar" &&
//             e.target.id !== "select-arrow"
//         ) {
//             selOptions.classList.add("hidden");
//         }
//     };
// };

selectOption = (e) => {
    for (let i = 0; i < options.length; i++) {
        if (options[i].value == e.target.id) {
            options[i].selected = true;
        } else {
            options[i].selected = false;
        }
    }

    selBar.innerHTML = e.target.innerHTML;
    selOptions.classList.add("hidden");
};
