<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Seven Semister Result</title>
	<!---icon-bar--->
		<link rel="stylesheet" type="text/css" href="../css/style.css" media="all" />
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!---End icon-bar--->
	<style>
		body{
			background-color: #47567B;
		}
		table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 100%;
		}
		
		td, th {
		border: 3px solid #2C2255;
		text-align: left;
		
		}
		
		tr:nth-child(odd) {
		background-color: #E8E8FF;
		}
		.seemore{
			text-decoration: none;
			font-family: "Times New Roman", Times, serif;
			float:right;
			background-color: #dddddd;
			padding: 8px 23px;
			margin-top:10px;
			margin-right:0px;
			border-radius: 4px;
		}
		th{
			font-family: "Times New Roman", Times, serif;
			font-size: 25px;
			text-align:center;
		}
		td{
			font-family: "Times New Roman", Times, serif;
			font-size: 25px;
			text-align:center;
			color:#ffffff;
		}
		h2{
			text-align:center;
			color:#DD5044;
		}
	</style>
</head>
<body>
<!---icon-bar--->
	<div class="icon-bar">
		<a class="active" href="../home.php"><img width="100" height="40" src="../img/logo.png" ></a> 
		 <div class="search">
			<input class="search_in" type="text" placeholder="Search.." name="search">
			<button  class="search_in" type="submit"><i class="fa fa-search"></i></button>
		</div>
	</div>
<!---End icon-bar--->
<br /><br />
	<?php
	session_start();
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
	
	// sql to show a record
	
		$sql = "SELECT roll, batch, cse301 , cse302, cse303,
		cse304, eee301, ged301, final FROM seven WHERE batch='$batch' AND roll = $roll" ;
		
		$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
    echo "<table><tr><th>Roll</th><th>Batch</th><th>CSE-301</th><th>CSE-302</th><th>CSE-303</th><th>CSE-304</th><th>EEE-301</th><th>GED-301</th><th>SGPA</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["roll"]. "</td><td>" . $row["batch"]. "</td><td>" . $row["cse301"]. "</td><td>" . $row["cse302"]. "</td><td>" . $row["cse303"]. "</td><td>" . $row["cse304"]. "</td><td>" . $row["eee301"]. "</td><td>" . $row["ged301"]. "</td><td>" . $row["final"]. "</td></tr>";
    }
    echo "</table>";
	} else {
		echo "<h2>Your result Not to Insert yet.Please Try after some time!!!</h2>";
	}
		
	mysqli_close($conn);
	?>
	<a class="seemore" href="show_seven.php">See More</a>
</body>
</html>