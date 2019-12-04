<!DOCTYPE=html>
<html>
<head>
	<title> Doctor Portal </title>
	<link rel="stylesheet" href="Hospital.css">
</head>
<body>

<h1> Manage your Doctors Below </h1>
<form action="getDoctor.php" method="post">
	<h2> List the doctors that work here. </h2>
	<h3> Would you like to order by first or last name? </h3>
	<input type="radio" name="Order" value="firstName" checked="checked"> By First Name<br>
	<input type="radio" name="Order" value="lastName"> By Last Name<br>
	<h4> Would you like to view them in ascending or descending order? </h4>
	<input type="radio" name="AscendDescend" value="ASC" checked="checked"> Ascending<br>
	<input type="radio" name="AscendDescend" value="DESC"> Descending<br>
	<input type="submit" value="View Doctors"><br>
</form>
<h2> I would like to view doctors licensed prior to:</h2>
<form action="getDocLicDate.php" method="post">
	<input type="date" name="licDate">
	<input type="submit" value="View"><br>
</form>
<h2> Add a new doctor </h2>
<form action="newDoctor.php" method="post">
	<input type="submit" value="Add"><br>
</form>
<h2> Delete a doctor </h2>
<form action="removeDoctor.php" method="post">
	<input type="submit" value="Delete"><br>
</form>
</body>
</html>
