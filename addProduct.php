<?php  
  if(isset($_POST['insert'])) { 
    $xml = new DomDocument("1.0","UTF-8");
    $xml->load('products.xml');
    
    $name = $_POST['name'];
    $image = $_POST['image'];
    $weight = $_POST['weight'];
    $price = $_POST['price'];
    $description = $_POST['desc'];
    $inventory = $_POST['inv'];
    $aisle = $_POST['aisle'];

    $idGenerate = fopen("idGenerator.txt", "r");
    $idRead = fread($idGenerate,filesize("idGenerator.txt"));
    $newid = $idRead + 1;
    fclose($idGenerate);

    $idGenerate = fopen("idGenerator.txt", "w");
    fwrite($idGenerate, $newid);
    fclose($idGenerate);

    $productsTag = $xml->getElementsByTagName("products")->item(0);

      $aisleTag = $xml->createElement($aisle);
        $idTag = $xml->createElement("id", $newid);
        $nameTag = $xml->createElement("name", $name);
        $descTag = $xml->createElement("desc", $description);
        $weightTag = $xml->createElement("weight", $weight);
        $priceTag = $xml->createElement("price", $price);
        $invTag = $xml->createElement("inv", $inventory);
        $imageTag = $xml->createElement("img", "../img/$aisle/$image");

        $aisleTag->appendChild($idTag);
        $aisleTag->appendChild($nameTag);
        $aisleTag->appendChild($descTag);
        $aisleTag->appendChild($weightTag);
        $aisleTag->appendChild($priceTag);
        $aisleTag->appendChild($invTag);
        $aisleTag->appendChild($imageTag);
        $aisleTag->setAttribute("id", $newid);

      $productsTag->appendChild($aisleTag);
      $xml->save('products.xml');
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
    
    <title>Userlist | TastyGrocery.com</title>
    <meta name="description" content="The userlist of Grocery.com, home of great online grocery shopping!">
    <link rel="shortcut icon" type="image/png" href="img/favicon-32x32.png">
    
  </head>

  <body>

    <div class="header-userpage">
      <div class="row page-width">
        <div class="col-6">
          <a href="userlist.html"><i class="fas fa-door-open"></i>Backstore</a>
        </div>
        <div class="col-6 right-text">
          <a href="login.html"><i class="fas fa-user-alt"></i>My Account</a>
        </div>
      </div>
    </div>

    <header class="sticky-top">
      <div class="page-width">
        <div class="row">
          
          <div class="col-md-6 col-9">
            <p class="header-name"><a href="index.html"><i class="fas fa-pepper-hot"></i>TastyGrocery</a></p>
          </div>

          <div class="col-md-6 col-3">

            <!-- Aisle menu on desktop view -->
            <div class="aisle-menu desktop-only">
                <div class="aisle-box">
                  <span><i class="fas fa-search"></i>Aisles</span>
                </div>
              <ul>
                  <li>
                      <a href="aisles/Produce.html"><i class="fas fa-pepper-hot"></i>Produce</a>
                  </li>
                  <li>
                      <a href="aisles/Meat.html"><i class="fas fa-drumstick-bite"></i>Meat</a>
                  </li>
                  <li>
                      <a href="aisles/Grain.html"><i class="fas fa-bread-slice"></i>Grain</a>
                  </li>
                  <li>
                      <a href="aisles/Dairy.html"><i class="fas fa-cheese"></i>Dairy</a>
                  </li>
                  <li>
                      <a href="aisles/Candy.html"><i class="fas fa-candy-cane"></i>Candy</a>
                  </li>
              </ul>
            </div>
            
            <!-- Aisle and cart menu on mobile view -->
            <div class="dropdown show">
              <a class="btn btn-secondary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Menu
              </a>
            
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="shoppingCart.html"><i class="fas fa-shopping-cart"></i>Cart</a>
                <a class="dropdown-item" href="aisles/Produce.html"><i class="fas fa-pepper-hot"></i>Produce</a>
                <a class="dropdown-item" href="aisles/Meat.html"><i class="fas fa-drumstick-bite"></i>Meat</a>
                <a class="dropdown-item" href="aisles/Grain.html"><i class="fas fa-bread-slice"></i>Grain</a>
                <a class="dropdown-item" href="aisles/Dairy.html"><i class="fas fa-cheese"></i>Dairy</a>
                <a class="dropdown-item" href="aisles/Candy.html"><i class="fas fa-candy-cane"></i>Candy</a>
              </div>
            </div>

            <!-- Cart check on mobile view -->
            <div class="cart-check desktop-only">
                <a class="custom-button" href="shoppingCart.html"><i class="fas fa-shopping-cart"></i> Cart</a>
            </div>
          </div>

        </div>
      </div>
    </header>

    <div class="page-container">
        <div class="content-wrapper">
            
            <div class="main page-width">
              <!--Main content starts here!-->

            <form method = "POST" action = "addProduct.php">
              <div class="card-content">
                <h5 class="center-text"><b>Add Product</b></h5>
              </div>
                  <div class="edit-field-type">
                    <div class="card-sub-content">
                        <h5 class="center-text">Name</h5>
                    </div>
                    <div class="edit-field">
                        <input type= "text" name = "name">
                    </div>
                  </div>
                  <div class="edit-field-type">
                    <div class="card-sub-content">
                        <h5 class="center-text">Image Name</h5>
                    </div>
                    <div class="edit-field">
                        <input type= "text" name = "image">
                    </div>
                  </div>
                  <div class="edit-field-type">
                    <div class="card-sub-content">
                        <h5 class="center-text">Weight</h5>
                    </div>
                    <div class="edit-field">
                        <input type= "text" name = "weight">
                    </div>
                  </div>
                  <div class="edit-field-type">
                    <div class="card-sub-content">
                        <h5 class="center-text">Price</h5>
                    </div>
                    <div class="edit-field">
                        <input type= "text" name = "price">
                    </div>
                  </div>
                  <div class="edit-field-type">
                    <div class="card-sub-content">
                        <h5 class="center-text">Description</h5>
                    </div>
                    <div class="edit-field">
                        <input type= "text" name = "desc">
                    </div>
                  </div>
                  <div class="edit-field-type">
                    <div class="card-sub-content">
                        <h5 class="center-text">Aisle</h5>
                    </div>
                    <select name="aisle" id="category">
                        <option value="grain" class="option" name = grain>Grain</option>
                        <option value="meat" class="option" name = meat>Meat</option>
                        <option value="produce" class="option" name = produce>Produce</option>
                        <option value="dairy" class="option" name = dairy>Dairy</option>
                        <option value="candy" class="option" name = candy>Candy</option>
                    </select>
                  </div>
                  <div class="edit-field-type">
                    <div class="card-sub-content">
                        <h5 class="center-text">Inventory Quantity</h5>
                    </div>
                    <div class="edit-field">
                        <input type= "text" name = "inv">
                    </div>
                  </div>

                  <div class="saveButton"> 
                    <input type="submit" class="btn custom-button" name = "insert" value="Save"></input>
                  </div>
            </form>
                  <hr class="clear">

                  <p class="subtitle">Backstore Navigation</p>

            <div class="row backstore-navigation">
              <div class="col-lg-4 col-12">
                <a href="userlist.html" class="custom-button">User List</a>
              </div>
              <div class="col-lg-4 col-12">
                <a href="orderlist.html" class="custom-button">Order List</a>
              </div>
              <div class="col-lg-4 col-12">
                <a href="productlist.html" class="custom-button">Product List</a>
              </div>
            </div>
                </div>

              
              <!--Main content ends here!-->
            </div>

        </div>

        <footer>
          <div class="row page-width">

            <div class="col-lg-3 col-md-12">
              <p class="footer-name"><a href="index.html">TastyGrocery.com</a></p>
            </div>

            <div class="col-lg-6 col-md-12">
              <div class="icon-bar-foot">
                  <a href="https://www.facebook.com" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a>
                  <a href="https://www.twitter.com" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a>
                  <a href="https://www.pinterest.com" target="_blank" class="pinterest"><i class="fab fa-pinterest"></i></a>
                  <a href="https://www.tumblr.com" target="_blank" class="tumblr"><i class="fab fa-tumblr"></i></a>
                  <a href="mailto:?" class="email"><i class="far fa-envelope"></i></a>
              </div>
            </div>

            <div class="col-lg-3 col-md-12">
              <p class="contact"><a href="mailto:grocery@mailinator.com">Contact us</a></p>
            </div>

          </div>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>




    
  </body>

</html>
