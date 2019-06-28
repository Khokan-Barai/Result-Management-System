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
	$cse203 = $_POST['cse203'];
	$cse204 = $_POST['cse204'];
	$cse205 = $_POST['cse205'];
	$cse206 = $_POST['cse206'];
	$math202 = $_POST['math202'];
	$final = $_POST['final'];

	
	// sql to insert a record
	$sql = "INSERT INTO five (roll, batch, cse203, cse204, cse205, cse206, math202, final) VALUES ($roll,'$batch', $cse203, $cse204, $cse205, $cse206, $math202, $final )";
	if (mysqli_query($conn, $sql)) { 
		//header('location: insert_seven.php');
		//echo "Record insert successfully?success=1";
		echo "<h1 align='center' style='color:#1AA15F'>Save successfully?</h1>";
		header('Refresh: 1; URL=insert_five.php');//after 1 second go to next page
	} else {
		echo "Error insertig record: " . mysqli_error($conn);
	}
	mysqli_close($conn);
	?>
</body>
</html>