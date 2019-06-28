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
	$cse301 = $_POST['cse301'];
	$cse302 = $_POST['cse302'];
	$cse303 = $_POST['cse303'];
	$cse304 = $_POST['cse304'];
	$eee301 = $_POST['eee301'];
	$ged301 = $_POST['ged301'];
	$final = $_POST['final'];

	
	// sql to insert a record
	$sql = "INSERT INTO seven (roll, batch, cse301, cse302, cse303, cse304, eee301, ged301,final) VALUES ($roll,'$batch', $cse301, $cse302, $cse303, $cse304, $eee301, $ged301, $final )";
	if (mysqli_query($conn, $sql)) { 
		//header('location: insert_seven.php');
		//echo "Record insert successfully?success=1";
		echo "<h1 align='center' style='color:#1AA15F'>Save successfully?</h1>";
		header('Refresh: 1; URL=insert_seven.php');//after 1 second go to next page
	} else {
		echo "Error insertig record: " . mysqli_error($conn);
	}
	mysqli_close($conn);
	?>
</body>
</html>