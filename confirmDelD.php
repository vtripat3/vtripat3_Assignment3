<!DOCTYPE=html>
<html>
<head>
	<title> Are you sure? </title>
	<link rel="stylesheet" href="Hospital.css">
</head>
<body>
<?php
	include "connection.php";
	$LicNumber = $_POST["LicenceNum"];
	$query = 'select count(licenceNumber) as a from Doctors WHERE licenceNumber="'.$LicNumber.'";';	
	$result=mysqli_query($connection, $query);
	$row=mysqli_fetch_assoc($result);
	if ($row["a"]==0){
		die("Licence Number unavailable");
	}
	$queryb = 'select count(docId) as b from treats WHERE docId="'.$LicNumber.'";';	
	$resultb=mysqli_query($connection, $query2);
	$row=mysqli_fetch_assoc($resultb);
	if ($row["b"]==0){
		echo "Doctor is free<br>";
		echo "Please confirm you would like to delete this doctor.";	
	}
	else
	{
		echo "Doctor is currently treating patients.<br>";
		echo "Please confirm you would like to delete this doctor.<br> This will remove the patients";
	}
	?>	
	<form action="doctorRemoved.php" method="post">
		<input type="radio" name="isDelete" value="<?php echo $_POST['LicenceNumber']; ?>" > Yes <br>
		<input type="radio" name="isDelete" value="No" checked="checked"> No <br>
		<input type="submit" value="Delete"><br>
	</form>
</body>
</html>