<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DATABASE', 'todolist');

$conn = mysqli_connect(HOST, USER, PASSWORD, DATABASE) or die("Could not connect to database <font color='red'>".mysqli_connect_error()."</font>");

