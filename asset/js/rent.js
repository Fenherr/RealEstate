// Ouverture et fermeture menu burger
/*let burgermenu=document.getElementById("burger");
let listmenu=document.querySelector("#zemenu");
let main=document.querySelector("main");
let header=document.querySelector("header");

burgermenu.addEventListener("click", ouverture);
main.addEventListener("click", fermeture);

function fermeture() {
    let flexi=document.getElementById("divmenu");
    if (flexi!=null) {
    flexi.setAttribute("style", "position:absolute;z-index:2;right:-100%;top:0;width:100%;text-align:center");
    }
}

function ouverture() {
    let flexi=document.getElementById("divmenu");
    if (flexi==null) {
    let linkmenu=document.createElement("a");
    let compteplus=document.createElement("li");
    let flexi=document.createElement("div");
    linkmenu.setAttribute("class", "title-txt");
    linkmenu.setAttribute("href", "authentification.html")
    linkmenu.textContent="Compte";
    listmenu.setAttribute("style", "display:block; background-color:#b1f3bc; border:black solid 1px; padding-left:1rem");
    flexi.setAttribute("id", "divmenu");
    flexi.setAttribute("style", "position:absolute;z-index:2;right:0;top:0;width:100%;text-align:center");
    compteplus.appendChild(linkmenu);
    listmenu.appendChild(compteplus);
    flexi.appendChild(listmenu);
    header.appendChild(flexi);
    listmenu=listmenu.textContent;
    return console.log(listmenu);
    }
    flexi.setAttribute("style", "position:absolute;z-index:2;right:0;top:0;width:100%;text-align:center");
} */


/*-_-_-_-_ Formulaire recherche -_-_-_-_-_-_-_-_-_-_-_-_*/

let form=document.getElementById("formu");
form.addEventListener("submit", (event) => {
    event.preventDefault();
    let secteur=document.getElementById("local").value;
    let prize=document.getElementById("prize").value;
    let distance=document.getElementById("localization").value;
    let alertsecteur=document.getElementById("local");
    alertsecteur=alertsecteur.classList.remove("alert");
    let alertprize=document.getElementById("prize");
    alertprize=alertprize.classList.remove("alert");
    let alertdistance=document.getElementById("localization");
    alertdistance=alertdistance.classList.remove("alert");
    let resultForm;

    try {
        test3(secteur);
    }
    catch (bug3) {
        alert(bug3);
        alertsecteur=document.getElementById("local");
        alertsecteur=alertsecteur.classList.add("alert");
    }
    
    try {
        test(prize);
    }
    catch (bug) {
        alert(bug);
        alertprize=document.getElementById("prize");
        alertprize=alertprize.classList.add("alert");
    }

    try {
        test2(distance);
    }
    catch (bug2) {
        alert(bug2);
        alertdistance=document.getElementById("localization");
        alertdistance=alertdistance.classList.add("alert");
    }

    console.log(prize)
    if (isNaN(prize)) {
        prize="";
    }
    if (secteur!="" && prize!="" && distance!="") {
        alert("Direction vers le serveur !!!");
        resultForm=[secteur,prize,distance];
        document.cookie="resultatRecher = " + resultForm + ";SameSite=Lax";
    }
});


function test(zenumber) {
    let tmp;
    tmp="";
    if ((isNaN(zenumber)) || (zenumber=="")) {
        tmp="NaN";
    }
    //console.log(tmp);
    if (tmp==="NaN") {
        throw new Error("veuillez saisir un prix en euros sans les centimes !");
    }
    return tmp;
}

function test2(peri) {
    let tmp;
    tmp="";
    //console.log(tmp);
    if (tmp==peri) {
        throw new Error("veuillez choisir une distance !");
    }
}

function test3(zeneant) {
    if (zeneant=="") {
        throw new Error("veuillez indiquer une localité !");
    }
}