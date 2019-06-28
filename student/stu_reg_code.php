<?php 
	session_start();
	
	$con = mysqli_connect('localhost','root','');
	
	mysqli_select_db($con, 'database_project');
	
	$reg = $_POST['reg'];
	$roll = $_POST['roll'];
	$name = $_POST['name'];
	$batch = $_POST['batch'];
	
	$s = " select * from studata where reg = $reg";
	
	$result = mysqli_query($con, $s);
	$num = mysqli_num_rows($result);
	
	if($num == 1){
		echo "<h1 align='center' style='color:#FF0000'>This Registation Number Already Taken!!!</h1>";
		echo "<h1 align='center' style='color:#7BA9F7'>Please Try to Login...</h1>";
		header('Refresh: 2; URL=../student/stu_reg_log.php');
	}else{
		$sql = "insert into studata(reg,roll,name,batch) values ($reg,$roll,'$name','$batch')";
		mysqli_query($con, $sql);
		echo "<h1 align='center' style='color:#1AA15F'>Registation Successfull!!!</h1>";
		header('Refresh: 1; URL=../show/show_result.php');
	}

?>