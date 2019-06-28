<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css" />
<style>
	body{
		background-image: url("img/bg4.jpg"); 
		background-position: top;
		background-repeat: no-repeat;
		background-size: cover;
	}
	#tec{
		background-color: rgba(255, 255, 255, .3);
	}
	#stu{
		background-color: rgba(100, 100, 100, 0.3);
	}

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
	.footer {
		position: fixed;
		left: 0;
		bottom: 0;
		width: 100%;
		background-color:#1A2D3E;
		color: white;
		text-align: center;
		height: 40px;
		font-family: "Times New Roman", Times, serif;
		font-size: 25px;
		}
	.toptext{
		text-align: center;
		font-family: "Times New Roman", Times, serif;
		font-size: 45px;
		color: #FF0000;
		text-shadow: 2px 2px 4px #3A66FF;
		}
	.textsection1{
		text-align: center;
		font-family: "Times New Roman", Times, serif;
		font-size: 40px;
		color: #000000;
		text-shadow: 2px 2px 4px #3A66FF;
	}
	.textsection2{
		text-align: center;
		font-family: "Times New Roman", Times, serif;
		font-size: 30px;
		color: #ffffff;
		text-shadow: 2px 2px 4px #D666FF;
	}
</style>
	
</head>
<body>
<!---icon-bar--->
	<div class="icon-bar">
		<a class="active" href="home.php"><img width="100" height="40" src="img/logo.png" ></a> 
		
		
		<div class="search">
			<input class="search_in" type="text" placeholder="Search.." name="search">
			<button  class="search_in" type="submit"><i class="fa fa-search"></i></button>
		</div>
	</div>
<!---End icon-bar--->	
	<div>
		<h1 class="toptext">Welcome to the Online Result Management System</h1>
	</div>

	<div class="row">
		<div class="column" id="tec">
			<h2 class="textsection1">This section only for Teachers.</h2>
            <h3 class="textsection2">If you are teacher,Please click the "Teacher"Button.</h3>
			<form action="teacher/tec_reg_log.php" method="post" align="center">
				<input  class="inputsubmit" type="submit" name="" value="Teacher">
			</form>
	
		</div>
		<div class="column" id="stu">
			<h2 class="textsection1">This section only for Students.<h2>
            <h3 class="textsection2">If you are student,Please click the "Student"Button.</h3>
			
			<form action="student/stu_reg_log.php" method="post" align="center">
				<input  class="inputsubmit" type="submit" name="" value="Student">
			</form>
            
		</div>
	</div>	
	
	
	
	
<!---footer--->
	<div class="footer">
		<a href="about/profile.php" target="blank">About of Me</a>
	</div>
</body>
</html>