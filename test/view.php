<!DOCTYPE html>
<html>
<head>
	<title> CRUD - View</title>
</head>
<body>
	<h1> View </h1>
	<?php
		include 'connection.php';
		$getCompany = $connection->query("SELECT * FROM company");
		while($fecthCompany = $getCompany->fecth_assoc)

		$getDepartement= $connection->query("SELECT * FROM departement");
		while($fecthDepartement = $getdepartement->fecth_assoc)

		$getEmployee = $connection->query("SELECT * FROM employee");
		while($fecthEmployee = $getEmployee->fecth_assoc)

	?>
		<tr>
			<td>
				<strong><?=$fecthCompany["company_name"]?></strong><br>
				<strong><?=$fecthDepartement["departement_name"]?></strong><br>
				<strong><?=$fecthEmployee["employee_name"]?></strong><br>
				<strong><?=$fecthEmployee["employee_title"]?></strong><br>
				<strong><?=$fecthEmployee["employee_salary"]?></strong>

			</td>
		</tr>
</body>
</html>