<!DOCTYPE=html>
<html>
<head>
	<title> Patient Treatment Removal</title>
	<link rel="stylesheet" href="Hospital.css">
</head>
<body>
<?php
	include "connection.php";
?>

<h1> On which Patient would you like to stop treatment? </h1>

<?php
	
	$query ='SELECT t.id as id, p.firstName AS patFName, p.lastName AS patLName, d.firstName AS docFName, d.lastName AS docLName FROM Patients AS p INNER JOIN Treats AS t ON p.ohipId = t.patId INNER JOIN Doctors AS d ON t.docId = d.licenceNumber;';
	$result=mysqli_query($connection, $query);
	if (!$result){
		die("queryPat failed");
	}
?>
<h2>Select which you would like to remove:</h3>
<ol>
<form action="treatmentStopped.php" method="post">
	<?php
	while ($row=mysqli_fetch_assoc($result)){
		echo '<input type = "radio" name="id" value="' . $row["id"] . '" >' . $row["docFName"] . ' ' . $row["docLName"] . ' treats ' . $row["patFName"] . ' ' . $row["patLName"] . '<br>';
	}
	?>
	<input type="submit" value="Stop"/>
</form>
</ol>
<?php
	mysqli_free_result($result);
?>
<?php
	mysqli_close($connection);
?>
</body>
</html>

