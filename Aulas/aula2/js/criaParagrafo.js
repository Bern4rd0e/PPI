
document.querySelector("#para").onclick = function() { 
    let p = document.createElement("p");
    let quantidade = document.getElementsByTagName("p").length;
    p.innerHTML = "Isso é um paragrafo!" + (quantidade+1);
    document.body.appendChild(p);
};
