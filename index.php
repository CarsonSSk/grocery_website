<!-- By James Partsafas. Do not edit. -->

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

    <div class="header-userpage">
      <div class="row page-width">
        <div class="col-6">
          <a href="userlist.html"><i class="fas fa-door-open"></i>Backstore</a>
        </div>
        <div class="col-6 right-text">
          <a href="login.php"><i class="fas fa-user-alt"></i>My Account</a>
        </div>
      </div>
    </div>

    <header class="sticky-top">
      <div class="page-width">
        <div class="row">
          
          <div class="col-md-6 col-9">
            <p class="header-name"><a href="index.php"><i class="fas fa-pepper-hot"></i>TastyGrocery</a></p>
          </div>

          <div class="col-md-6 col-3">

            <!-- Aisle menu on desktop view -->
            <div class="aisle-menu desktop-only">
                <div class="aisle-box">
                  <span><i class="fas fa-search"></i>Aisles</span>
                </div>
              <ul>
              <li>
                  <a href="aisles/aisle_page.php?aisle=produce_food"><i class="fas fa-pepper-hot"></i>Produce</a>
              </li>
              <li>
                  <a href="aisles/aisle_page.php?aisle=meat_food"><i class="fas fa-drumstick-bite"></i>Meat</a>
              </li>
              <li>
                  <a href="aisles/aisle_page.php?aisle=grain_food"><i class="fas fa-bread-slice"></i>Grain</a>
              </li>
              <li>
                  <a href="aisles/aisle_page.php?aisle=dairy_food"><i class="fas fa-cheese"></i>Dairy</a>
              </li>
              <li>
                  <a href="aisles/aisle_page.php?aisle=candy_food"><i class="fas fa-candy-cane"></i>Candy</a>
              </li>
              </ul>
            </div>
            
            <!-- Aisle and cart menu on mobile view -->
            <div class="dropdown show">
              <a class="btn btn-secondary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Menu
              </a>
            
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="shoppingCart.php"><i class="fas fa-shopping-cart"></i>Cart</a>
                <a class="dropdown-item" href="aisles/aisle_page.php?aisle=produce_food"><i class="fas fa-pepper-hot"></i>Produce</a>
                <a class="dropdown-item" href="aisles/aisle_page.php?aisle=meat_food"><i class="fas fa-drumstick-bite"></i>Meat</a>
                <a class="dropdown-item" href="aisles/aisle_page.php?aisle=grain_food"><i class="fas fa-bread-slice"></i>Grain</a>
                <a class="dropdown-item" href="aisles/aisle_page.php?aisle=dairy_food"><i class="fas fa-cheese"></i>Dairy</a>
                <a class="dropdown-item" href="aisles/aisle_page.php?aisle=candy_food"><i class="fas fa-candy-cane"></i>Candy</a>
              </div>
            </div>

            <!-- Cart check on mobile view -->
            <div class="cart-check desktop-only">
                <a class="custom-button" href="shoppingCart.php"><i class="fas fa-shopping-cart"></i> Cart</a>
            </div>
          </div>

        </div>
      </div>
    </header>

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
            
            <a href="aisles/item.php?aisle=meat_food&food=chicken">
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

              <div class="col-lg-4 col-sm-6">
                <div class="advertisement-holder">
                  <div class="img-holder">
                    <a href="aisles/item.php?aisle=produce_food&food=apples"><img src="img/produce/apple.jpg" alt="apples"></a>
                  </div>
                  <div class="info-holder">
                    <a href="aisles/item.php?aisle=produce_food&food=apples"><p class="food-name">Picked Apples</p></a>
                    <p class="food-details">1.0 kg</p>
                    <p class="food-price">4.99$</p>
                    <button class="custom-button"><i class="fas fa-shopping-cart"></i>Add to Cart</button>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-sm-6">
                <div class="advertisement-holder">
                  <div class="img-holder">
                    <a href="aisles/item.php?aisle=produce_food&food=bananas"><img src="img/produce/banana.jpg" alt="bananas"></a>
                  </div>
                  <div class="info-holder">
                    <a href="aisles/item.php?aisle=produce_food&food=bananas"><p class="food-name">Ripe Bananas</p></a>
                    <p class="food-details">1.0 kg</p>
                    <p class="food-price">2.99$</p>
                    <button class="custom-button"><i class="fas fa-shopping-cart"></i>Add to Cart</button>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-sm-12">
                <div class="advertisement-holder">
                  <div class="img-holder">
                    <a href="aisles/item.php?aisle=produce_food&food=peppers"><img src="img/produce/pepper.jpg" alt="peppers"></a>
                  </div>
                  <div class="info-holder">
                    <a href="aisles/item.php?aisle=produce_food&food=peppers"><p class="food-name">Hot Peppers</p></a>
                    <p class="food-details">1.0 kg</p>
                    <p class="food-price">6.99$</p>
                    <button class="custom-button"><i class="fas fa-shopping-cart"></i>Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="center-text">
              <a href="aisles/Produce.html" class="custom-button"><i class="fas fa-pepper-hot"></i>See all produce</a>
            </div>

            <hr>

            <p class="subtitle-secondary">Meat Aisle</p>
            <div class="row aisle">

              <div class="col-lg-4 col-sm-6">
                <div class="advertisement-holder">
                  <div class="img-holder">
                    <a href="aisles/item.php?aisle=meat_food&food=chicken"><img src="img/meat/chicken.jpg" alt="chicken"></a>
                  </div>
                  <div class="info-holder">
                    <a href="aisles/item.php?aisle=meat_food&food=chicken"><p class="food-name">Fresh Chicken</p></a>
                    <p class="food-details">1.5 kg</p>
                    <p class="food-price">7.99$</p>
                    <button class="custom-button"><i class="fas fa-shopping-cart"></i>Add to Cart</button>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-sm-6">
                <div class="advertisement-holder">
                  <div class="img-holder">
                    <a href="aisles/item.php?aisle=meat_food&food=beef"><img src="img/meat/beef.jpg" alt="beef"></a>
                  </div>
                  <div class="info-holder">
                    <a href="aisles/item.php?aisle=meat_food&food=beef"><p class="food-name">Sliced Beef</p></a>
                    <p class="food-details">1.2 kg</p>
                    <p class="food-price">10.99$</p>
                    <button class="custom-button"><i class="fas fa-shopping-cart"></i>Add to Cart</button>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-sm-12">
                <div class="advertisement-holder">
                  <div class="img-holder">
                    <a href="aisles/aisles/item.php?aisle=meat_food&food=fish"><img src="img/meat/fish.jpg" alt="fish"></a>
                  </div>
                  <div class="info-holder">
                    <a href="aisles/aisles/item.php?aisle=meat_food&food=fish"><p class="food-name">Fish Fillet</p></a>
                    <p class="food-details">0.8 kg</p>
                    <p class="food-price">8.99$</p>
                    <button class="custom-button"><i class="fas fa-shopping-cart"></i>Add to Cart</button>
                  </div>
                </div>
              </div>

            </div>

            <div class="center-text">
              <a href="aisles/Meat.html" class="custom-button"><i class="fas fa-drumstick-bite"></i>See all meat</a>
            </div>

            <hr>

            <p class="subtitle-secondary">Grain Aisle</p>
            <div class="row aisle">

              <div class="col-lg-4 col-sm-6">
                <div class="advertisement-holder">
                  <div class="img-holder">
                    <a href="aisles/item.php?aisle=grain_food&food=wheatbread"><img src="img/grain/bread.jpg" alt="bread"></a>
                  </div>
                  <div class="info-holder">
                    <a href="aisles/item.php?aisle=grain_food&food=wheatbread"><p class="food-name">Wheat Bread</p></a>
                    <p class="food-details">0.5 kg</p>
                    <p class="food-price">2.99$</p>
                    <button class="custom-button"><i class="fas fa-shopping-cart"></i>Add to Cart</button>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-sm-6">
                <div class="advertisement-holder">
                  <div class="img-holder">
                    <a href="aisles/item.php?aisle=grain_food&food=baguette"><img src="img/grain/baguette.jpg" alt="baguette"></a>
                  </div>
                  <div class="info-holder">
                    <a href="aisles/item.php?aisle=grain_food&food=baguette"><p class="food-name">Baked Baguette</p></a>
                    <p class="food-details">0.4 kg</p>
                    <p class="food-price">3.99$</p>
                    <button class="custom-button"><i class="fas fa-shopping-cart"></i>Add to Cart</button>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-sm-12">
                <div class="advertisement-holder">
                  <div class="img-holder">
                    <a href="aisles/item.php?aisle=grain_food&food=croissant"><img src="img/grain/croissant.jpg" alt="croissants"></a>
                  </div>
                  <div class="info-holder">
                    <a href="aisles/item.php?aisle=grain_food&food=croissant"><p class="food-name">Fluffy Croissants</p></a>
                    <p class="food-details">0.6 kg</p>
                    <p class="food-price">4.99$</p>
                    <button class="custom-button"><i class="fas fa-shopping-cart"></i>Add to Cart</button>
                  </div>
                </div>
              </div>

            </div>

            <div class="center-text">
              <a href="aisles/Grain.html" class="custom-button"><i class="fas fa-bread-slice"></i>See all grains</a>
            </div>

            <hr>

            <p class="subtitle-secondary">Dairy Aisle</p>
            <div class="row aisle">

              <div class="col-lg-4 col-sm-6">
                <div class="advertisement-holder">
                  <div class="img-holder">
                    <a href="aisles/item.php?aisle=dairy_food&food=brie"><img src="img/dairy/Optimized-BrieCheese.jpg" alt="brie cheese"></a>
                  </div>
                  <div class="info-holder">
                    <a href="aisles/item.php?aisle=dairy_food&food=brie"><p class="food-name">Brie Cheese</p></a>
                    <p class="food-details">0.2 kg</p>
                    <p class="food-price">3.99$</p>
                    <button class="custom-button"><i class="fas fa-shopping-cart"></i>Add to Cart</button>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-sm-6">
                <div class="advertisement-holder">
                  <div class="img-holder">
                    <a href="aisles/item.php?aisle=dairy_food&food=icecream"><img src="img/dairy/Optimized-IceCream.jpg" alt="ice cream"></a>
                  </div>
                  <div class="info-holder">
                    <a href="aisles/item.php?aisle=dairy_food&food=icecream"><p class="food-name">Ice Cream</p></a>
                    <p class="food-details">1.0 kg</p>
                    <p class="food-price">2.99$</p>
                    <button class="custom-button"><i class="fas fa-shopping-cart"></i>Add to Cart</button>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-sm-12">
                <div class="advertisement-holder">
                  <div class="img-holder">
                    <a href="aisles/item.php?aisle=dairy_food&food=milk"><img src="img/dairy/Optimized-Milk.jpg" alt="Milk"></a>
                  </div>
                  <div class="info-holder">
                    <a href="aisles/item.php?aisle=dairy_food&food=milk"><p class="food-name">Jug of Milk</p></a>
                    <p class="food-details">3.0 kg</p>
                    <p class="food-price">4.99$</p>
                    <button class="custom-button"><i class="fas fa-shopping-cart"></i>Add to Cart</button>
                  </div>
                </div>
              </div>

            </div>

            <div class="center-text">
              <a href="aisles/Dairy.html" class="custom-button"><i class="fas fa-cheese"></i></i>See all dairy</a>
            </div>

            <hr>

            <p class="subtitle-secondary">Candy Aisle</p>
            <div class="row aisle">

              <div class="col-lg-4 col-sm-6">
                <div class="advertisement-holder">
                  <div class="img-holder">
                    <a href="aisles/item.php?aisle=candy_food&food=skittles"><img src="img/Candy/Skittles.jpg" alt="Skittles"></a>
                  </div>
                  <div class="info-holder">
                    <a href="aisles/item.php?aisle=candy_food&food=skittles"><p class="food-name">Skittles</p></a>
                    <p class="food-details">1.0 kg</p>
                    <p class="food-price">9.99$</p>
                    <button class="custom-button"><i class="fas fa-shopping-cart"></i>Add to Cart</button>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-sm-6">
                <div class="advertisement-holder">
                  <div class="img-holder">
                    <a href="aisles/item.php?aisle=candy_food&food=hardcandy"><img src="img/Candy/assortedHardCandy.jpeg" alt="Hard Candies"></a>
                  </div>
                  <div class="info-holder">
                    <a href="aisles/item.php?aisle=candy_food&food=hardcandy"><p class="food-name">Assorted Hard Candy</p></a>
                    <p class="food-details">1.0 kg</p>
                    <p class="food-price">8.99$</p>
                    <button class="custom-button"><i class="fas fa-shopping-cart"></i>Add to Cart</button>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-sm-12">
                <div class="advertisement-holder">
                  <div class="img-holder">
                    <a href="aisles/item.php?aisle=candy_food&food=gummybears"><img src="img/Candy/Gummybears.jpeg" alt="Gummy Bears"></a>
                  </div>
                  <div class="info-holder">
                    <a href="aisles/item.php?aisle=candy_food&food=gummybears"><p class="food-name">Gummy Bears</p></a>
                    <p class="food-details">1.0 kg</p>
                    <p class="food-price">9.99$</p>
                    <button class="custom-button"><i class="fas fa-shopping-cart"></i>Add to Cart</button>
                  </div>
                </div>
              </div>

            </div>

            <div class="center-text">
              <a href="aisles/Candy.html" class="custom-button"><i class="fas fa-candy-cane"></i>See all candy</a>
            </div>

            <hr>

            <a href="aisles/item.php?aisle=grain_food&food=baguette">
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

        <footer>
          <div class="row page-width">

            <div class="col-lg-3 col-md-12">
              <p class="footer-name"><a href="index.php">TastyGrocery.com</a></p>
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