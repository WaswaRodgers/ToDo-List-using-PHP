<?php
    session_start();
    $_SESSION['logged-out'] = "You are now logged out.";
    // session_destroy();
    unset($_SESSION['username']);

    header("Location: login.php");

?>