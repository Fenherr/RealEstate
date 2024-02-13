// Début

function ouvre() {
    let listburger=document.getElementById("zemenu");
    let menuburger=document.getElementById("burger");
    let menu=document.createElement("menu");
    let sousmenu=document.createElement("li");
    sousmenu.textContent="Achat";
    menu.appendChild(sousmenu);
    menuburger.appendChild(menu)
    listburger.setAttribute("display", "")
    return console.log(listburger);
}