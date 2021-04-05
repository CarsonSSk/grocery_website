<?php include_once 'includes/session.php'; ?>
<?php
  //Runs when user clicks the login button
  $error = false;

  if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']); //Encrypt password before checking it

    if(file_exists('database/users/' . $email . '.xml')) {
      $xml = new SimpleXMLElement('database/users/' . $email . '.xml', 0, true);
      if($password == $xml->password) {
        session_start();
        $_SESSION['email'] = $email;
        header('Location: index.php');
        die;
      }
    }
    $error = true;
  }
?>

<!doctype html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

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

  <title> Login | TastyGrocery </title>
  <meta name="description" content="Login page of TastyGrocery.com">
  <link rel="shortcut icon" type="image/png" href="img/favicon-32x32.png">

</head>

<body>

  <?php include_once 'templates/navbar.php'; ?>
  <?php include_once 'templates/header.php'; ?>

  <br />

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

        <div class = "login-signup">

          <p class="header-name">Login</p> <br />

          <?php
              if($isUser) {
                echo '<h3>You are now logged in!</h3>';
              }
              else
                echo '<h3>You are not currently logged in</h3>'
          ?>

          <form class="login" action="" method="post">

            <label for="email">Email</label> <br />
            <input class="login-boxes" type="text" id="email" name="email" placeholder="Enter your email"> <br /> <br />

            <label for="password">Password</label> <br />
            <input class="login-boxes" type="password" id="password" name="password" placeholder="Enter your password"> <br /> <br />

            <?php
              if($error) {
                echo '<p>Invalid login. Try again.</p>';
              }
            ?>

            <input class="login-buttons" type="submit" name="login" value="Login">

            <p>Don't have an account? <a href="signup.php">Sign up here</a> </p>

          </form>
        </div>  
      </div>

    </div>

    <?php include_once 'templates/footer.php'; ?>
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

</body>

</html>