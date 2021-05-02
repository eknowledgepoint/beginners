<?php  
echo 'while Loop Example <br/>';
$x = 1;
while($x <= 10) {
  echo "2 table : $x*2 <br>";
  $x++;
}


echo '<br/><br/>do while Loop Example <br/>';
$x = 1;
do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 1);


echo '<br/><br/>for Loop Example <br/>';
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}

echo '<br/><br/>foreach Loop Example <br/>';
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
?>  