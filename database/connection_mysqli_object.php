<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "begineers";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (name, age, subjects, marks,create_date)
VALUES ('Test', 25, 'Hindi',45,'".date('Y-m-d')."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>