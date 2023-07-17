$("button").click(function() {
    //obter um article e escondê-lo
    let articleId = $(this).attr("name");
    //console.log(this);
    //esconde o article 
    $(articleId).toggle();
});

$("#fade").click(function() {
    //Next pega o próximo elemento HTML
    $(this).next().fadeToggle();
})
//Next pega o próximo elemento HTML
$("#slide").click(function() {
    //Next pega o próximo elemento HTML
    //Parâmetro: Tempo de animação em milisegundos
    $(this).next().slideToggle();
})

$("h5:last").click(function() {
    //$(this).parent().toggleClass("bg-danger");
    $(this).parent().parent().toggleClass("bg-danger");
})