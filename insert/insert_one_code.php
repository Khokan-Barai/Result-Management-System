<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "database_project";

		// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$roll = $_POST['roll'];
	$batch = $_POST['batch'];
	$cse101 = $_POST['cse101'];
	$phy101 = $_POST['phy101'];
	$ged101 = $_POST['ged101'];
	$ged102 = $_POST['ged102'];
	$final = $_POST['final'];

	
	// sql to insert a record
	$sql = "INSERT INTO one (roll, batch, cse101, phy101, ged101, ged102, final) VALUES ($roll,'$batch', $cse101, $phy101, $ged101, $ged102, $final )";
	if (mysqli_query($conn, $sql)) { 
		//header('location: insert_one.php');
		//echo "Record insert successfully?success=1";
		echo "<h1 align='center' style='color:#1AA15F'>Save successfully?</h1>";
		header('Refresh: 1; URL=insert_one.php');//after 1 second go to next page
	} else {
		echo "Error insertig record: " . mysqli_error($conn);
	}
	mysqli_close($conn);
	?>
</body>
</html>