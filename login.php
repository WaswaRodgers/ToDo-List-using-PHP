<?php
session_start();
include "includes/database/connection.php";
include "includes/process/login.process.php";

  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="flash-message">
        <h4>
            <?php
                if(isset($_SESSION['logged-out'])) {
                    echo $_SESSION['logged-out'];
                    unset($_SESSION['logged-out']);
                }
            ?>
        </h4>
    </div>
        
    <div class="header">
        <h3>Log In</h3>
    </div>

    <form class="login-form" action="login.php" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" placeholder="Enter Username">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Enter Password">
        </div>
        <button type="submit" name="login-user">Log in</button>
        <div>
            Don't you have an account? <a href="register.php">Register Here</a> 
        </div>
    </form>
</body>
</html>