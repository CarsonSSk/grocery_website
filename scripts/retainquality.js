//Saves value user enters for quality on each product page, so it remains displayed after refresh

//Find aisle
var aisle = window.location.href;
if (aisle.includes("produceitems")) {
    aisle = "produce";
}
if (aisle.includes("meatitems")) {
    aisle = "meat";
}
if (aisle.includes("grainitems")) {
    aisle = "grain";
}
if (aisle.includes("dairyitems")) {
    aisle = "dairy";
}
if (aisle.includes("candyitems")) {
    aisle = "candy";
}

//Find item id
var number;
var itemQual;
var i;
for (i = 1; i < 10; i++) {
    if (document.getElementById("quality-selector" + i + aisle)) {
        itemQual = document.getElementById("quality-selector" + i + aisle);
        itemQual = itemQual.id;
        break;
    }
}

//Whenever user changes quality, store the value locally
document.getElementById(itemQual).onchange = function() {
    localStorage.setItem('selectedItem' + itemQual, document.getElementById(itemQual).value);
};  


//If a value is stored locally, display it on refresh
if (localStorage.getItem('selectedItem' + itemQual)) {
    document.getElementById(localStorage.getItem('selectedItem' + itemQual)).selected = true;
}
