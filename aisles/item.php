<?php include_once '../includes/session.php'; ?>

<?php
    if(isset($_GET['aisle']) && isset($_GET['food'])){
        include_once '../includes/dbh.inc.php';
        $aisle = mysqli_real_escape_string($conn, $_GET['aisle']);
        $food = mysqli_real_escape_string($conn, $_GET['food']);

        $sql = "SELECT * FROM $aisle WHERE codename='$food'";
        $result = mysqli_query($conn, $sql) or die(header('Location: ../index.php')); //Redirect on broken "aisle" tags to homepage
        $row = mysqli_fetch_array($result);
        
        if(!mysqli_num_rows ( $result )) {
            (header('Location: ../index.php')); //Redirect on broken "food" tags to homepage
        }
    } 
    else {
        header('Location: ../index.php'); //Redirect on missing aisle or food tags to homepage
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

    <title>Food | TastyGrocery.com</title>
    <meta name="description" content="Great Food">
    <link rel="shortcut icon" type="image/png" href="../img/favicon-32x32.png">

</head>

  <body>

    <?php include_once '../templates/navbar.php'; ?>
    <?php include_once '../templates/header.php'; ?>

    <div class="page-container">
        <div class="content-wrapper">

            <div class="icon-bar desktop-only">
                <a href="https://www.facebook.com" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.twitter.com" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a>
                <a href="https://www.pinterest.com" target="_blank" class="pinterest"><i class="fab fa-pinterest"></i></a>
                <a href="https://www.tumblr.com" target="_blank" class="tumblr"><i class="fab fa-tumblr"></i></a>
                <a href="mailto:?" class="email"><i class="far fa-envelope"></i></a>
            </div>
            
            <div class="main page-width">
              <!--Main content starts here!-->
              
              <hr>
              <div class="row aisle">

                <div class="col-md-6">
                    <div class="product-page"><?php echo "<img src=\"../img/"; echo $row['imagename']; echo "\" alt=\""; echo $row['name']; echo "\">" ?></div>
                </div>

                <div class="col-md-6">
                    <div class="product-page-content">
                        <h2><?php echo $row["name"]; ?></h2>
                        <br>
                        <h4><?php echo $row["weight"]; ?> kg</h4>
                        <h3><?php echo $row["price"]; ?>$</h3>
                        <input type="number" placeholder="Enter Quantity" name= "item" id="item<?php echo $row['id'].$aisle; ?>" min="0" onchange='saveValue(this);' onkeyup='saveValue(this);'>

                        <br/>
                        <select class="quality" id="quality-selector<?php echo $row['id'].$aisle; ?>">
                            <option value="economy" class="option" id="economy">Economy Value (0.75x price)</option>
                            <option value="regular" class="option" id="regular">Regular Value (normal price)</option>
                            <option value="deluxe" class="option" id="deluxe">Deluxe Value (1.25x price)</option>
                        </select>                        

                        
                        <div id="info-button">
                            <button class="btn custom-button more-info">
                                More Information<i class="fas fa-chevron-circle-down"></i>
                            </button>
                        </div>
                    
                        <div class="border hidden">
                            <?php echo $row["description"]; ?>
                        </div>

                        <button class="custom-button"><i class="fas fa-shopping-cart"></i>Add to Cart</button>
                        
                    </div>
                </div>

              </div>

              <hr> 
              <div class="center-text"><a href="../Grain.html" class="custom-button"><i class="fas fa-arrow-left"></i>Return to aisle</a></div>
              
              <!--Main content ends here!-->
            </div>

        </div>

        <?php include_once '../templates/footer.php'; ?>
    </div>

    

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
    <script src="../scripts/moreinfo.js"></script>
    <script src="../scripts/retainquality.js"></script>
    <script src="../scripts/retainquantity.js"></script>

  </body>
</html>