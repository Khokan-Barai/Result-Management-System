<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<title>Teacher Login</title>
		<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
		<!---icon-bar--->
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!---End icon-bar--->
		<link rel="stylesheet" href="../css/style.css">
	<style>
		body{
			background-color: #47567B;
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
	<div class="login-wrap">
		<div class="login-html">
				<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
				<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
			<div class="login-form">
				<form class="sign-in-htm" action="tec_log_code.php" method="POST">
					<div class="group">
					<label for="user" class="label">User Name</label>
					<input id="username" name="username" type="text" class="input" required>
					</div>
					<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="password" name="password" type="password" class="input" required>
					</div>
					<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
					</div>
					<div class="group">
					<input type="submit" class="button" value="Sign In">
					</div>
					<div class="hr"></div>
					<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
					</div>
				</form>
				<form class="sign-up-htm" action="stu_reg_code.php" method="POST">
					<h2>You have to No Need to Registation</h2>
					<div class="hr"></div>
					<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
</body>
</html>