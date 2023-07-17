let pNome = document.getElementById("nome");

pNome.innerHTML = "INFO 4M";

let n = document.querySelector("#num");
n.innerHTML = Math.floor(Math.random()*10 + 1);

let inputNumero = document.getElementById("numero");

let result = document.querySelector("#resultado");


inputNumero.addEventListener ("input", function() {
    let n = document.querySelector("#num");
    n.innerHTML = Math.floor(Math.random()*10 + 1);

    if(inputNumero.value < n.innerHTML) {

    result.innerHTML = "número sorteado é maior";
    } else if (inputNumero.value > n.innerHTML) {
        result.innerHTML = "número sorteado é menor";
    } else {
        result.innerHTML = "número sorteado é igual";       
    }  

}

);







