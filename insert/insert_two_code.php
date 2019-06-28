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
	$cse103 = $_POST['cse103'];
	$cse104 = $_POST['cse104'];
	$phy103 = $_POST['phy103'];
	$phy104 = $_POST['phy104'];
	$eng101 = $_POST['eng101'];
	$math101 = $_POST['math101'];
	$final = $_POST['final'];

	
	// sql to insert a record
	$sql = "INSERT INTO two (roll, batch, cse103, cse104, phy103, phy104, eng101, math101, final) VALUES ($roll,'$batch', $cse103, $cse104, $phy103, $phy104, $eng101, $math101, $final )";
	if (mysqli_query($conn, $sql)) { 
		//header('location: insert_two.php');
		//echo "Record insert successfully?success=1";
		echo "<h1 align='center' style='color:#1AA15F'>Save successfully?</h1>";
		header('Refresh: 1; URL=insert_two.php');//after 1 second go to next page
	} else {
		echo "Error insertig record: " . mysqli_error($conn);
	}
	mysqli_close($conn);
	?>
</body>
</html>