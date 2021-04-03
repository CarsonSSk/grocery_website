<?php
    if(!isset($_GET['aisle'])){
        header('Location: ../index.php'); //Redirect on nonexistent aisle tag to homepage
    }

    include_once '../includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- CSS Sheet -->
    <link rel="stylesheet" href="../styles.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

    <!--Font Awesome CDN-->
    <script src="https://kit.fontawesome.com/1e07fc90b9.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script sr="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <title> Produce Aisle | TastyGrocery </title>
    <meta name="description" content="Produce aisle of TastyGrocery">
    <link rel="shortcut icon" type="image/png" href="../img/favicon-32x32.png">

</head>

<body>

    <?php include_once '../templates/navbar.php'; ?>
    <?php include_once '../templates/header.php'; ?>

    <div class="page-container">
        <div class="content-wrapper">

            <div class="icon-bar desktop-only">
                <a href="https://www.facebook.com" target="_blank" class="facebook"><i
                        class="fab fa-facebook-f"></i></a>
                <a href="https://www.twitter.com" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a>
                <a href="https://www.pinterest.com" target="_blank" class="pinterest"><i
                        class="fab fa-pinterest"></i></a>
                <a href="https://www.tumblr.com" target="_blank" class="tumblr"><i class="fab fa-tumblr"></i></a>
                <a href="mailto:?" class="email"><i class="far fa-envelope"></i></a>
            </div>

            <div class="main page-width">

                <div class="banner">
                    <?php
                        $aisle = $_GET['aisle'];
                        if ($aisle == "produce_food") 
                            echo "<img class = \"aisle-banner\" src=\"../img/produce/produce_banner.jpg\">";
                        else if ($aisle == "meat_food") 
                            echo "<img class = \"aisle-banner\" src=\"../img/meat/meat_banner.jpg\">";
                        else if ($aisle == "grain_food") 
                            echo "<img class = \"aisle-banner\" src=\"../img/grain/grain_banner.jpg\">";
                        else if ($aisle == "dairy_food") 
                            echo "<img class = \"aisle-banner\" src=\"../img/dairy/dairy_banner.png\">";
                        else if ($aisle == "candy_food") 
                            echo "<img class = \"aisle-banner\" src=\"../img/candy/candy_banner.png\">";
                    ?>
                </div>

                <div class="row aisle">


                    <?php
                        //Display all items by looping through the appropriate database table                           
                        $sql = "SELECT * FROM $aisle";
                        $result = mysqli_query($conn, $sql) or die("Bad query. Check URL or try again later.");

                        if(mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_array($result)) {
                                echo "<div class=\"col-lg-4 col-sm-6\">
                                        <div class=\"advertisement-holder\">
                                            <div class=\"img-holder\">
                                                <a href=\"item.php?aisle="; echo $aisle; echo "&food="; echo $row['codename']; echo"\">
                                                    <img src=\"../img/"; echo $row['imagename']; echo "\" alt=\""; echo $row['name']; echo "\">
                                                </a>
                                            </div>
                                            <div class=\"info-holder\">
                                                <a href=\"item.php?aisle="; echo $aisle; echo "&food="; echo $row['codename']; echo"\">
                                                <p class=\"food-name\">";
                                                    echo $row['name'];
                                                echo "</p>
                                                </a>
                                                <p class=\"food-details\">";
                                                    echo $row['weight']; echo " kg</p>
                                                <p class=\"food-price\">"; echo $row['price']; echo"$</p>
                                                <a href=\"\" class=\"custom-button\"><i class=\"fas fa-shopping-cart\"></i>Add to Cart</a>
    
                                                <input type=\"number\" placeholder=\"Enter Quantity\" name= \"item"; echo $row['id']; echo "\" id=\"item"; echo $row['id'].$aisle; echo "\" value=\"1\" min=\"0\" onchange='saveValue(this);' onkeyup='saveValue(this);'>
                                        <select class=\"quality\" id=\"quality-selector"; echo $row['id'].$aisle; echo "\">
                                            <option value=\"economy\" class=\"option\" id=\"economy\">Economy Value (0.75x price)</option>
                                            <option value=\"regular\" class=\"option\" id=\"regular\">Regular Value (normal price)</option>
                                            <option value=\"deluxe\" class=\"option\" id=\"deluxe\">Deluxe Value (1.25x price)</option>
                                        </select>
                                            </div>
                                        </div>
                                    </div>";
                            }
                        }
                        else {
                            echo "<p>No items to display. Our servers may be experiencing issues. Check back later.</p>";
                        }
                    ?>

                </div>

            </div>

        </div>

        <br />

        <?php include_once '../templates/footer.php'; ?>

    </div>

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>

    <script src="../scripts/retainquantitycart.js"></script>
    <script src="../scripts/retainqualitycart.js"></script>

</body>

</html>