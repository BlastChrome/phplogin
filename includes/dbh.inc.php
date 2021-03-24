<?php
// database starting vars 
$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "phpproject01";

// connection to the db with errror handler
$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
