//Saves value user enters for quantity on each product page, so it remains displayed after refresh

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
var itemName;
var i;
for (i = 1; i < 10; i++) {
    if (document.getElementById("item" + i + aisle)) {
        itemName = document.getElementById("item" + i + aisle);
        break;
    }
}
document.getElementById(itemName.id).value = getSavedValue(itemName.id); //Find value entered by user when a refresh happens
                    
//Save the input to local storage with user id and value
function saveValue(passedValue){
    var id = passedValue.id;  //Get user ID
    var val = passedValue.value; //Get user input
    localStorage.setItem(id, val); //Update local storage when value changes
}

//If a value is stored locally, display it on refresh
function getSavedValue(value){
    if (localStorage.getItem(value)) {
        return localStorage.getItem(value);
    }
    
}