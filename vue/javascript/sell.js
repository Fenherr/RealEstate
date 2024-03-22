// ============================

const tipsBtn = document.querySelector(".step-block:first-child .info-button");
const contactBtn = document.querySelector(".step-block:last-child .info-button");
tipsBtn.addEventListener("click", btnTowardTakeMeeting);
contactBtn.addEventListener("click", btnTowardContact);

function btnTowardContact () {
    return document.location.href = "./contact.html";
}

function btnTowardTakeMeeting () {
    return alert("Ce bouton ne redirige vers aucune page");
}