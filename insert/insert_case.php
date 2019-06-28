<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php

	$dropdownlist2 = $_POST['dropdownlist_i'];
	
	switch ($dropdownlist2) {
    case 1:
        header('location: insert_one.php');
        break;
    case 2:
        header('location: insert_two.php');
        break;
	case 3:
        header('location: insert_three.php');
        break;
	case 4:
        header('location: insert_four.php');
        break;
	case 5:
        header('location: insert_five.php');
        break;
	case 6:
        header('location: insert_six.php');
        break;
	case 7:
        header('location: insert_seven.php');
        break;
	case 8:
        header('location: insert_eight.php');
        break;
	case 9:
        header('location: insert_nine.php');
        break;
	case 10:
        header('location: insert_ten.php');
        break;
	case 11:
        header('location: insert_eleven.php');
        break;
	case 12:
        header('location: insert_twelve.php');
        break;
		default:
        echo "something is wrong";
}


	?>
	

</body>
</html>