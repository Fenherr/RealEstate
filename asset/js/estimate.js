let sidenav = document.getElementById("mySidenav")
let openBtn = document.getElementById("openBtn")
let closeBtn = document.getElementById("closeBtn")
let nav = document.getElementById("nav")


openBtn.onclick = openNav
closeBtn.onclick = closeNav

function openNav() {
    sidenav.classList.add("active");
    nav.classList.add("active");
}

function closeNav() {
    sidenav.classList.remove("active");
}  

