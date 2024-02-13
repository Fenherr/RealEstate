const menuOpener = document.getElementById("menu-opener"),
    menuCloser = document.getElementById("menu-closer"),
    navBar = document.querySelector(".menu"),
    accountAccess = document.querySelector(".logo-mon-compte"),
    body = document.querySelector("body"),
    btnMenu = document.getElementById("check");
let menuIsOpen = false;

function checkMenuIsOpen () {
    console.log("avant boucle");
    if (menuIsOpen) {
        console.log("dans boucle if");
        closeMenu();
    } else {
        console.log("dans boucle else");
        openMenu();
    }
}

function openMenu () {
    navBar.classList.add("active");
    accountAccess.classList.add("active");
    body.classList.add("stop-overflow");
    menuOpener.setAttribute("hidden", "");
    menuCloser.removeAttribute("hidden");
    menuIsOpen = true;
}

function closeMenu () {
    navBar.classList.remove("active");
    accountAccess.classList.remove("active");
    body.classList.remove("stop-overflow");
    menuOpener.removeAttribute("hidden");
    menuCloser.setAttribute("hidden", "");
    menuIsOpen = false;
}

btnMenu.addEventListener("click", checkMenuIsOpen);

window.addEventListener("resize", function() {
    console.log("fonction activée");
    if (window.matchMedia("all and (max-width: 768px)").matches) {
        menuOpener.setAttribute("hidden", "");
        if (!menuIsOpen) {
            menuOpener.removeAttribute("hidden");
        } else {
            body.classList.add("stop-overflow");
        }
    } else {
        body.classList.remove("stop-overflow");
        console.log("boucle else");
    }
})