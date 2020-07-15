<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DATABASE', 'todolist');

$conn = mysqli_connect("localhost", "root", "", "todolist");

if(!$conn) {
    die("CONNECTION FAILED".mysqli_error($conn));
}