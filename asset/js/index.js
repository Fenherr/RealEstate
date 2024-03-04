//menu burger

const links = document.querySelectorAll("nav li");

menu_burger.addEventListener("click", () => {
    nav.classList.toggle("active");
});


/*document.addEventListener('scroll', (event) => {

    let navBar = document.getElementById("nav");
	
    if(document.scrollY > 100) {
    	navBar.classList.toggle("hidden");
        
    } else {
    	navBar.classList.remove("hidden");
    }
});*/


//search banner

/*searchForm.addEventListener("submit", (event) => {
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
});

function verify (selection) {
    if (selection === "") {
        throw new Error ("Tous les champs sont requis");
    } else {
        console.log(selection);
    }
};*/

/*document.getElementById("search_form").addEventListener("submit", function(){
    this.className="submitted";
});*/

let searchForm = document.getElementById("search_form").elements;

for (i = 0; i < searchForm.length; i++) {
    searchForm[i].addEventListener("invalid", function() {
        document.getElementById("search_form").className="submitted";
    });
};