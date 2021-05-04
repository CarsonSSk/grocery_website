<div class="header-userpage">
      <div class="row page-width">
        <div class="col-6">
          <?php
            if($isUser && $isAdmin == "true")
              echo '<a href="/productlist.php"><i class="fas fa-door-open"></i>Backstore</a>';
          ?>
        </div>
        <div class="col-6 right-text">
          <?php
            if($isUser == false)
              echo '<a href="/login.php"><i class="fas fa-user-alt"></i>My Account</a>';
            else
              echo '<a href="/logout.php"><i class="fas fa-user-alt"></i>Logout</a>';
          ?>
        </div>
      </div>
    </div>