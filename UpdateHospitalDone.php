<!DOCTYPE=html>
<html>
<head>
	<title> Hospital Updated</title>
	<link rel="stylesheet" href="Hospital.css">
</head>
<body>
<?php
	$hospitalCode = $_POST["HospitalN"];
	$hospitalName = $_POST["newHospitalName"];
	if($hospitalCode=="" || $hospitalName==""){
		die("Invalid Entry");
	}
	include "connection.php";
	$query = 'UPDATE Hospital SET hospitalName="'.$hospitalName.'" WHERE hospitalCode="'.$hospitalCode.'";';
	$result=mysqli_query($connection, $query);
	echo "Hospital name Updated";
	mysqli_close($connection);
?>	
</body>
</html>
