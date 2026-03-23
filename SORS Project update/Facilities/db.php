<?php
$host = "localhost";
$username = "root"; // Default for XAMPP
$password = "";     // Default for XAMPP
$dbname = "am_university";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>