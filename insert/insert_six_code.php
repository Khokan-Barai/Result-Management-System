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
	$cse207 = $_POST['cse207'];
	$cse208 = $_POST['cse208'];
	$cse209 = $_POST['cse209'];
	$ged202 = $_POST['ged202'];
	$math203 = $_POST['math203'];
	$final = $_POST['final'];

	
	// sql to insert a record
	$sql = "INSERT INTO six (roll, batch, cse207, cse208, cse209, ged202, math203, final) VALUES ($roll,'$batch', $cse207, $cse208, $cse209, $ged202, $math203, $final )";
	if (mysqli_query($conn, $sql)) { 
		//header('location: insert_six.php');
		echo "<h1 align='center' style='color:#1AA15F'>Save successfully?</h1>";
		header('Refresh: 1; URL=insert_six.php');//after 1 second go to next page
	} else {
		echo "Error insertig record: " . mysqli_error($conn);
	}
	mysqli_close($conn);
	?>
</body>
</html>