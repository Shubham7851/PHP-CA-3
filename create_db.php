<?php
$host = "localhost";
$user = "root";
$password = "";
$conn = new mysqli($host, $user, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$dbname = "social_analytics";
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully or already exists.<br>";
} else {
    die("Error creating database: " . $conn->error);
}
$conn->select_db($dbname);
$table = "analytics_data";
$sql = "CREATE TABLE IF NOT EXISTS $table (
    id INT AUTO_INCREMENT PRIMARY KEY,
    platform VARCHAR(50),
    metric VARCHAR(50),
    value INT,
    timestamp DATETIME DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table '$table' created successfully or already exists.<br>";
} else {
    die("Error creating table: " . $conn->error);
}
$conn->close();
?>
