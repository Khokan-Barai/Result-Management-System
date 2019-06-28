<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php

	$dropdownlist2 = $_POST['dropdownlist_u'];
	
	switch ($dropdownlist2) {
    case 1:
        header('location: update_one.php');
        break;
    case 2:
        header('location: update_two.php');
        break;
	case 3:
        header('location: update_three.php');
        break;
	case 4:
        header('location: update_four.php');
        break;
	case 5:
        header('location: update_five.php');
        break;
	case 6:
        header('location: update_six.php');
        break;
	case 7:
        header('location: update_seven.php');
        break;
	case 8:
        header('location: update_eight.php');
        break;
	case 9:
        header('location: update_nine.php');
        break;
	case 10:
        header('location: update_ten.php');
        break;
	case 11:
        header('location: update_eleven.php');
        break;
	case 12:
        header('location: update_twelve.php');
        break;
		default:
        echo "something is wrong";
}


	?>
	

</body>
</html>