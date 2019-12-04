<!DOCTYPE=html>
<html>
<head>
	<title> New Doctor! </title>
	<link rel="stylesheet" href="Hospital.css">
</head>
<body>
<?php
	include "connection.php";
	$query = 'SELECT * FROM Hospital;';
	$result=mysqli_query($connection, $query);
	if (!$result){
		die("QueryH failed");
	}
?>
<h1> Welcome new doctor, enter your info below!</h1>
<form action="doctorAdded.php" method="post">
<h2> First name:</h2>
	<input type="text" name="frName"><br>
	<h2> Last name:</h2>
	<input type="text" name="laName"><br>
	<h2> License number:</h2>
	<input type="text" name="LicenseNum"><br>
	<h2> Date Licensed:</h2>
	<input type="date" name="LicenseDat"><br>
	<h2> Specialty:</h2>
	<input type="text" name="Specialty"><br>
	<h2> Hospital of employment: </h2>
	<?php
	while ($row=mysqli_fetch_assoc($result)){
		echo '<input type = "radio" name="HospitalNumb" value="'.$row["hospitalCode"].'" > Hospital Code: '. $row["hospitalCode"] . ' Hospital Name: ' . $row["hospitalName"] . '<br>';
	}
	?>
	<input type="submit" value="Add"/>
</form>
<?php
	mysqli_free_result($result);
	mysqli_close($connection);
?>
</body>
</html>