<?php include_once '../includes/session.php'; ?>
<?php  
$id = $_GET['id'];
$aisle = $_GET['aisle'];
$xml = simplexml_load_file("../products.xml");
switch($aisle) { 
  case "produce":
    $list = $xml->produce;
    for ($i = 0; $i < count($list); $i++) {
      if (($list[$i]->id) == $id) {
        $name = $list[$i]->name;
        $desc = $list[$i]->desc;
        $weight = $list[$i]->weight;
        $price = $list[$i]->price;
        $inv = $list[$i]->inv;
        $image = $list[$i]->img;
        break;
      }
    }
  break;
  case "meat":
    $list = $xml->meat;
    for ($i = 0; $i < count($list); $i++) {
      if (($list[$i]->id) == $id) {
        $name = $list[$i]->name;
        $desc = $list[$i]->desc;
        $weight = $list[$i]->weight;
        $price = $list[$i]->price;
        $inv = $list[$i]->inv;
        $image = $list[$i]->img;
        break;
      }
    }
  break;
  case "candy":
    $list = $xml->candy;
    for ($i = 0; $i < count($list); $i++) {
      if (($list[$i]->id) == $id) {
        $name = $list[$i]->name;
        $desc = $list[$i]->desc;
        $weight = $list[$i]->weight;
        $price = $list[$i]->price;
        $inv = $list[$i]->inv;
        $image = $list[$i]->img;
        break;
      }
    }
  break;
  case "dairy":
    $list = $xml->dairy;
    for ($i = 0; $i < count($list); $i++) {
      if (($list[$i]->id) == $id) {
        $name = $list[$i]->name;
        $desc = $list[$i]->desc;
        $weight = $list[$i]->weight;
        $price = $list[$i]->price;
        $inv = $list[$i]->inv;
        $image = $list[$i]->img;
        break;
      }
    }
  break;
  case "grain":
    $list = $xml->grain;
    for ($i = 0; $i < count($list); $i++) {
      if (($list[$i]->id) == $id) {
        $name = $list[$i]->name;
        $desc = $list[$i]->desc;
        $weight = $list[$i]->weight;
        $price = $list[$i]->price;
        $inv = $list[$i]->inv;
        $image = $list[$i]->img;
        break;
      }
    }
  break;
}

if(isset($_POST['edit'])) { 
  switch($aisle) { 
    case "produce":
      $list = $xml->produce;
      for ($i = 0; $i < count($list); $i++) {
        if (($list[$i]->id) == $id) {
          $newname = $_POST['name'];
          $newweight = $_POST['weight'];
          $newprice = $_POST['price'];
          $newdesc = $_POST['desc'];
          $newinv = $_POST['inv'];
          $newimage = $_POST['image'];

          $list[$i]->name = $newname;
          $list[$i]->weight = $newweight;
          $list[$i]->price = $newprice;
          $list[$i]->desc = $newdesc;
          $list[$i]->inv = $newinv;
          $list[$i]->img = $newimage;
          
          $name = $newname;
          $desc = $newweight;
          $weight = $newprice;
          $price = $newdesc;
          $inv = $newinv;
          $image = $newimage;
          break;
        }
      }
    break;
    case "meat":
      $list = $xml->meat;
      for ($i = 0; $i < count($list); $i++) {
        if (($list[$i]->id) == $id) {
          $newname = $_POST['name'];
          $newweight = $_POST['weight'];
          $newprice = $_POST['price'];
          $newdesc = $_POST['desc'];
          $newinv = $_POST['inv'];
          $newimage = $_POST['image'];

          $list[$i]->name = $newname;
          $list[$i]->weight = $newweight;
          $list[$i]->price = $newprice;
          $list[$i]->desc = $newdesc;
          $list[$i]->inv = $newinv;
          $list[$i]->img = $newimage;
          
          $name = $newname;
          $desc = $newweight;
          $weight = $newprice;
          $price = $newdesc;
          $inv = $newinv;
          $image = $newimage;
          break;
        }
      }
    break;
    case "candy":
      $list = $xml->candy;
      for ($i = 0; $i < count($list); $i++) {
        if (($list[$i]->id) == $id) {
          $newname = $_POST['name'];
          $newweight = $_POST['weight'];
          $newprice = $_POST['price'];
          $newdesc = $_POST['desc'];
          $newinv = $_POST['inv'];
          $newimage = $_POST['image'];

          $list[$i]->name = $newname;
          $list[$i]->weight = $newweight;
          $list[$i]->price = $newprice;
          $list[$i]->desc = $newdesc;
          $list[$i]->inv = $newinv;
          $list[$i]->img = $newimage;
          
          $name = $newname;
          $desc = $newweight;
          $weight = $newprice;
          $price = $newdesc;
          $inv = $newinv;
          $image = $newimage;
          break;
        }
      }
    break;
    case "dairy":
      $list = $xml->dairy;
      for ($i = 0; $i < count($list); $i++) {
        if (($list[$i]->id) == $id) {
          $newname = $_POST['name'];
          $newweight = $_POST['weight'];
          $newprice = $_POST['price'];
          $newdesc = $_POST['desc'];
          $newinv = $_POST['inv'];
          $newimage = $_POST['image'];

          $list[$i]->name = $newname;
          $list[$i]->weight = $newweight;
          $list[$i]->price = $newprice;
          $list[$i]->desc = $newdesc;
          $list[$i]->inv = $newinv;
          $list[$i]->img = $newimage;
          
          $name = $newname;
          $desc = $newweight;
          $weight = $newprice;
          $price = $newdesc;
          $inv = $newinv;
          $image = $newimage;
          break;
        }
      }
    break;
    case "grain":
      $list = $xml->grain;
      for ($i = 0; $i < count($list); $i++) {
        if (($list[$i]->id) == $id) {
          $newname = $_POST['name'];
          $newweight = $_POST['weight'];
          $newprice = $_POST['price'];
          $newdesc = $_POST['desc'];
          $newinv = $_POST['inv'];
          $newimage = $_POST['image'];

          $list[$i]->name = $newname;
          $list[$i]->weight = $newweight;
          $list[$i]->price = $newprice;
          $list[$i]->desc = $newdesc;
          $list[$i]->inv = $newinv;
          $list[$i]->img = $newimage;
          
          $name = $newname;
          $desc = $newweight;
          $weight = $newprice;
          $price = $newdesc;
          $inv = $newinv;
          $image = $newimage;
          break;
        }
      }
    break;

  }
  $xml->asXML('../products.xml');
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
    <link rel="stylesheet" href="../styles.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

    <!--Font Awesome CDN-->
    <script src="https://kit.fontawesome.com/1e07fc90b9.js" crossorigin="anonymous"></script>
    
    <!-- Scripts -->
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    
    <title>Edit Product | TastyGrocery.com</title>
    <meta name="description" content="The userlist of Grocery.com, home of great online grocery shopping!">
    <link rel="shortcut icon" type="image/png" href="img/favicon-32x32.png">
    
  </head>

  <body>

  <?php include_once '../templates/navbar.php'; ?>
  <?php include_once '../templates/header.php'; ?>

    <div class="page-container">
        <div class="content-wrapper">
            
            <div class="main page-width">
              <!--Main content starts here!-->
              <form method = "POST" action = <?php "addeditproducts/editfood.php?aisle=$aisle&id=$id" ?>>
              <div class="card-content">
                <h5 class="center-text"><b>Edit Product</b></h5>
              </div>
                  <hr/>
                  <div class="center-text">
                    <img src=<?php echo "../$image"?>>
                  <hr/>
                  <div class="edit-field-type">
                    <div class="card-sub-content">
                        <h5 class="center-text">Name</h5>
                    </div>
                    <div class="edit-field">
                        <input value=<?php echo $name;?> name = "name" class="barContent">
                    </div>
                  </div>
                  <div class="edit-field-type">
                    <div class="card-sub-content">
                        <h5 class="center-text">Image Name</h5>
                    </div>
                    <div class="edit-field">
                        <input value=<?php echo $image;?> name = "image" class="barContent">
                    </div>
                  </div>
                  <div class="edit-field-type">
                    <div class="card-sub-content">
                        <h5 class="center-text">Weight</h5>
                    </div>
                    <div class="edit-field">
                        <input value= <?php echo $weight;?> name = "weight" class="barContent">
                    </div>
                  </div>
                  <div class="edit-field-type">
                    <div class="card-sub-content">
                        <h5 class="center-text">Price</h5>
                    </div>
                    <div class="edit-field">
                        <input value=<?php echo $price;?> name = "price" class="barContent">
                    </div>
                  </div>
                  <div class="edit-field-type">
                    <div class="card-sub-content">
                        <h5 class="center-text">Description</h5>
                    </div>
                    <div class="edit-field">
                        <input value=<?php echo $desc;?> name = "desc" class="barContent">
                    </div>
                  </div>
                  <div class="edit-field-type">
                    <div class="card-sub-content">
                        <h5 class="center-text">Quantity</h5>
                    </div>
                    <div class="edit-field">
                        <input value=<?php echo $inv;?> name = "inv" class="barContent">
                    </div>
                  </div>

                  <div class="saveButton"> 
                    <input type="submit" class="btn custom-button" name = "edit" value="Save"></input>
                  </div>
                </form>
                  <hr class="clear">

                  <p class="subtitle">Backstore Navigation</p>

            <div class="row backstore-navigation">
              <div class="col-lg-4 col-12">
                <a href="../userlist.html" class="custom-button">User List</a>
              </div>
              <div class="col-lg-4 col-12">
                <a href="../orderlist.php" class="custom-button">Order List</a>
              </div>
              <div class="col-lg-4 col-12">
                <a href="../productlist.php" class="custom-button">Product List</a>
              </div>
            </div>
                </div>
              <!--Main content ends here!-->
            </div>

        </div>

        <footer>
          <div class="row page-width">

            <div class="col-lg-3 col-md-12">
              <p class="footer-name"><a href="../index.html">TastyGrocery.com</a></p>
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