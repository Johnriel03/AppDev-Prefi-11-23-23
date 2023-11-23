<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "signup";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Error. Try Again.");
}

?>