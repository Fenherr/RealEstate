const links = document.querySelectorAll("nav li");
const check = document.getElementById("check");
const nav = document.getElementById("nav");

check.addEventListener("click", () => {
    nav.classList.toggle("active");
});

links.forEach((links) => {
    links.addEventListener("click", () => {
         nav.classList.remove("active");
});
});