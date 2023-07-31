

$(".control").click(function() {

    let novo = $("<p>")
    novo.html($(this).html());

    novo.appendTo("body");
});