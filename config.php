<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "social_analytics";
$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>