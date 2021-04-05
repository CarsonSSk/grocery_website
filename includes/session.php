<?php
  //File begins session and checks if user is logged in. To be called in any necessary pages
  session_start();
  $isUser = false;
  $isAdmin = false;
  if(isset($_SESSION['email'])) {
    if (file_exists('database/users/' . $_SESSION['email'] . '.xml')) {
      $isUser = true;
      $xml = simplexml_load_file('database/users/' . $_SESSION['email'] . '.xml') or header('Location: index.php');
      $isAdmin = $xml->admin;
    }
  }
?>