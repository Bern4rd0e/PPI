let campo = document.querySelector("#msg");
let qtdChar = document.querySelector("#caracteres");

function contarLetras() {
    qtdChar.innerHTML = campo.value.length;
}

campo.addEventListener("keyup", contarLetras);