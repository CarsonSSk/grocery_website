<?php include_once '../includes/session.php'; ?>

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

              <?php
    
                if(isset($_GET['aisle']) && isset($_GET['id'])){
                
        
                $aisle = $_GET['aisle'];
                $id = $_GET['id'];

                 if ($aisle == "produce_food") $aisleName="produce";
                elseif ($aisle == "meat_food") $aisleName="meat";
                elseif ($aisle == "grain_food") $aisleName="grain";
                elseif ($aisle == "dairy_food") $aisleName="dairy";
                elseif ($aisle == "candy_food") $aisleName="candy";
        
                $xml = simplexml_load_file("../products.xml");


                $list = $xml->$aisleName;
                $counter = count($list);
                for ($i = 0; $i < count($list); $i++) {
                if (($list[$i]->id) == $id) {
                $name = $list[$i]->name;
                $description = $list[$i]->desc;
                $weight = $list[$i]->weight;
                $price = $list[$i]->price;
                $inv = $list[$i]->inv;
                $img = $list[$i]->img;
                break;
                }
            }
                    }   
                    ?>




            <div class="col-md-6">
                    <div class="product-page">
                    <img src="../<?php echo $img; ?>" alt="<?php echo $name; ?>">
                </div>
                
            </div>

                <div class="col-md-6">
                    
                    <div class="product-page-content">
                        <h2><?php echo $name; ?></h2>
                        <br>
                        <h4><?php echo $weight; ?> kg</h4>
                        <h3><?php echo $price; ?>$</h3>
                        <input type="number" placeholder="Enter Quantity" name= "item" id="item<?php echo $id.$aisle; ?>\" min="0" onchange='saveValue(this);' onkeyup='saveValue(this);'>

                        <br/>
                        <select class="quality" id="quality-selector<?php echo $id.$aisle; ?>">
                            <option value="economy" class="option" id="economy">Economy Value (0.75x price)</option>
                            <option value="regular" class="option" id="regular">Regular Value (normal price)</option>
                            <option value="deluxe" class="option" id="deluxe">Deluxe Value (1.25x price)</option>
                        </select>                        

                        
                        <div id="info-button">
                            <button class="btn custom-button more-info">
                                More Information<i class="fas fa-chevron-circle-down"></i>
                            </button>
                        </div>
                        <form method="post" action="../shoppingCart.php?action=add&id=<?php echo $id; ?> ">
                        <div class="border hidden">
                            <?php echo $description; ?>
                        </div>
                        
                        <input type="submit" value="Add to Cart" name="add_to_cart" class="custom-button">

                        <input type="hidden" name="hidden_name" value="<?php echo $name;?>">
                        <input type="hidden" name="hidden_weight" value="<?php echo $weight;?>" >
                        <input type="hidden" name="hidden_price" value="<?php echo $price;?>" >
                        <input type="hidden" name="image_path" value="../ "<?php echo $img; ?>>

                        </form>
                    </div>
                    
                </div>
                
              

              

              <hr> 
              <div class="center-text"><a href="../aisles/aisle_page.php?aisle=<?php echo $aisle; ?>" class="custom-button"><i class="fas fa-arrow-left\"></i>Return to aisle</a></div>
              
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