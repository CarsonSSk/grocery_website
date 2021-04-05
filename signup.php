<?php include_once 'includes/session.php'; ?>
<?php
    $errors = array();
    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        $c_password = $_POST['c_password'];
        if(file_exists('database/users/' . $email . '.xml')) {
            $errors[] = 'Email already exists';
        }
        if($username == '' || $email == '' || $address == '' || $password == '' || $c_password == '') {
            $errors[] = 'Please fill all fields';
        }
        if($password != $c_password) {
            $errors[] = 'Passwords do not match';
        }
        if(count($errors) == 0) {
            $xml = new SimpleXMLElement('<user></user>');
            $xml->addChild('password', md5($password));
            $xml->addChild('email', $email);
            $xml->addChild('name', $username);
            $xml->addChild('address', $address);
            $xml->addChild('admin', 'false');
            $xml->asXML('database/users/' . $email . '.xml');
            header('Location: login.php');
            die("Issue creating account. Our servers may be experiencing issues. Please try again later.");
        }
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

    <title> Sign Up | TastyGrocery </title>
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

                <div class="login-signup">

                    <p class="header-name">Sign Up</p> <br />

                    <form class="signup" action="" method="post">

                        <?php
                            if(count($errors) > 0) {
                                foreach($errors as $e) {
                                    echo '<p>' . $e . '</p>';
                                }
                            }
                        ?>

                        <label for="name">Full Name</label> <br />
                        <input class="login-boxes" type="text" id="name" name="username" placeholder="Enter your name"> <br /> <br />

                        <label for="address">Address</label> <br />
                        <input class="login-boxes" type="text" id="address" name="address" placeholder="Enter your address"> <br /> <br />

                        <label for="email">Email</label> <br />
                        <input class="login-boxes" type="text" id="email" name="email" placeholder="Enter your email"> <br /> <br />

                        <label for="password">Password</label> <br />
                        <input class="login-boxes" type="password" id="password" name="password" placeholder="Enter your password"> <br /> <br />

                        <label for="password">Confirm Password</label> <br />
                        <input class="login-boxes" type="password" id="password" name="c_password" placeholder="Enter your password"> <br /> <br />

                        <input class="login-buttons" type="submit" name="login" value="Login">
                        <input class="login-buttons" type="reset" name="reset" value="Reset"> <br /> <br />

                        <p>Already have an account? <a href="login.php">Login here</a> </p>

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