//This JS file creates the receipt on the cart page, and will then update it as necessary
var table = document.querySelector(".table-receipt");

var numOfObjects = document.getElementsByClassName("advertisement-holder").length;
var foodName;
var foodQuantity;
var basePrice;
var foodQuality;
var priceModifier;
var displayPrice;
var row;
var subtotal;
var QST;
var GST;
var total;


function makeTable(){
    table.innerHTML = "<thead><th>Item(s)</th><th>Quantity</th><th>Price</th></thead>";
    subtotal = 0;

    for (var i = 1; i <= numOfObjects; i++){
        foodName = document.querySelectorAll(".food-name")[i - 1].innerHTML;
        basePrice = document.querySelectorAll(".food-price")[i - 1].innerText;
        basePrice = basePrice.slice(0, -1); //Remove $ symbol
        
        foodQuantity = document.getElementById("item" + i).value;
        if (!foodQuantity) //Set quantity to 0 if it is not defined
            foodQuantity = 0;
        
        foodQuality = document.getElementById("quality-selector" + i).value;
        switch(foodQuality) { //Find price modifier based on food quality
            case "economy":
                priceModifier = 0.75;
                break;
            case "regular":
                priceModifier = 1.0;
                break;
            case "deluxe":
                priceModifier = 1.25;
                break;
        }

        displayPrice = basePrice * foodQuantity * priceModifier;
        displayPrice = displayPrice.toFixed(2);


        table.innerHTML += "<tr id=\"row"+i+"\"><td>" + foodName + "</td><td>" + foodQuantity + "</td><td>" + displayPrice + "$</td></tr>";

        subtotal += parseFloat(displayPrice);
    }
        subtotal = subtotal.toFixed(2);
        QST = (subtotal*0.09975).toFixed(2);
        GST = (subtotal*0.05).toFixed(2);
        total = (parseFloat(subtotal) + parseFloat(QST) + parseFloat(GST)).toFixed(2);

        document.getElementById("subtotal").innerHTML = "Subtotal: $" + subtotal;
        document.getElementById("QST").innerHTML = "QST: $" + QST;
        document.getElementById("GST").innerHTML = "GST: $" + GST;
        document.getElementById("total-price").innerHTML = "Total: $" + total;
}

//Create starting table
makeTable();


//Update table as user changes quantity and quality values
for (var i = 1; i <= numOfObjects; i++){
    //Quantity change
    document.getElementById("item" + i).addEventListener("change", function() {
        makeTable();
    });

    //Quality change
    document.getElementById("quality-selector" + i).addEventListener("change", function() {
        makeTable();
    });
}