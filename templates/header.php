<header class="sticky-top">
      <div class="page-width">
        <div class="row">
          
          <div class="col-md-6 col-9">
            <p class="header-name"><a href="/index.php"><i class="fas fa-pepper-hot"></i>TastyGrocery</a></p>
          </div>

          <div class="col-md-6 col-3">

            <!-- Aisle menu on desktop view -->
            <div class="aisle-menu desktop-only">
                <div class="aisle-box">
                  <span><i class="fas fa-search"></i>Aisles</span>
                </div>
              <ul>
              <li>
                  <a href="/aisles/aisle_page.php?aisle=produce_food"><i class="fas fa-pepper-hot"></i>Produce</a>
              </li>
              <li>
                  <a href="/aisles/aisle_page.php?aisle=meat_food"><i class="fas fa-drumstick-bite"></i>Meat</a>
              </li>
              <li>
                  <a href="/aisles/aisle_page.php?aisle=grain_food"><i class="fas fa-bread-slice"></i>Grain</a>
              </li>
              <li>
                  <a href="/aisles/aisle_page.php?aisle=dairy_food"><i class="fas fa-cheese"></i>Dairy</a>
              </li>
              <li>
                  <a href="/aisles/aisle_page.php?aisle=candy_food"><i class="fas fa-candy-cane"></i>Candy</a>
              </li>
              </ul>
            </div>
            
            <!-- Aisle and cart menu on mobile view -->
            <div class="dropdown show">
              <a class="btn btn-secondary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Menu
              </a>
            
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <?php
                  if($isUser) {
                    echo '<a class="dropdown-item" href="/Grocery/grocery_website/shoppingCart.php"><i class="fas fa-shopping-cart"></i>Cart</a>';
                  }
                ?>
                <a class="dropdown-item" href="/aisles/aisle_page.php?aisle=produce_food"><i class="fas fa-pepper-hot"></i>Produce</a>
                <a class="dropdown-item" href="/aisles/aisle_page.php?aisle=meat_food"><i class="fas fa-drumstick-bite"></i>Meat</a>
                <a class="dropdown-item" href="/aisles/aisle_page.php?aisle=grain_food"><i class="fas fa-bread-slice"></i>Grain</a>
                <a class="dropdown-item" href="/aisles/aisle_page.php?aisle=dairy_food"><i class="fas fa-cheese"></i>Dairy</a>
                <a class="dropdown-item" href="/aisles/aisle_page.php?aisle=candy_food"><i class="fas fa-candy-cane"></i>Candy</a>
              </div>
            </div>

            <!-- Cart check on desktop view -->
            <?php
              if($isUser) {
                echo '<div class="cart-check desktop-only">';
                    echo '<a class="custom-button" href="/shoppingCart.php"><i class="fas fa-shopping-cart"></i> Cart</a>';
                echo '</div>';
              }
            ?>
          </div>

        </div>
      </div>
    </header>