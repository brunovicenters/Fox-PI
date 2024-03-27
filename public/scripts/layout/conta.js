

function edit() {
    const values = document.querySelectorAll(".values");
    const fields = document.querySelectorAll(".fields");

    console.log("values")
    values.forEach((value) => {
        value.classList.toggle("hidden")
    })
    fields.forEach((field) => {
        field.classList.toggle("hidden")
    })


}


