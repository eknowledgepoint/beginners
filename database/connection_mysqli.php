<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname   = "begineers";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO users (name, age, subjects, marks,create_date)
VALUES ('Test123', 25, 'Hindi',40,'".date('Y-m-d')."')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>