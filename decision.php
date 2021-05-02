<?php  

	/*if */
    $t = 10;

	if ($t < "20") {
	  echo "Have a good day!";
	}
	
	
	/*if else*/
	
	echo 'Example of If else <br/>';
	$b =10;
	
	if($b==10) {
		echo 'Matched';
	} else {
		echo 'Not Matched';
	}
	
	
	
	/*switch*/
	echo 'switch example<br/>';
	$favcolor = "red";
	switch ($favcolor) {
	  case "red":
		echo "Print Red";
		break;
	  case "blue":
		echo "Print Blue";
		break;
	  case "green":
		echo "Print Green";
		break;
	  default:
		echo "No Match";
	}
?>  