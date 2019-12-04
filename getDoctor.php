<!DOCTYPE=html>
<html>
<head>
	<title> List-o-Doctors </title>
	<link rel="stylesheet" href="Hospital.css">
</head>
<body>
<?php
	include "connection.php";
?>
<h1> Doctors listed below </h1>
<h2> Doctors will appear in the arrangement specified </h2>
<ol>
<?php
	$order = $_POST["Order"];
	$AscendDescend=$_POST["AscendDescend"];
	$query = 'SELECT * FROM Doctors ORDER BY ' .$order. ' ' .$AscendDescend.';';
	$result=mysqli_query($connection, $query);
	if (!$result){
		die("there were no selections");
	}
?>
<form action="docInfo.php" method="post">
	<?php
	while ($row=mysqli_fetch_assoc($result)){
		echo '<input type = "radio" name="Doctorss" value="'.$row["licenseNumber"].'" > ' . $row["firstName"] . ' ' . $row["lastName"] . '<br>';
	}
	?>
	<input type="submit" value="submit"/>
</form>
<?php
	mysqli_free_result($result);
?>
</ol>
<?php
	mysqli_close($connection);
?>
</body>
</html>