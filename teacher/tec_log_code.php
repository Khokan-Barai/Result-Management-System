<?php   
	session_start();
	
	$con = mysqli_connect('localhost','root','');
	
	mysqli_select_db($con, 'database_project');
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$s = " select * from tecdata where username = '$username' and password = '$password'";
	
	$result = mysqli_query($con, $s);
	$num = mysqli_num_rows($result);
	
	if($num == 1){
		header('location:tec_option.php');
	}else{
		echo "<h1 align='center' style='color:#FF0000'>Wrong User Name.No or Password!!! Try Again...</h1>";
		header('Refresh: 2; URL=tec_reg_log.php');
	}
?>  