<!DOCTYPE=html>
<html>
<head>
	<title> Doctor Added </title>
	<link rel="stylesheet" href="Hospital.css">
</head>
<body>
<?php
	include "connection.php";

	$ftName=$_POST["frName"];
	$ltName=$_POST["laName"];
	$licNum=$_POST["LicenseNum"];
	$licDate=$_POST["LicenseDat"];
	$Special=$_POST["Specialty"];
	$HospitalN=$_POST["HospitalNumb"];

	$query = 'select licenceNumber from Doctors;';
	$result=mysqli_query($connection, $query);
	if (!$result){
		die("querySelection failed");
	}
	while ($row=mysqli_fetch_assoc($result)){
		if ($row["licenceNumber"]=="$licNum"){
			die("License Already in Database");
		}
	}	
	$queryb = 'INSERT INTO Doctors (licenceNumber, firstName, lastName, specialty, licenceDate, hospitalCode) VALUES("'.$LicNum.'","'.$ftName.'","'.$ltName.'","'.$Special.'","'.$licDate.'","'.$HospitalN.'");';
	$resultb=mysqli_query($connection, $queryb);
	if (!$resultb){
		die("Could not insert into database");
	}
	mysqli_free_result($result);
	mysqli_close($connection);
?>
<h1> Doctor added! </h1>
</body>
</html>