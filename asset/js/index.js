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
    let varTakeSearch = document.getElementById("take_search").value;
    let varTakeLocal = document.getElementById("take_local").value;
    let varTakeType = document.getElementById("take_type").value;
    let varTakePrice = document.getElementById("take_price").value;

    console.log(varTakeSearch + " " + varTakeLocal + " " + varTakeType + " " + varTakePrice);

    try {
        verify(varTakeSearch);
        verify(varTakeLocal);
        verify(varTakeType);
        verify(varTakePrice);
    } catch (error) {
        console.log(error);
        alert(error);
    }
})

function verify (selection) {
    if (selection === "") {
        //throw new Error ("Tous les champs sont requis");
        let redRequireSelect = document.querySelectorAll(".size_form select");
        redRequireSelect.classList.add("redRequire");
    } else {
        console.log(selection);
    }
};

