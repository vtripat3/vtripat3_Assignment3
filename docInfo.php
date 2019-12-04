<!DOCTYPE=html>
<html>
<head>
	<title> Doctors' INFO </title>
	<link rel="stylesheet" href="Hospital.css">
</head>
<body>
<h1> Selected Doctors' info</h1>
<?php
	include "connection.php";
?>
<?php
	$chosenDoc=$_POST["Doctorss"];
	$query = 'SELECT Doctors.*, Hospital.hospitalName, Hospital.city  FROM Doctors INNER JOIN Hospital ON Doctors.hospitalCode = Hospital.hospitalCode WHERE Doctors.licenceNumber="' . $chosenDoc .'";';
	$result=mysqli_query($connection, $query);
	if (!$result){
		die("queryD failed");
	}
	while ($row=mysqli_fetch_assoc($result)){
		echo "Name: " . $row["firstName"] . " " . $row["lastName"] ."<br>Specialty: " . $row["specialty"] . "<br>License Number: ". $row["licenceNumber"] . "<br>License Acquisition Date: " .$row["dateLicensed"] . "<br> Place of Employment: " .  $row["hospitalName"] . "<br> City: ".  $row["city"];
	}

	mysqli_free_result($result);
?>
</ol>
<?php
	mysqli_close($connection);
?>
</body>
</html>