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
	$cse305 = $_POST['cse305'];
	$cse306 = $_POST['cse306'];
	$cse307 = $_POST['cse307'];
	$cse308 = $_POST['cse308'];
	$cse313 = $_POST['cse313'];
	$final = $_POST['final'];

	
	// sql to insert a record
	$sql = "INSERT INTO eight (roll, batch, cse305, cse306, cse307, cse308, cse313,final) VALUES ($roll,'$batch', $cse305, $cse306, $cse307, $cse308,$cse313,$final )";
	if (mysqli_query($conn, $sql)) { 
		//header('location: insert_eight.php');
		//echo "Record insert successfully?success=1";
		echo "<h1 align='center' style='color:#1AA15F'>Save successfully?</h1>";
		header('Refresh: 1; URL=insert_eight.php');//after 1 second go to next page
	} else {
		echo "Error insertig record: " . mysqli_error($conn);
	}
	mysqli_close($conn);
	?>
</body>
</html>