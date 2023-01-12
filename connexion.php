<?php
  //connexion à la base de données



$servername = "tp-partiel";
$username = "your_username";
$password = "your_password";
$dbname = "db-partiel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>