// addEventListener no Button






// toggle (ativa/desativa) a classe hidden nos fields e no values


// Array.forEach((value)=> {
//     value.classList.toggle("hidden")
// })

function edit(){
 const values = document.querySelectorAll(".values");
 const fields = document.querySelectorAll(".fields");

    values.forEach((value)=> {
        value.classList.toggle("hidden")
    })
    fields.forEach((field)=> {
        field.classList.toggle("hidden")
    })


}


    