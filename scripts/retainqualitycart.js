//Saves value user enters for quantity on the cart page, so it remains displayed after refresh

var numOfObjects = document.getElementsByClassName("advertisement-holder").length;

//Loops through all products. If any receive changes, update local storages of all of them
for (var j = 1; j < numOfObjects; j++){
    document.getElementById("quality-selector"+j).onchange = function() {
        for (var i = 1; i <= numOfObjects; i++){
            localStorage.setItem('selectedItem'+i, document.getElementById("quality-selector"+i).value);
        }
    }
}

//If there is local storage for the quality of each product, display it after refresh
for (var i = 1; i <= numOfObjects; i++){
    if (localStorage.getItem('selectedItem'+i)) {
        document.getElementById("quality-selector"+i).value = localStorage.getItem('selectedItem'+i);
    }
}
