<?php
$x = 5; // global scope

function myTest() {
	$y =10; // local scope
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
  echo "<p>local is: $y</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>