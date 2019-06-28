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
	$cse401 = $_POST['cse401'];
	$cse402 = $_POST['cse402'];
	$cse403 = $_POST['cse403'];
	$cse404 = $_POST['cse404'];
	$cse409 = $_POST['cse409'];
	$cse410 = $_POST['cse410'];
	$final = $_POST['final'];

	
	// sql to insert a record
	$sql = "INSERT INTO ten (roll, batch, cse401, cse402, cse403, cse404, cse409, cse410, final) VALUES ($roll,'$batch', $cse401, $cse402, $cse403, $cse404,$cse409,$cse410,$final )";
	if (mysqli_query($conn, $sql)) { 
		echo "<h1 align='center' style='color:#1AA15F'>Save successfully?</h1>";
		header('Refresh: 1; URL=insert_ten.php');//after 1 second go to next page
	} else {
		echo "Error insertig record: " . mysqli_error($conn);
	}
	mysqli_close($conn);
	?>
</body>
</html>