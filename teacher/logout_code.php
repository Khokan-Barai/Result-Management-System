<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Logout Page</title>
</head>
<body>
	<?php
		session_start();
		session_destroy();
		
		header('location:tec_reg_log.php');
	
	?>
</body>
</html>