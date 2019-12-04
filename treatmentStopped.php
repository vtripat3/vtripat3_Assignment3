<!DOCTYPE=html>
<html>
<head>
	<title> Treatment Stopped  </title>
	<link rel="stylesheet" href="Hospital.css">
</head>
<body>
<?php
	include "connection.php";
	$id = $_POST["id"];
    	$query = 'DELETE FROM Treats WHERE id='.$id.';';	
    	echo $query;
  	$result=mysqli_query($connection, $query);
    	if (!$result){
        die("queryid failed");
    }
    else{
        echo "Patient treatment deleted!";
    }
?>
</body>
</html>
