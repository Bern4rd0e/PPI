let btnSalvar = $("#btn");

function salvarTexto() {
    let novo = $("<p>");
    let salvo = $("#salvo");
    novo.html(campo.val());
    campo.val(""); // Apaga o conteúdo do textarea
    qtdChar.html("0");

    salvo.append(novo); // Adiciona a tag nova DEPOIS do btnSalvar
}

btnSalvar.click(salvarTexto);