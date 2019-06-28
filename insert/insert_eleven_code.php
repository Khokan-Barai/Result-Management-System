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
	$cse405 = $_POST['cse405'];
	$cse406 = $_POST['cse406'];
	$cse407 = $_POST['cse407'];
	$cse408 = $_POST['cse408'];
	$cse411 = $_POST['cse411'];
	$final = $_POST['final'];

	
	// sql to insert a record
	$sql = "INSERT INTO eleven (roll, batch, cse405, cse406, cse407, cse408, cse411, final) VALUES ($roll,'$batch', $cse405, $cse406, $cse407, $cse408,$cse411,$final )";
	if (mysqli_query($conn, $sql)) { 
		echo "<h1 align='center' style='color:#1AA15F'>Save successfully?</h1>";
		header('Refresh: 1; URL=insert_eleven.php');//after 1 second go to next page
	} else {
		echo "Error insertig record: " . mysqli_error($conn);
	}
	mysqli_close($conn);
	?>
</body>
</html>