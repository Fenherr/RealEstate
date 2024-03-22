let togg1 = document.getElementById("togg1");
let togg2 = document.getElementById("togg2");
let estim2 = document.getElementById("estim2");
togg1.addEventListener("click", () => {
  if(getComputedStyle(estim2).display != "none"){
    estim2.style.display = "none";
  } else {
    estim2.style.display = "block";
  }
})

function togg(){
    if(getComputedStyle(estim2).display != "block"){
      estim2.style.display = "block";
    } else {
      estim2.style.display = "none";
    }
  };
  togg2.onclick = togg;
  
  
  