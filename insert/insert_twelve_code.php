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
	$cse413 = $_POST['cse413'];
	$cse414 = $_POST['cse414'];
	$cse425 = $_POST['cse425'];
	$final = $_POST['final'];

	
	// sql to insert a record
	$sql = "INSERT INTO twelve (roll, batch, cse413, cse414, cse425, final) VALUES ($roll,'$batch', $cse413, $cse414, $cse425,$final )";
	if (mysqli_query($conn, $sql)) { 
		echo "<h1 align='center' style='color:#1AA15F'>Save successfully?</h1>";
		header('Refresh: 1; URL=insert_twelve.php');//after 1 second go to next page
	} else {
		echo "Error insertig record: " . mysqli_error($conn);
	}
	mysqli_close($conn);
	?>
</body>
</html>