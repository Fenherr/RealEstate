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
//lastname.setAttribute ("required","");
let firstName = document.querySelector ("#first-name")
//firstName.setAttribute ("required","");
let mail = document.querySelector ("#email")
//mail.setAttribute ("required","");
let subject = document.querySelector ("#subject-select")
//subject.setAttribute ("required","");
let message = document.querySelector ("#message")
//message.setAttribute ("required","");
 
 function checkRequiredFields (balises) {
     if (balises.value === "") {
        throw new Error ("Veuillez remplir les champs obligatoires")
     }
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
        checkRequiredFields (subject)
        checkRequiredFields (message)    

        console.log ("rechargement page non effectué")  
    }
    catch (error) {
        alert (error.message) // -> message throw new Error
        console.log ("Veuillez remplir les champs obligatoires")
    }

})

    // check mail desired format
let mailRegEx = new RegExp ("[a-z0-9._-]+@[a-z0-9._-]+\\.[a-z._-]+")
function checkMail (balise) {
         
    if (mailRegEx.test(balise.value)) {
        balise.classList.remove("error")
    }
    else {
        throw new Error ("Veuillez saisir une adresse mail valide")
    }

    try {
        checkMail (mailRegEx)
    } catch (error) {
        alert (error.message)
        console.log ("Veuillez saisir une adresse mail valide")

    }
}


  