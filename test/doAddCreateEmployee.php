<?php
	if(isset($_GET["employee_name"])){
		include "connection.php"

	
		$employeeName = $_GET["employee_name"];
		$employeeTitle = $_GET["employee_title"];
		$employeeSalary = $_GET["employee_salary"];
		
		$connection->query("INSERT INTO employee VALUES(null,'".$employee_name."','".$employee_title."','".$employee_salary."')");

		$message = "Succefully Added";
	
	}
?>