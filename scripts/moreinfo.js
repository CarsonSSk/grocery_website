//Display more info when user presses a button
document.querySelector(".more-info").addEventListener("click", showInfo);

function showInfo() {
    document.querySelector("div.border").classList.toggle("hidden");
}