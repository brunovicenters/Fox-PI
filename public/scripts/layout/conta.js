let cpf_input = document.querySelector("#USUARIO_CPF");

function inputCPF(e) {
    let valor = e.value;

    let new_cpf = "";

    for (let i = 0; i <= 10; i++) {
        if (i == 3 || i == 6) {
            new_cpf += ".";
        } else if (i == 9) {
            new_cpf += "-";
        }
        new_cpf += valor[i];
    }

    e.value = new_cpf;
}

if (cpf_input.value) {
    inputCPF(cpf_input);
}

function edit() {
    const values = document.querySelectorAll(".values");
    const fields = document.querySelectorAll(".fields");
    const new_password = document.querySelector(".new-password");

    new_password.classList.toggle("hidden");
    new_password.classList.toggle("flex");
    new_password.classList.toggle("flex-col");
    values.forEach((value) => {
        value.classList.toggle("hidden");
    });
    fields.forEach((field) => {
        field.classList.toggle("hidden");
    });
}
