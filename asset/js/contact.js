/*header commun -> Menu burger => JS*/

let burgerMenu1 = document.querySelector ("nav")
let burgerMenu2 = document.querySelector (".logo-mon-compte");

let burgerMenu = ['burgerMenu1', 'burgerMenu2'];

for (let i=0; i < burgerMenu.length; i++) {
console.log (burgerMenu[i])
}

/*ajout liste menu dans burgerMenu */
let listBurgerMenu = createElement ('burgerMenu')

/* pr fermeture burgerMenu si clic en dehors*/ 
let main = document.querySelector("main")   

listBurgerMenu.addEventListener ("onClick", déploiementMenu);
main.addEventListener ("onClick", fermetureMenu);
header.addEventListener ("onClick", fermetureMenu);










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

   


  