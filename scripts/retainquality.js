//Saves value user enters for quality on each product page, so it remains displayed after refresh

//Whenever user changes quality, store the value locally
document.getElementById('quality-selector').onchange = function() {
    localStorage.setItem('selectedItem', document.getElementById('quality-selector').value);
};  


//If a value is stored locally, display it on refresh
if (localStorage.getItem('selectedItem')) {
    document.getElementById(localStorage.getItem('selectedItem')).selected = true;
}
