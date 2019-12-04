<!DOCTYPE=html>
<html>
<head>
	<title> Free Doctors </title>
	<link rel="stylesheet" href="Hospital.css">
</head>
<body>
<?php
	include "connection.php";
?>
<h1> All of the Doctors who currently have not patients</h1>
<?php
	$query = 'SELECT * FROM Doctors WHERE licenceNumber NOT IN (SELECT docId FROM Treats);';
	$result=mysqli_query($connection, $query);
	if (!$result){
		die("queryfrdoc failed");
	}
	while ($row=mysqli_fetch_assoc($result)){
		echo "<h4>". "Name: " . $row["firstName"] . " " . $row["lastName"]."<br>";
	}
	mysqli_free_result($result);
	mysqli_close($connection);
?>
</body>
</html>