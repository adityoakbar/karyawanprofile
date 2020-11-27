<?php
	session_start();
	if(isset($_GET["departement_name"])){
		include "connection.php"

	
		$departementName = $_GET["departement_name"];

			$connection->query("INSERT INTO departement VALUES(null,'".$departement_name."')");
			$message = "Succefully Added";
		}
		
	 }

	 header("location:insert.php");
	 exit();
?>