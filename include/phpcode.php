<?php

include('html.php');

if(isset($_GET['submit'])) {
	echo '<pre>';
	print_r($_GET);
}

?>