<!DOCTYPE=html>
<html>
<head>
	<title> Update Hospital </title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
	include "connection.php";
	$query = 'SELECT * FROM Hospital;';
	$result=mysqli_query($connection, $query);
	if (!$result){
		die("queryhos failed");
	}
?>
<form action="UpdateHospitalDone.php" method="post">
	<h2> Pick Hospital.</h2>
	<?php
	while ($row=mysqli_fetch_assoc($result)){
		echo '<input type = "radio" name="HospitaslNa" value="'.$row["hospitalCode"].'" > Code: '. $row["hospitalCode"] . ' Name: ' . $row["hospitalName"] . '<br>';
	}
	?>
	<h2> Please enter new name.</h2>
	<input type="text" name="newHospitalName"><br>
	<input type="submit" value="Update"/>
</form>
</body>
</html>