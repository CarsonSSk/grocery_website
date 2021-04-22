<?php include_once 'includes/session.php'; ?>
<?php  
  if(isset($_POST['insert'])) { 
    $xml = new DomDocument("1.0","UTF-8");
    $xml->load('orders.xml');
    
    $id1 = $_POST['id1'];
    $id2 = $_POST['id2'];
    $id3 = $_POST['id3'];
    $id4 = $_POST['id4'];
    $id5 = $_POST['id5'];
    $qty1 = $_POST['qty1'];
    $qty2 = $_POST['qty2'];
    $qty3 = $_POST['qty3'];
    $qty4 = $_POST['qty4'];
    $qty5 = $_POST['qty5'];
    $address = $_POST['address'];


    $idGenerate = fopen("idGenerator.txt", "r");
    $idRead = fread($idGenerate,filesize("idGenerator.txt"));
    $newid = $idRead + 1;
    fclose($idGenerate);

    $idGenerate = fopen("idGenerator.txt", "w");
    fwrite($idGenerate, $newid);
    fclose($idGenerate);

    $ordersTag = $xml->getElementsByTagName("orders")->item(0);

      $orderTag = $xml->createElement("order");
        $idTag = $xml->createElement("orderid", $newid);
        $addressTag = $xml->createElement("address", $address);
        $itemTag1 = $xml->createElement("item");
        $itemTag2 = $xml->createElement("item");
        $itemTag3 = $xml->createElement("item");
        $itemTag4 = $xml->createElement("item");
        $itemTag5 = $xml->createElement("item");

        $idTag1 = $xml->createElement("id", $id1);
        $idTag2 = $xml->createElement("id", $id2);
        $idTag3 = $xml->createElement("id", $id3);
        $idTag4 = $xml->createElement("id", $id4);
        $idTag5 = $xml->createElement("id", $id5);

        $qtyTag1 = $xml->createElement("qty", $qty1);
        $qtyTag2 = $xml->createElement("qty", $qty2);
        $qtyTag3 = $xml->createElement("qty", $qty3);
        $qtyTag4 = $xml->createElement("qty", $qty4);
        $qtyTag5 = $xml->createElement("qty", $qty5);

        $orderTag->appendChild($idTag);
        $orderTag->appendChild($addressTag);
        $orderTag->appendChild($itemTag1);
        $orderTag->appendChild($itemTag2);
        $orderTag->appendChild($itemTag3);
        $orderTag->appendChild($itemTag4);
        $orderTag->appendChild($itemTag5);

        $itemTag1->appendChild($idTag1);
        $itemTag2->appendChild($idTag2);
        $itemTag3->appendChild($idTag3);
        $itemTag4->appendChild($idTag4);
        $itemTag5->appendChild($idTag5);

        $itemTag1->appendChild($qtyTag1);
        $itemTag2->appendChild($qtyTag2);
        $itemTag3->appendChild($qtyTag3);
        $itemTag4->appendChild($qtyTag4);
        $itemTag5->appendChild($qtyTag5);
      
        $orderTag->setAttribute("id", $newid);

      $ordersTag->appendChild($orderTag);
      $xml->save('orders.xml');
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
    
    <title>AddOrder | TastyGrocery.com</title>
    <meta name="description" content="The userlist of Grocery.com, home of great online grocery shopping!">
    <link rel="shortcut icon" type="image/png" href="img/favicon-32x32.png">
    
  </head>

  <body>

  <?php include_once 'templates/navbar.php'; ?>
  <?php include_once 'templates/header.php'; ?>

    <div class="page-container">
        <div class="content-wrapper">
            
            <div class="main page-width">
              <!--Main content starts here!-->

            <form method = "POST" action = "addOrder.php">
              <div class="card-content">
                <h5 class="center-text"><b>Add Order</b></h5>
              </div>
                  <div class="edit-field-type">
                    <div class="card-sub-content">
                        <h5 class="center-text">Address</h5>
                    </div>
                    <div class="edit-field">
                        <input type= "text" name = "address">
                    </div>
                  </div>

                  <div class="edit-field-type">
                    <div class="card-sub-content">
                        <h5 class="center-text">Items</h5>
                    </div>
                  </div>

                  <table class = "orderItems">
                    <thead>
                      <tr>
                        <th>#ID</th>
                        <th>Quantity</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="text" name = "id1" class="barContentItems"></td>
                        <td><input type="text" name = "qty1" class="barContentItems"></td>
                      </tr>
                      <tr>
                        <td><input type="text" name = "id2" class="barContentItems"></td>
                        <td><input type="text" name = "qty2" class="barContentItems"></td>
                      </tr>
                      <tr>
                        <td><input type="text" name = "id3" class="barContentItems"></td>
                        <td><input type="text" name = "qty3" class="barContentItems"></td>
                      </tr>
                      <tr>
                        <td><input type="text" name = "id4" class="barContentItems"></td>
                        <td><input type="text" name = "qty4" class="barContentItems"></td>
                      </tr>
                      <tr>
                        <td><input type="text" name = "id5" class="barContentItems"></td>
                        <td><input type="text" name = "qty5" class="barContentItems"></td>
                      </tr>
                    </tbody>
                  </table>

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
                <a href="orderlist.php" class="custom-button">Order List</a>
              </div>
              <div class="col-lg-4 col-12">
                <a href="productlist.php" class="custom-button">Product List</a>
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
