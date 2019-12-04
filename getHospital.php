<!DOCTYPE=html>
<html>
<head>
	<title> Hospital Info </title>
	<link rel="stylesheet" href="Hospital.css">
</head>

<body>
<h1> Hospital Info:</h1>
<?php
	include "connection.php";
	$query = 'SELECT Hospital.hospitalName, Hospital.dateStarted, Doctors.firstName, Doctors.lastName FROM Hospital INNER JOIN Doctors ON Hospital.licenceNumber=Doctors.licenceNumber ORDER BY hospitalName;';
	$result=mysqli_query($connection, $query);
	if (!$result){
		die("queryhos failed");
	}
	while ($row=mysqli_fetch_assoc($result)){
		echo "<li> Hospital Name: ".$row["hospitalName"]."<br>Head Doctor: " . $row["firstName"] . " " . $row["lastName"] ."<br>Head Doctor Start Date: " . $row["dateStarted"];
	}
	mysqli_free_result($result);
?>
</body>
</html>
