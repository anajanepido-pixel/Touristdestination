<?php
$servername = "localhost";
$username = "root";
$password = "";
$database   = "admin_db"; // change to your actual DB

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
