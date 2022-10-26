<?php
$servername = "localhost";
$username = "sec_user";
$password = "greenChair153";
$db = "ctg";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>
