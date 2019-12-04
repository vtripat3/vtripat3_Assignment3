<!DOCTYPE=html>
<html>
<head>
	<title> Doctor-Patient Designation </title>
	<link rel="stylesheet" href="Hospital.css">
</head>
<body>
<?php
	include "connection.php";

	$docId=$_POST["docId"];
	$patId=$_POST["patId"];
	$query = 'select licenceNumber from Doctors;';
	$result=mysqli_query($connection, $query);
	if (!$result){
		die("querySelectpat failed");
	}
	while ($row=mysqli_fetch_assoc($result)){
		if ($row["licenceNumber"]=="$licNum"){
			die("License Number Already Exists");
		}
	}	
	$queryb = 'INSERT INTO `Treats` (`docId`, `patId`) VALUES("'.$docId.'","'.$patId.'");';
	$resultb=mysqli_query($connection, $queryb);
	if (!$resultb){
		die("queryInserttreat failed");
	}
	mysqli_free_result($result);
	mysqli_close($connection);
?>
<h1> Doctor has been assigned to patient </h1>
</body>
</html>