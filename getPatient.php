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
	$ohipNum=$_POST["OHIP"];
	$query = 'SELECT * FROM Patients WHERE ohipId="'.$ohipNum.'";';
	$result=mysqli_query($connection, $query);
	if (!$result){
		die("OHIP number does not exist.");
	}
	$queryb = 'SELECT Patients.firstName as ftName, Patients.lastName as ltName, Doctors.firstName, doctors.lastName FROM Treats INNER JOIN Doctors ON docId=licenceNumber INNER JOIN Patients ON ohipId=patientId WHERE ohipId="'.$ohip.'";';
	$resultb=mysqli_query($connection, $queryb);
	if (!$resultb){
		die("queryPat failed");
	}
	$i="1";
	while ($row=mysqli_fetch_assoc($resultb)){
		if($i=="1"){
			echo "Patient's Name: " . $row["ftName"] . " " . $row["ltName"] ."<br>is treated by " . $row["firstName"] . " " . $row["lastName"];
			$i="2";
		}	
		else{
			echo " and Doctor " . $row["firstName"] . " " . $row["lastName"]."<br>";
		}
}
?>
</body>
</html>
