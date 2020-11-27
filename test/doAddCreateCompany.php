<?php
	if(isset($_GET["company_name"])){
		include "connection.php"

		$companyName = $_GET["company_name"];

			$connection->query("INSERT INTO company VALUES(null,'".$company_name."')");

			$message = "Succefully Added";
	}
?>

