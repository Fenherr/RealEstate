// Début
let burgermenu=document.getElementById("burger");
let listmenu=document.querySelector("#zemenu");
let compteplus=document.createElement("li");
compteplus.textContent="Mon compte";
listmenu.appendChild(compteplus);
listmenu=listmenu.textContent
burgermenu.addEventListener("click", () => {console.log(listmenu)});
    

    