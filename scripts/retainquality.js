//Saves value user enters for quality on each product page, so it remains displayed after refresh

var itemQual = document.querySelector("select").id;

//Whenever user changes quality, store the value locally
document.getElementById(itemQual).onchange = function() {
    localStorage.setItem('selectedItem' + itemQual, document.getElementById(itemQual).value);
};  


//If a value is stored locally, display it on refresh
if (localStorage.getItem('selectedItem' + itemQual)) {
    document.getElementById(localStorage.getItem('selectedItem' + itemQual)).selected = true;
}
