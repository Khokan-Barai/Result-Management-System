<?php   
	session_start();
	
	$con = mysqli_connect('localhost','root','');
	
	mysqli_select_db($con, 'database_project');
	
	$reg = $_POST['reg'];
	$roll = $_POST['roll'];
	
	$s = " select * from studata where reg = $reg and roll = $roll";
	
	$result = mysqli_query($con, $s);
	$num = mysqli_num_rows($result);
	
	if($num == 1){
		$_SESSION['roll'] = $roll;
		header('location: ../show/show_result.php');
	}else{
		echo "<h1 align='center'>Wrong Reg.No or Roll!!! Try Again...</h1>";
		header('Refresh: 1; URL=stu_reg_log.php');
	}
?>  