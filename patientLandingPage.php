<!DOCTYPE=html>
<html>
<head>
	<title> Patient Portal </title>
	<link rel="stylesheet" href="Hospital.css">
</head>
<body>
<h1> Manage Patients Below </h1>
<h2>Patient OHIP Number.</h2>
<form action="getPatient.php" method="post">
	<input type="text" name="OHIPnum"><br>
	<input type="submit" value="Search"/>
</form>
<h2> Assign Doctor to Patient</h2>
<form action="doctorTreats.php" method="post">
	<input type="submit" value="Assign Doctor"/>
</form>
<h2>Remove Patient from care of Doctor.</h2>
<form action="remPatientDoctor.php" method="post">
	<input type="submit" value="Remove"/>
</form>
<h2>See which doctors aren't assigned patients.</h2>
<form action="getFreeDoctors.php" method="post">
	<input type="submit" value="View"/>
</form>
</body>
</html>