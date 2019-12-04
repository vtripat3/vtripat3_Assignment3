<!DOCTYPE=html>
<html>
<head>
	<title> Doctor Removed </title>
	<link rel="stylesheet" href="Hospital.css">
</head>
<body>
<?php
	include "connection.php";
	$respose = $_POST["isDelete"];
	if ($response=="No"){
		echo "Delete Failed";
	}
	else{
		
		$query = 'DELETE FROM Doctors WHERE licenceNumber="'.$response.'";';	
		$result=mysqli_query($connection, $query);
		if (!$result){
			die("queryDel failed");
		}
		else{
			echo "Doctor deleted";
		}
	}
?>
</body>
</html>