const selOptions = document.querySelector("#select-options");
const selOpen = document.querySelector(".select-open");
const seled = document.querySelector("#selected");

const select = document.querySelector("#select-container");

if (selOpen) {
    selOpen.addEventListener("click", () => {
        selOptions.classList.toggle("hidden");
    });
}
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
    const options = select.options;
    for (let i = 0; i < options.length; i++) {
        if (options[i].value == e.target.id) {
            options[i].selected = true;
        } else {
            options[i].selected = false;
        }
    }

    seled.classList.remove("text-gray-400");
    seled.innerHTML = e.target.innerHTML;
    selOptions.classList.add("hidden");
};
