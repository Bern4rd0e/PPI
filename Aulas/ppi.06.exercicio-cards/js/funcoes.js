//pega as div's por meio da função click 
$("div").click(function() {

    
    let articleId = $(this).next();
     
     $(articleId).css("background", "#008000");

    articleId = $(this).prev();
     
     $(articleId).css("background", "#ff0000");

});