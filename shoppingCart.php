<?php 

include_once 'includes/session.php'; 

//  Cart arrays
if (isset($_POST["add_to_cart"])) {

    if (isset($_SESSION["shopping_cart"])) {
        $product_array_id = array_column($_SESSION["shopping_cart"], "product_id");
        if (in_array($_GET["id"], $product_array_id)) {
          echo '<script>alert("Product Already Added")</script>';
        }
        else {
          $index = count($_SESSION["shopping_cart"]);
          $product_array = array (
            'product_id' => $_GET["id"],
            'product_name' => $_POST["hidden_name"],
            'product_weight' => $_POST["hidden_weight"],
            'product_price' => $_POST["hidden_price"],
            'product_img' => $_POST["image_path"],
          );
          $_SESSION["shopping_cart"][$index] = $product_array;
        }
    }
    else {
        $product_array = array (
            'product_id' => $_GET["id"],
            'product_name' => $_POST["hidden_name"],
            'product_weight' => $_POST["hidden_weight"],
            'product_price' => $_POST["hidden_price"],
            'product_img' => $_POST["image_path"],
        );
        $_SESSION["shopping_cart"][0] = $product_array;
    }
}

//  Delete function
if (isset($_GET["action"])) {
  if ($_GET["action"] == "delete") {
    foreach ($_SESSION["shopping_cart"] as $keys => $values) {
      if ($values["product_id"] == $_GET["id"]) {
        unset($_SESSION["shopping_cart"][$keys]);
        echo '<script>alert("Product has been removed")</script>';
        echo '<script>window.location="shoppingCart.php"</script>';
      }
    }
  }
}

?>

<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
    <!-- CSS Sheet -->
    <link rel="stylesheet" href="styles.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

    <!--Font Awesome CDN-->
    <script src="https://kit.fontawesome.com/1e07fc90b9.js" crossorigin="anonymous"></script>
    
    <!-- Scripts -->
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    
    <title>Shopping Cart | TastyGrocery.com</title>
    <meta name="shopping cart" content="Shows what the user is trying to purchase and lets them edit the quantities, remove items, or procede to purchase"> <!--Don't forget to edit description and title-->
    <link rel="shortcut icon" type="image/png" href="img/favicon-32x32.png">
    
  </head>

  <body>

    <?php include_once 'templates/navbar.php'; ?>
    <?php include_once 'templates/header.php'; ?>

    <div class="page-container">
        <div class="content-wrapper">
            
            <div class="main page-width">
              <!--Main content starts here!-->
              
              <div class="row aisle">
                <div class="col-lg-8 col-md-6 col-sm-12">
                  <div class="row aisle">
                    
                    <?php
                    //  Cart display
                    if (!empty($_SESSION["shopping_cart"])) {
                      $counter = 0;
                        foreach ($_SESSION["shopping_cart"] as $keys => $values) {
                          $counter = $counter + 1;
                            ?>
                            <div class="col-lg-6  col-md-12 col-sm-12">
                              <div class="advertisement-holder">
                                <div class="img-holder">
                                    <a><img src=<?php echo $values["product_img"]; ?> alt=<?php echo $values["product_name"]; ?>></a>
                                </div>
                                <div class="info-holder">
                                    <a><p class="food-name"><?php 
                                    $stringname = $values["product_name"];
                                    $name = str_replace("_"," ",$stringname);
                                    echo $name; ?></p></a>
                                    <p class="food-details"><?php echo $values["product_weight"]; ?></p>
                                    <p class="food-price"><?php echo $values["product_price"]; ?>$</p>
                                    
                                    <input type="number" placeholder="Enter Quantity" name= "item<?php echo $counter;?>" id="item<?php echo $counter;?>cart" value="1" min="1" onchange='saveValue(this);' onkeyup='saveValue(this);'>
                                    <select class="quality" name ="quality-selector<?php echo $counter;?>" id="quality-selector<?php echo $counter;?>cart">
                                    <option value="economy" class="option" id="economy">Economy Value (0.75x price)</option>
                                    <option value="regular" class="option" id="regular" Selected>Regular Value (normal price)</option>
                                    <option value="deluxe" class="option" id="deluxe">Deluxe Value (1.25x price)</option>
                                    </select>
                                    </br>
                                    </br>
                                    <a href="shoppingCart.php?action=delete&id=<?php echo $values["product_id"]; ?>" class="custom-button">Remove</a>
                                </div>
                              </div>
                            </div>
                            <?php
                        }
                    }
                    else {
                      echo "<div class=\"icon-bar-foot\">Your shopping cart is currently empty</div></br></br>";
                    } ?>  

            </div>

            </div>

            <div class="col-lg-4 col-sm-12">
              <h2 class="center-text"> Receipt </h2>
              <hr/>

              <table class="table-receipt">
              </table>




            
            <hr/>
            <h3 class="center-text" id="subtotal">Subtotal:            $46.92</h3>
            <h3 class="center-text" id="QST">QST: $2.35</h3>
            <h3 class="center-text" id="GST">GST: $4.34</h3>
            <hr/>
            <h2 class="center-text" id="total-price">Total: $53.61</h2>
            <div class="center-text">
            <a class="custom-button" href="ThankYou.html"><i class="fas fa-shopping-cart"></i> Proceed to Purchase</a>
          </div>
            </div>
            
          </div>

              
           
            </div>
              <!--Main content ends here!-->
            </div>

        </div>

        <?php include_once 'templates/footer.php'; ?>
    </div>

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
    <script src="scripts/retainquantitycart.js"></script>
    <script src="scripts/retainqualitycart.js"></script>
    <script src="scripts/updateprice.js"></script>

  </body>
</html>