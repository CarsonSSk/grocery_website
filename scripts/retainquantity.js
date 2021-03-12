//Saves value user enters for quantity on each product page, so it remains displayed after refresh

var itemName = document.querySelector("input").id;

document.getElementById(itemName).value = getSavedValue(itemName); //Find value entered by user when a refresh happens
                    
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