const links = document.querySelectorAll("nav li");

menu_burger.addEventListener("click", () => {
    nav.classList.toggle("active");
});

/*links.forEach((link) => {
    link.addEventListener("click", () => {
        nav.classList.remove("active");
    });
});*/


let searchForm = document.getElementById("search_form");

searchForm.addEventListener("submit", (event) => {
    event.preventDefault ();
    let varTakeSearch = document.getElementById("take_search");
    let varTakeLocal = document.getElementById("take_local");
    let varTakeType = document.getElementById("take_type");
    let varTakePrice = document.getElementById("take_price");

    console.log(varTakeSearch + " " + varTakeLocal + " " + varTakeType + " " + varTakePrice);

});