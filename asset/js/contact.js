/*header commun -> Menu burger => JS*/

let burgerMenu1 = document.querySelector ("nav")
/*console.log (burgerMenu1)*/
let burgerMenu2 = document.querySelector (".logo-mon-compte");
/*console.log (burgerMenu2)*/

let burgerMenu = [burgerMenu1, burgerMenu2];
/*console.log (burgerMenu)*/

for (let i=0; i < burgerMenu.length; i++) {
console.log (burgerMenu[i])
}




//--------------formulaire----------------- 

 //-> for required fields
 let lastname = document.querySelector ("#name")
 let firstName = document.querySelector ("#first-name")
 let mail = document.querySelector ("#email")
 let subject = document.querySelector ("#subject-select")
 let message = document.querySelector ("#message")
 
 function checkRequiredFields (balises) {
     if (balises.value === "") {
         balises.classList.add("error")
         console.log ("Veuillez remplir les champs obligatoires")
     }
     else {
         balises.classList.remove("error")
     }
}  

    //-> page reload management continue submit
let form = document.querySelector (".form")
form.addEventListener ("submit", (event) => {
    event.preventDefault();

    // for addition test required fields
    checkRequiredFields (lastname)    
    checkRequiredFields (firstName)
    checkRequiredFields (mail)
    checkRequiredFields (subject)
    checkRequiredFields (message)  

console.log ("rechargement page non effectué")
})

/*    // check value desired format
function checksFields (balises) {

}   */  
    // check mail desired format
function checkMail (balise) {
    let mail = new RegExp ("[a-z0-9._-]+@[a-z0-9._-]+\\.[a-z._-]+")
     
    if (mail.test(balise.value)) {
        balise.classList.remove("error")
    }
    else {
        balise.classList.add("error")
        console.log ("Veuillez saisir une adresse mail valide")
    }
}
mail.addEventListener("change",() => {
    checkMail(mail) 
})