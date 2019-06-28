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
	$cse201 = $_POST['cse201'];
	$eee201 = $_POST['eee201'];
	$eee202 = $_POST['eee202'];
	$ged201 = $_POST['ged201'];
	$math201 = $_POST['math201'];
	$final = $_POST['final'];

	
	// sql to insert a record
	$sql = "INSERT INTO four (roll, batch, cse201, eee201, eee202, ged201, math201, final) VALUES ($roll,'$batch', $cse201, $eee201, $eee202, $ged201, $math201, $final )";
	if (mysqli_query($conn, $sql)) { 
		//header('location: insert_seven.php');
		//echo "Record insert successfully?success=1";
		echo "<h1 align='center' style='color:#1AA15F'>Save successfully?</h1>";
		header('Refresh: 1; URL=insert_four.php');//after 1 second go to next page
	} else {
		echo "Error insertig record: " . mysqli_error($conn);
	}
	mysqli_close($conn);
	?>
</body>
</html>