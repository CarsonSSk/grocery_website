//Saves value user enters for quantity on the cart page, so it remains displayed after refresh

//Find aisle
var aisle = window.location.href;
if (aisle.includes("Produce")) {
    aisle = "producePage";
}
if (aisle.includes("Meat")) {
    aisle = "meatPage";
}
if (aisle.includes("Grain")) {
    aisle = "grainPage";
}
if (aisle.includes("Dairy")) {
    aisle = "dairyPage";
}
if (aisle.includes("Candy")) {
    aisle = "candyPage";
}
if (aisle.includes("shoppingCart")) {
    aisle = "cart";
}

var numOfObjects = document.getElementsByClassName("advertisement-holder").length;

//Loops through all products. If any receive changes, update local storages of all of them
for (var j = 1; j < numOfObjects; j++){
    document.getElementById("quality-selector"+j+aisle).onchange = function() {
        for (var i = 1; i <= numOfObjects; i++){
            localStorage.setItem('selectedItem'+i+aisle, document.getElementById("quality-selector"+i+aisle).value);
        }
    }
}

//If there is local storage for the quality of each product, display it after refresh
for (var i = 1; i <= numOfObjects; i++){
    if (localStorage.getItem('selectedItem'+i+aisle)) {
        document.getElementById("quality-selector"+i+aisle).value = localStorage.getItem('selectedItem'+i+aisle);
    }
}
