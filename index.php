<?php include_once 'includes/session.php'; ?>

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
    
    <title>Homepage | TastyGrocery.com</title>
    <meta name="description" content="The homepage of Grocery.com, home of great online grocery shopping!">
    <link rel="shortcut icon" type="image/png" href="img/favicon-32x32.png">
    
  </head>

  <body>
    <?php include_once 'templates/navbar.php'; ?>
    <?php include_once 'templates/header.php'; ?>

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
            <?php 
            
            
            
            ?>






            <a href="aisles/item.php?aisle=meat_food&id=7">
              <div class="row banner">
                <div class="col-lg-8 col-md-12 green-background"><img src="img/live_chicken.jpg" alt="chicken"></div>
                <div class="col-lg-4 col-md-12">
                  <h2>Great Chicken</h2>
                  <h3>Every Day.</h3>
                  <p>Grown without antibiotics.</p>
                  <p class="banner-button">Come check it out</p>
                </div>
              </div>
            </a>

            <p class="subtitle">From January 1<sup>st</sup> to December 31<sup>st</sup> 2021</p>
            <br>

            <p class="subtitle-secondary">Produce Aisle</p>
            <div class="row aisle">



              <?php 

                $xml = simplexml_load_file("products.xml");


              $aisleName="produce";

                $list = $xml->$aisleName;
                
                for ($i = 0; $i < 3; $i++) {
                 {
                $name = $list[$i]->name;
                $description = $list[$i]->desc;
                $weight = $list[$i]->weight;
                $price = $list[$i]->price;
                $inv = $list[$i]->inv;
                $img = $list[$i]->img;
                $id = $list[$i]->id;
                
                $name= str_replace('_'," ",$name);



              {
                echo "<div class=\"col-lg-4 col-sm-6\">
                        <div class=\"advertisement-holder\">
                            <div class=\"img-holder\">
                                <a href=\"/Grocery/grocery_website/aisles/item.php?aisle=produce_food"; echo "&id="; echo $id; echo"\">
                                    <img src=\""; echo $img; echo "\" alt=\""; echo $name; echo "\">
                                </a>
                            </div>
                            <div class=\"info-holder\">
                                <a href=\"/Grocery/grocery_website/aisles/item.php?aisle=produce_food&id="; echo $id; echo"\">
                                <p class=\"food-name\">";
                                    echo $name;
                                echo "</p>
                                </a>
                                <p class=\"food-details\">";
                                    echo $weight; echo " kg</p>
                                <p class=\"food-price\">"; echo $price; echo"$</p>

                                
                            </div>
                        </div>
                        
                    </div>";
                    }

                   }
                  }
              ?>
              </div>

            <div class="center-text">
              <a href="/Grocery/grocery_website/aisles/aisle_page.php?aisle=produce_food" class="custom-button"><i class="fas fa-pepper-hot"></i>See all produce</a>
            </div>

            <hr>

            <p class="subtitle-secondary">Meat Aisle</p>
            <div class="row aisle">

            <?php 

              $xml = simplexml_load_file("products.xml");


              $aisleName="meat";

            $list = $xml->$aisleName;

              for ($i = 0; $i < 3; $i++) {
              {
                $name = $list[$i]->name;
                $description = $list[$i]->desc;
                $weight = $list[$i]->weight;
                $price = $list[$i]->price;
                $inv = $list[$i]->inv;
                $img = $list[$i]->img;
                $id = $list[$i]->id;


                $name= str_replace('_'," ",$name);


{
echo "<div class=\"col-lg-4 col-sm-6\">
        <div class=\"advertisement-holder\">
            <div class=\"img-holder\">
                <a href=\"/Grocery/grocery_website/aisles/item.php?aisle=meat_food"; echo "&id="; echo $id; echo"\">
                    <img src=\""; echo $img; echo "\" alt=\""; echo $name; echo "\">
                </a>
            </div>
            <div class=\"info-holder\">
                <a href=\"/Grocery/grocery_website/aisles/item.php?aisle=meat_food&id="; echo $id; echo"\">
                <p class=\"food-name\">";
                    echo $name;
                echo "</p>
                </a>
                <p class=\"food-details\">";
                    echo $weight; echo " kg</p>
                <p class=\"food-price\">"; echo $price; echo"$</p>

                
            </div>
        </div>
        
    </div>";
    }

   }
  }
?>

            </div>

            <div class="center-text">
              <a href="/Grocery/grocery_website/aisles/aisle_page.php?aisle=meat_food" class="custom-button"><i class="fas fa-drumstick-bite"></i>See all meat</a>
            </div>

            <hr>

            <p class="subtitle-secondary">Grain Aisle</p>
            <div class="row aisle">

            <?php 

$xml = simplexml_load_file("products.xml");


$aisleName="grain";

$list = $xml->$aisleName;

for ($i = 0; $i < 3; $i++) {
{
  $name = $list[$i]->name;
  $description = $list[$i]->desc;
  $weight = $list[$i]->weight;
  $price = $list[$i]->price;
  $inv = $list[$i]->inv;
  $img = $list[$i]->img;
  $id = $list[$i]->id;

  $name= str_replace('_'," ",$name);



{
echo "<div class=\"col-lg-4 col-sm-6\">
<div class=\"advertisement-holder\">
<div class=\"img-holder\">
  <a href=\"/Grocery/grocery_website/aisles/item.php?aisle=grain_food"; echo "&id="; echo $id; echo"\">
      <img src=\""; echo $img; echo "\" alt=\""; echo $name; echo "\">
  </a>
</div>
<div class=\"info-holder\">
  <a href=\"/Grocery/grocery_website/aisles/item.php?aisle=grain_food&id="; echo $id; echo"\">
  <p class=\"food-name\">";
      echo $name;
  echo "</p>
  </a>
  <p class=\"food-details\">";
      echo $weight; echo " kg</p>
  <p class=\"food-price\">"; echo $price; echo"$</p>

  
</div>
</div>

</div>";
}

}
}
?>

            </div>

            <div class="center-text">
              <a href="/Grocery/grocery_website/aisles/aisle_page.php?aisle=grain_food" class="custom-button"><i class="fas fa-bread-slice"></i>See all grains</a>
            </div>

            <hr>

            <p class="subtitle-secondary">Dairy Aisle</p>
            <div class="row aisle">

            <?php 

$xml = simplexml_load_file("products.xml");


$aisleName="dairy";

$list = $xml->$aisleName;

for ($i = 0; $i < 3; $i++) {
{
  $name = $list[$i]->name;
  $description = $list[$i]->desc;
  $weight = $list[$i]->weight;
  $price = $list[$i]->price;
  $inv = $list[$i]->inv;
  $img = $list[$i]->img;
  $id = $list[$i]->id;


  $name= str_replace('_'," ",$name);


{
echo "<div class=\"col-lg-4 col-sm-6\">
<div class=\"advertisement-holder\">
<div class=\"img-holder\">
  <a href=\"/Grocery/grocery_website/aisles/item.php?aisle=dairy_food"; echo "&id="; echo $id; echo"\">
      <img src=\""; echo $img; echo "\" alt=\""; echo $name; echo "\">
  </a>
</div>
<div class=\"info-holder\">
  <a href=\"/Grocery/grocery_website/aisles/item.php?aisle=dairy_food&id="; echo $id; echo"\">
  <p class=\"food-name\">";
      echo $name;
  echo "</p>
  </a>
  <p class=\"food-details\">";
      echo $weight; echo " kg</p>
  <p class=\"food-price\">"; echo $price; echo"$</p>

  
</div>
</div>

</div>";
}

}
}
?>

            </div>

            <div class="center-text">
              <a href="/Grocery/grocery_website/aisles/aisle_page.php?aisle=dairy_food" class="custom-button"><i class="fas fa-cheese"></i></i>See all dairy</a>
            </div>

            <hr>

            <p class="subtitle-secondary">Candy Aisle</p>
            <div class="row aisle">

            <?php 

$xml = simplexml_load_file("products.xml");


$aisleName="candy";

$list = $xml->$aisleName;

for ($i = 0; $i < 3; $i++) {
{
  $name = $list[$i]->name;
  $description = $list[$i]->desc;
  $weight = $list[$i]->weight;
  $price = $list[$i]->price;
  $inv = $list[$i]->inv;
  $img = $list[$i]->img;
  $id = $list[$i]->id;

  $name= str_replace('_'," ",$name);



{
echo "<div class=\"col-lg-4 col-sm-6\">
<div class=\"advertisement-holder\">
<div class=\"img-holder\">
  <a href=\"/Grocery/grocery_website/aisles/item.php?aisle=candy_food"; echo "&id="; echo $id; echo"\">
      <img src=\""; echo $img; echo "\" alt=\""; echo $name; echo "\">
  </a>
</div>
<div class=\"info-holder\">
  <a href=\"/Grocery/grocery_website/aisles/item.php?aisle=candy_food&id="; echo $id; echo"\">
  <p class=\"food-name\">";
      echo $name;
  echo "</p>
  </a>
  <p class=\"food-details\">";
      echo $weight; echo " kg</p>
  <p class=\"food-price\">"; echo $price; echo"$</p>

  
</div>
</div>

</div>";
}

}
}
?>

            </div>

            <div class="center-text">
              <a href="/Grocery/grocery_website/aisles/aisle_page.php?aisle=candy_food" class="custom-button"><i class="fas fa-candy-cane"></i>See all candy</a>
            </div>

            <hr>

            <a href="aisles/item.php?aisle=grain_food&id=14">
              <div class="row banner">
                <div class="col-lg-8 col-md-12 green-background"><img src="img/baker.jpg" alt="baker"></div>
                <div class="col-lg-4 col-md-12">
                  <h2>Warm Baguettes</h2>
                  <h3>Every Day.</h3>
                  <p>Made on the spot.</p>
                  <p class="banner-button">Come check it out</p>
                </div>
              </div>
            </a>

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
    
  </body>
</html>