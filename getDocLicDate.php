<!DOCTYPE=html>
<html>
<head>
	<title> Doctors' License </title>
	<link rel="stylesheet" href="Hospital.css">
</head>
<body>
<?php
	include "connection.php";
?>
<h1> Here are the Doctors Licensed prior to your selected date:</h1>
<ol>
<?php
	$LDate = $_POST["LicDate"];
	$query = 'SELECT * FROM Doctors WHERE dateLicensed < "' . $LDate . '";';
	$result=mysqli_query($connection, $query);
	if (!$result){
		die("queryLD in Doctors failed");
	}
	while ($row=mysqli_fetch_assoc($result)){
		echo "<li>". "Name: " . $row["firstName"] . " " . $row["lastName"] ."<br>Specialty: " .$row["specialty"] ."<br>License Date: " .$row["dateLicence"];
	}
	mysqli_free_result($result);
?>
</ol>
<?php
	mysqli_close($connection);
?>
</body>
</html>