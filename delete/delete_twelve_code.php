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
	$batch = $_POST['batch'];
	$roll = $_POST['roll'];
	
	// sql to delete a record
	$sql = "DELETE FROM twelve WHERE roll = $roll AND batch='$batch' ";
	
	if (mysqli_query($conn, $sql)) {
		echo "<h1 align='center' style='color:#FD6161'>Delete successfully?</h1>";
		header('Refresh: 1; URL=delete_twelve.php');//after 1 second go to next page
	} else {
		echo "Error deleting record: " . mysqli_error($conn);
	}
	
	mysqli_close($conn);
	?>
</body>
</html>