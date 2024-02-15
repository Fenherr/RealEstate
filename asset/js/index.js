const links = document.querySelectorAll("nav li");

menu_burger.addEventListener("click", () => {
    nav.classList.toggle("active");
});

/*links.forEach((link) => {
    link.addEventListener("click", () => {
        nav.classList.remove("active");
    });
});*/