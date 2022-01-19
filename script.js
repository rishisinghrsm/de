var bar  = document.getElementById("bar");
var hid  = document.getElementsByClassName("hidden");

bar.addEventListener("click",hide());

function hide(){
    hid.style.display = "flex";
}