<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Teacher Option Secect</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/style.css" />
<style>
		.inputsubmit{
			padding: 8px 23px;
			margin-top:2px;
			border-radius: 6px;
			background-color: rgba(200, 200, 200, 0.5);
			font-family: "Times New Roman", Times, serif;
			font-size: 20px;
			text-align:center;
			margin-top:40px;
		}
		body{
			background-image: url("../img/bg6.jpg"); 
			background-position: top;
			background-repeat: no-repeat;
			background-size: cover;
		}
		.column1 {
			float: left;
			width: 33.33%;
			padding:10px;
			height: 400px; 
			}
		#tec_in{
			background-color: rgba(255, 255, 255, .3);
		}#tec_up{
			background-color: rgba(100, 100, 100, 0.3);
		}#tec_de{
			background-color: rgba(255, 255, 255, .3);
		}
		
		@media screen and (max-width: 900px) {
		.column1  {
				width: 50%;
			}
			}
			
			/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
		@media screen and (max-width: 600px) {
		.column1  {
				width: 100%;
			}
			}
		.logout{
			float: right;
			color:#2A001B;
			text-decoration:none;
			margin-right:10px;
			background-color: rgba(150, 150, 150, 0.8);
			overflow: auto;
			padding:2px;
			font-family: "Times New Roman", Times, serif;
			font-size: 20px;
			text-align:center;
			border-radius: 13px;
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
		font-size: 40px;
		color: #000000;
		text-shadow: 2px 2px 4px #3A66FF;
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
	<div>
		<a class="logout" href="logout_code.php">LOGOUT</a>
	</div>	
	<div>
		<h1 class="toptext">Result Edit Section</h1>
	</div>	
	
	
	<div class="row">
		<div class="column1" id="tec_in">
			<h2 class="textsection1">If you want to insert the result,please click the "Insert" Button.</h2>
			<form action="../insert/insert_result.php" method="post" align="center">
				<input  class="inputsubmit" type="submit" name="" value="Insert">
			</form>
	
		</div>
		
		<div class="column1" id="tec_up">
			<h2 class="textsection1">If you want to update the result,please click the "Update" Button.</h2>
			<form action="../update/update_result.php" method="post" align="center">
				<input  class="inputsubmit" type="submit" name="" value="Update">
			</form>
	
		</div>
		
		<div class="column1" id="tec_de">
			<h2 class="textsection1">If you want to delete the result,please click the "Delete" Button.</h2>
			<form action="../delete/delete_result.php" method="post" align="center">
				<input  class="inputsubmit" type="submit" name="" value="Delete">
			</form>
	
		</div>
	</div>

	
	
	
	
<!---footer--->
	<div class="footer">
	</div>
</body>
</html>