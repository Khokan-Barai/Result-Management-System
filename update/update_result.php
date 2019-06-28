<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Put Semister for Result Update</title>
		<!---icon-bar--->
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!---End icon-bar--->
		<link rel="stylesheet" href="../css/style.css">
	<style>
		body{
			background-image: url("../img/bg6.jpg"); 
			background-position: top;
			background-repeat: no-repeat;
			background-size: cover;
		}
		.inputsubmit{
			padding: 5px 23px;
			margin-top:2px;
			border-radius: 4px;
			background-color: #f8f8f8;
			font-family: "Times New Roman", Times, serif;
			font-size: 20px;
			text-align:center;
			background-color: rgba(255, 255, 255, 0.5);
		}
		.toptext{
			text-align: center;
			font-family: "Times New Roman", Times, serif;
			font-size: 45px;
			color: #F647B1;
			text-shadow: 2px 2px 4px #3A66FF;
		}
		.textsection1{
			text-align: center;
			font-family: "Times New Roman", Times, serif;
			font-size: 35px;
			color: #000000;
			text-shadow: 2px 2px 4px #CC0000;
		}
		.insert_from{
			text-align: center;
			
		}
		.back_opt{
			float: right;
			color:#2A001B;
			text-decoration:none;
			margin-right:10px;
			padding:8px 23px;
			border-radius: 6px;
			background-color: rgba(255, 255, 255, 0.6);
			font-family: "Times New Roman", Times, serif;
			font-size: 20px;
			color: #2A001B;
			text-shadow: 2px 2px 4px #77808A;
			border: 2px solid #C0BCBB;
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
	<h1 class="toptext">The Result Update Section</h1>
	<h1 class="textsection1">Select Semister For Update The Result</h1>
	<br /><br />
	<form class="insert_from" action="update_case.php" method="post">
		<select class="inputsubmit" name="dropdownlist_u" required>
			<option value="">Semester:</option>
			<option value="1" >1</option>
			<option value="2" >2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8" >8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
		</select>
		<input class="inputsubmit" type="submit" name="" value="Go">
		<a class="back_opt" href="../teacher/tec_option.php">BACK</a>
	</form>
</body>
</html>