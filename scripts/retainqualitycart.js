//Saves value user enters for quantity on the cart page, so it remains displayed after refresh

//Find aisle
var aisle = window.location.href;
if (aisle.includes("produce_food")) {
    aisle = "produce_food";
}
if (aisle.includes("meat_food")) {
    aisle = "meat_food";
}
if (aisle.includes("grain_food")) {
    aisle = "grain_food";
}
if (aisle.includes("dairy_food")) {
    aisle = "dairy_food";
}
if (aisle.includes("candy_food")) {
    aisle = "candy_food";
}
if (aisle.includes("shoppingCart")) {
    aisle = "cart";
}

var numOfObjects = document.getElementsByClassName("advertisement-holder").length;

//Loops through all products. If any receive changes, update local storages of all of them
for (var j = 1; j <= numOfObjects; j++){
    if(document.getElementById("quality-selector"+j+aisle) != null) {
        document.getElementById("quality-selector"+j+aisle).onchange = function() {
            for (var i = 1; i <= numOfObjects; i++){
                localStorage.setItem('selectedItem'+i+aisle, document.getElementById("quality-selector"+i+aisle).value);
                console.log("COOL");
                console.log(document.getElementById("quality-selector"+i+aisle).value);
            }
        }
    }
}

//If there is local storage for the quality of each product, display it after refresh
for (var i = 1; i <= numOfObjects; i++){
    if (localStorage.getItem('selectedItem'+i+aisle)) {
        document.getElementById("quality-selector"+i+aisle).value = localStorage.getItem('selectedItem'+i+aisle);
        console.log("hey");
    }
}
