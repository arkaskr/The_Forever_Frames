<?php
// dbconnection.php
$servername = "localhost";
$username   = "root";       // your DB username
$password   = "Arka.SQL_24";           // your DB password
$dbname     = "The_Forever_Frames"; // change to your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>