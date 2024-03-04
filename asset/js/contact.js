/*header commun -> Menu burger => JS*/

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


//--------------formulaire----------------- 

//-> for required fields
let lastname = document.querySelector ("#name")
let firstName = document.querySelector ("#first-name")
let mail = document.querySelector ("#email")
let subject = document.querySelector ("#subject-select")
let message = document.querySelector ("#message")
 
 function checkRequiredFields (balises) {
     if (balises.value === "") {
        throw new Error ("Veuillez remplir les champs obligatoires")
     }
}  

 // check mail desired format

 function checkMail (balise) {
    let mailRegEx = new RegExp ("[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]+")
    console.log(mailRegEx.test(balise))   
    let test = mailRegEx.test(balise)
    if (!test) {
        throw new Error ("Veuillez saisir une adresse mail valide")
    }
    /* ou
    let mailRegEx = new RegExp ("[a-z0-9._-]+@[a-z0-9._-]+\.[a-z._-]+")
    if (mailRegEx.test(balise)) {
        balise.classList.remove ("error")
    }
    else {
        throw new Error ("Veuillez saisir une adresse mail valide")
    }*/
}

    //-> page reload management continue submit
let form = document.querySelector (".form")
form.addEventListener ("submit", (event) => {
    event.preventDefault();

    // and addition test required fields
    try{
        checkRequiredFields (lastname)    
        checkRequiredFields (firstName)
        checkRequiredFields (mail)
        checkMail (mail.value)
        checkRequiredFields (subject)
        checkRequiredFields (message)    

        console.log ("rechargement page non effectué")  
    }
    catch (error) {
        alert (error.message) // -> message throw new Error
        console.log ("Veuillez remplir les champs obligatoires")
    }
})

   


  