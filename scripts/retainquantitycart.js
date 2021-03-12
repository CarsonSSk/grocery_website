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
for (var i = 1; i <= numOfObjects; i++){

    document.getElementById("item"+i+aisle).value = getSavedValue("item"+i+aisle); //Find value entered by user when a refresh happens
    
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
}