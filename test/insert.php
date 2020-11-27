<!DOCTYPE html>
<html>
<head>
	<title> CRUD - Create</title>
</head>
<body>
	<h1> Company </h1>
		<form method="get" action="doAddCreateCompany.php" >
			<table>
				<tr>
					<td> Name </td>
					<td>:</td>
					<td><input type="text" name="company_name"></td>
				</tr>
			</table>
		</form>
		<h1> Departement </h1>
		<form  method="get" action="doAddCreateDepartement.php">
			<table>
				<tr>
					<td> Name </td>
					<td>:</td>
					<td><input type="text" name="departemet_name"></td>
				</tr>
			</table>
		</form>
			<h1> Employee </h1>
		<form method="get" action="doAddCreateEmployee.php">
			<table>
				<tr>
					<td> Employee Name </td>
					<td>:</td>
					<td><input type="text" name="employee_name"></td>
				</tr>
			</table>
			<table>
				<tr>
					<td> Title </td>
					<td>:</td>
					<td><input type="text" name="employee_title"></td>
				</tr>
			</table>
			<table>
				<tr>
					<td> Salary </td>
					<td>:</td>
					<td><input type="number" name="emloyee_salary"></td>
				</tr>
				
			</table>
		</form>
		<tr>
					<td></td>
					<td></td>
					<td><button> Save </button></td>
				</tr>
</body>
</html>