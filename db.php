<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "web_database";

// Create connection untuk mendapatkan status koneksi, berikut merupakan sebuah object
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?> 