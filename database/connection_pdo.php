<?php
$servername = "localhost";
$username 	= "root";
$password 	= "";
$dbname 	= 'begineers';
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO users (name, age, subjects, marks,create_date)
VALUES ('Test456', 25, 'Hindi',45,'".date('Y-m-d')."')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
?>