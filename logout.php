<?php
    session_start();
    $_SESSION['logged-out'] = "You are now logged out.";
  
    unset($_SESSION['username']);
    session_destroy();

    header("Location: login.php");

?>