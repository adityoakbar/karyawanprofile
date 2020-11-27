<?php
	$connection = new mysqli ("localhost","root","","ujicoba")
	if(!$connection){
		echo "Connection error!";
		exit();
	}
?>