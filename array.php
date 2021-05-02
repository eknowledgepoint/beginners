<?php  
echo 'Indexed array example<br/>';
$a = array('a','b','c','d');
print_r($a);


echo '<br/><br/>Associative  array example<br/>';
$b = array('a'=>'ram','b'=>'shyam','test'=>'c');
print_r($b);


echo '<br/><br/>Multidymensional  array example<br/><pre>';
$test = array (
  array("a",22,18),
  array("b",15,13),
  array("c",5,2),
  array("d",17,15)
);

print_r($test);

?>  