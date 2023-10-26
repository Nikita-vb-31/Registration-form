<?php
$hostname = "localhost";
$username = "root";
$password = "";
$DATABASE='signupforms';

// Create connection
$con = mysqli_connect($hostname, $username, $password,$DATABASE);

// Check connection
if (!$con) {
    die(mysqli_error($con));
  }
?>