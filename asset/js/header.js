const menuOpener = document.getElementById("menu-opener"),
    menuCloser = document.getElementById("menu-closer"),
    navBar = document.querySelector(".menu"),
    accountAccess = document.querySelector(".logo-mon-compte"),
    body = document.querySelector("body"),
    btnMenu = document.getElementById("check");
let menuIsOpen = false;

function displayManagerMenu () {
    navBar.classList.toggle("active");
    accountAccess.classList.toggle("active");
    body.classList.toggle("stop-overflow");
    menuOpener.toggleAttribute("hidden");
    menuCloser.toggleAttribute("hidden");

    if (menuIsOpen) {
        menuIsOpen = false;
    } else {
        menuIsOpen = true;
    }
}

btnMenu.addEventListener("click", displayManagerMenu);

/* Detect if the browser resizes and display or not the icon that allows to open the menu. */
window.addEventListener("resize", () => {
    if (window.matchMedia("all and (max-width: 768px)").matches) {
        menuOpener.setAttribute("hidden", "");
        if (!menuIsOpen) {
            menuOpener.removeAttribute("hidden");
        } else {
            body.classList.add("stop-overflow");
        }
    } else {
        body.classList.remove("stop-overflow");
    }
})
