let campo = $("#msg");
let qtdChar = $("#caracteres");

function contarChar() {
    qtdChar.html(campo.val().length);
}

campo.keyup(contarChar);