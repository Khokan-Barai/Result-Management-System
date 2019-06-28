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
	$cse309 = $_POST['cse309'];
	$cse310 = $_POST['cse310'];
	$cse311 = $_POST['cse311'];
	$cse312 = $_POST['cse312'];
	$cse315 = $_POST['cse315'];
	$cse317 = $_POST['cse317'];
	$final = $_POST['final'];

	
	// sql to insert a record
	$sql = "INSERT INTO nine (roll, batch, cse309, cse310, cse311, cse312, cse315, cse317, final) VALUES ($roll,'$batch', $cse309, $cse310, $cse311, $cse312,$cse315,$cse317,$final )";
	if (mysqli_query($conn, $sql)) { 
		echo "<h1 align='center' style='color:#1AA15F'>Save successfully?</h1>";
		header('Refresh: 1; URL=insert_nine.php');//after 1 second go to next page
	} else {
		echo "Error insertig record: " . mysqli_error($conn);
	}
	mysqli_close($conn);
	?>
</body>
</html>