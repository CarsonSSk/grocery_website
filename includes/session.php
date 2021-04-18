<?php
  //File begins session and checks if user is logged in. To be called in any necessary pages
  session_start();
  $isUser = false;
  $isAdmin = false;
  if(isset($_SESSION['email'])) {
    if (file_exists($_SERVER['DOCUMENT_ROOT'].'/Grocery/grocery_website/database/users/' . $_SESSION['email'] . '.xml')) {
      $isUser = true;
      $xml = simplexml_load_file($_SERVER['DOCUMENT_ROOT'].'/Grocery/grocery_website/database/users/' . $_SESSION['email'] . '.xml') or header('Location: index.php');
      $isAdmin = $xml->admin;
    }
  }
?>