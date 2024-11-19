<?php
$servername = "mysql-service"; // This refers to the MySQL container
$username = "root";
$password = "rootpassword";
$dbname = "testdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    echo "Database not connected: " . $conn->connect_error;
} else {
    echo "Database connected successfully.\n";
}

echo "Hello World\n"; // Fixed missing semicolon
echo "Kubernetes\n";
echo "demo\n";
echo "test text\n";
// Close the connection
$conn->close();
?>
