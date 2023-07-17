let iNumero = document.querySelector("#numero");
let n = document.querySelector("#num");
let result = document.querySelector("#resultado");

iNumero.addEventListener("input", function() {
    let c = 0;

    for (;iNumero.value =! n.innerHTML; c++ ) {
        n.innerHTML = Math.floor(Math.random()*10 + 1);

    }
    result.innerHTML = "acertou em " + c + " tentativas";
})