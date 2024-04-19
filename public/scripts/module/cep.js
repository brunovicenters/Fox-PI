function mascaraCEP(i) {
    let v = i.value;

    if (isNaN(v[v.length - 1])) {
        i.value = v.substring(0, v.length - 1);
        return;
    }

    i.setAttribute("maxlength", "9");
    if (v.length == 5) i.value += "-";
}

function limparCampos() {
    document.querySelector("#cep").value = "";
    document.querySelector("#rua").value = "";
    document.querySelector("#numero").value = "";
    document.querySelector("#bairro").value = "";
    document.querySelector("#cidade").value = "";
    document.querySelector("#estado").value = "";
    document.querySelector("#nome_end").value = "";
    document.querySelector("#complemento").value = "";
}

const limpar = document.querySelector("#limpar");

limpar.addEventListener("click", limparCampos);

function meu_callback(conteudo) {
    if (!("erro" in conteudo)) {
        //Atualiza os campos com os valores.
        document.getElementById("rua").value = conteudo.logradouro;
        document.getElementById("bairro").value = conteudo.bairro;
        document.getElementById("cidade").value = conteudo.localidade;
        document.getElementById("estado").value = conteudo.uf;
    } else {
        limparCampos();
        alert("CEP não encontrado.");
    }
}

function pesquisacep(valor) {
    let cep = valor.replace(/\D/g, "");

    if (cep != "") {
        let validacep = /^[0-9]{8}$/;
        if (validacep.test(cep)) {
            document.getElementById("rua").value = "...";
            document.getElementById("bairro").value = "...";
            document.getElementById("cidade").value = "...";
            document.getElementById("estado").value = "...";

            let script = document.createElement("script");

            script.src =
                "https://viacep.com.br/ws/" +
                cep +
                "/json/?callback=meu_callback";

            document.body.appendChild(script);
        } else {
            //cep é inválido.
            limparCampos();
            alert("CEP inválido.");
        }
    }
}