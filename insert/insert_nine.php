<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Nine Semister Result Insert</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css" media="all" />
		<!---icon-bar--->
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!---End icon-bar--->

<style>
	body{
		background-image: url("../img/bg4.jpg"); 
		background-position: top;
		background-repeat: no-repeat;
		background-size: cover;
	}
	.toptext{
		text-align: center;
		font-family: "Times New Roman", Times, serif;
		font-size: 45px;
		color: #000000;
		text-shadow: 2px 2px 4px #CC0000;
	}
	.inputsubmit{
		padding: 8px 23px;
		margin-top:2px;
		float:right;
		border-radius: 6px;
		background-color: rgba(200, 200, 200, 0.5);
		font-family: "Times New Roman", Times, serif;
		font-size: 20px;
		text-align:center;
		margin-top:3px;
	}
	.gobtn{
		padding: 8px 23px;
		margin-top:2px;
		float:right;
		border-radius: 6px;
		background-color: rgba(200, 200, 200, 0.4);
		font-family: "Times New Roman", Times, serif;
		font-size: 20px;
		text-align:center;
		margin-top:3px;
		margin-right:10px;
		}
	table {
	font-family: arial, sans-serif;
	border-collapse: collapse;
	width: 100%;
	}
	
	td, th {
	border: 1px solid #000;
	text-align: left;
	
	}
	
	tr:nth-child(odd) {
	background-color: #dddddd;
	}
	.inputfild{
		width: 100%;
		padding: 8px 8px;
		box-sizing: border-box;
		font-family: "Times New Roman", Times, serif;
		font-size: 25px;
		text-align:center;
	}
	th{
		font-family: "Times New Roman", Times, serif;
		font-size: 25px;
		text-align:center;
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
	<h1 class="toptext">Please Put The Result Here By GPA</h1>
<!---Insert section---->
<br><br>

	<form action="insert_nine_code" method="post">
		<table>
		<tr>
			<th>Roll</th>
			<th>Batch</th>
			<th>CSE-309</th>
			<th>CSE-310</th>
			<th>CSE-311</th>
			<th>CSE-312</th>
			<th>CSE-315</th>
			<th>CSE-317</th>
			<th>SGPA</th>
		</tr>
		<tr>
			<td><input class="inputfild" type="text" name="roll" placeholder="Roll Number" required></td>
			<td><input class="inputfild" type="text" name="batch" placeholder="Batch" required></td>
			<td><input class="inputfild" type="text" name="cse309" placeholder="CSE-309" required></td>
			<td><input class="inputfild" type="text" name="cse310" placeholder="CSE-310" required></td>
			<td><input class="inputfild" type="text" name="cse311" placeholder="CSE-311" required></td>
			<td><input class="inputfild" type="text" name="cse312" placeholder="CSE-312" required></td>
			<td><input class="inputfild" type="text" name="cse315" placeholder="CSE-315" required></td>
			<td><input class="inputfild" type="text" name="cse317" placeholder="CSE-317" required></td>
			<td><input class="inputfild" type="text" name="final" placeholder="SGPA" required></td>
			
		</tr>
		
		</table>
		<input class="inputsubmit" type="submit" name="" value="Insert">
		<a class="gobtn" href="insert_result.php">Go Back</a>
	</form>	

	
	
</body>
</html>