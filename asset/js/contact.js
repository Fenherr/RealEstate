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




/*formulaire -> JS*/
/* -> gestion rechargement page suite submit*/
/* -> pr chps obligatoires*/
let form = document.querySelector (".form")
form.addEventListener ("submit", (event) => {
    event.preventDefault();
console.log ("rechargement page non effectué")

let actionForm1 = document.querySelector ("#name")
console.log (actionForm1.value)
let actionForm2 = document.querySelector ("#first-name")
console.log (actionForm2.value)
let actionForm3 = document.querySelector ("#email")
console.log (actionForm3.value)
let actionForm4 = document.querySelector ("#subject-select")
console.log (actionForm4.value)
let actionForm5 = document.querySelector ("#message")
console.log (actionForm5.value)   
})

