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

 //-> pr chps obligatoires
 let Name = document.querySelector ("#name")
 let firstName = document.querySelector ("#first-name")
 let mail = document.querySelector ("#email")
 let subject = document.querySelector ("#subject-select")
 let message = document.querySelector ("#message")
 
 function checkRequiredFields (balises) {
     if (balises.value === "") {
         balises.classList.add("error")
     }
     else {
         balises.classList.remove("error")
     }
 }

    //-> gestion rechargement page suite submit
let form = document.querySelector (".form")
form.addEventListener ("submit", (event) => {
    event.preventDefault();
    checkRequiredFields (Name)    
    checkRequiredFields (firstName)
    checkRequiredFields (mail)
    checkRequiredFields (subject)
    checkRequiredFields (message)

console.log ("rechargement page non effectué")
    
})
