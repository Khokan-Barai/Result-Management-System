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
	$subcode = $_POST['subcode'];
	$value = $_POST['value'];

	
	// sql to insert a record
	$sql = "UPDATE eleven SET $subcode='$value' WHERE Roll = $roll AND Batch='$batch'";
	
	if ($conn->query($sql) === TRUE) {
		echo "<h1 align='center' style='color:#0000FF'>Update successfully?</h1>";
		header('Refresh: 1; URL=update_eleven.php');//after 1 second go to next page
	} else {
		echo "Error updating record: " . $conn->error;
	}
	
	$conn->close();
	?>
</body>
</html>