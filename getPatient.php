<!DOCTYPE=html>
<html>
<head>
	<title> See Patients </title>
	<link rel="stylesheet" href="Hospital.css">
</head>
<body>
<?php
	include "connection.php";
?>
<?php
	$ohipNum=$_POST["OHIPnum"];
	$query = 'SELECT * FROM Patients WHERE ohipId="'.$ohipNum.'";';
	$result=mysqli_query($connection, $query);
	if (!$result){
		die("OHIP number does not exist.");
	}
	$queryb = 'SELECT Patients.firstName as ftName, Patients.lastName as ltName, Doctors.firstName, Doctors.lastName FROM Treats INNER JOIN Doctors ON docId=licenceNumber INNER JOIN Patients ON ohipId=patId WHERE ohipId="'.$ohipNum.'";';
	$resultb=mysqli_query($connection, $queryb);
	if (!$resultb){
		die("queryPat failed");
	}
	$i="1";
	while ($row=mysqli_fetch_assoc($resultb)){
			echo "<br>Patient's Name: " . $row["ftName"] . " " . $row["ltName"] ."<br>Overseen by Doctor(s): " . $row["firstName"] . " " . $row["lastName"];
			$i="2";
		
}
?>
</body>
</html>
