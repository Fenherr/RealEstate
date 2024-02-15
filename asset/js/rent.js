// Début
let burgermenu=document.getElementById("burger");
let listmenu=document.querySelector("#zemenu");


burgermenu.addEventListener("click", ouverture);
    
function ouverture() {
    let linkmenu=document.createElement("a");
    let compteplus=document.createElement("li");
    let flexi=document.createElement("div");
    let header=document.querySelector("header");
    linkmenu.setAttribute("class", "title-txt");
    linkmenu.setAttribute("href", "to_manage.html")
    linkmenu.textContent="Compte";
    listmenu.setAttribute("style", "display:block; background-color:#b1f3bc; border:black solid 1px; padding-left:1rem");
    flexi.setAttribute("style", "position:absolute;z-index:2;right:0;top:0");
    compteplus.appendChild(linkmenu);
    listmenu.appendChild(compteplus);
    flexi.appendChild(listmenu);
    header.appendChild(flexi);
    listmenu=listmenu.textContent;
    
    return console.log(listmenu);
}