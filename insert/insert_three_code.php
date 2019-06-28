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
	$cse105 = $_POST['cse105'];
	$cse106 = $_POST['cse106'];
	$chem101 = $_POST['chem101'];
	$chem102 = $_POST['chem102'];
	$eng102 = $_POST['eng102'];
	$math102 = $_POST['math102'];
	$final = $_POST['final'];

	
	// sql to insert a record
	$sql = "INSERT INTO three (roll, batch, cse105, cse106, chem101, chem102, eng102, math102, final) VALUES ($roll,'$batch', $cse105, $cse106, $chem101, $chem102, $eng102, $math102, $final )";
	if (mysqli_query($conn, $sql)) { 
		//header('location: insert_three.php');
		//echo "Record insert successfully?success=1";
		echo "<h1 align='center' style='color:#1AA15F'>Save successfully?</h1>";
		header('Refresh: 1; URL=insert_three.php');//after 1 second go to next page
	} else {
		echo "Error insertig record: " . mysqli_error($conn);
	}
	mysqli_close($conn);
	?>
</body>
</html>