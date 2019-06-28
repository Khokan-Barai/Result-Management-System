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
        header('location: delete_one.php');
        break;
    case 2:
        header('location: delete_two.php');
        break;
	case 3:
        header('location: delete_three.php');
        break;
	case 4:
        header('location: delete_four.php');
        break;
	case 5:
        header('location: delete_five.php');
        break;
	case 6:
        header('location: delete_six.php');
        break;
	case 7:
        header('location: delete_seven.php');
        break;
	case 8:
        header('location: delete_eight.php');
        break;
	case 9:
        header('location: delete_nine.php');
        break;
	case 10:
        header('location: delete_ten.php');
        break;
	case 11:
        header('location: delete_eleven.php');
        break;
	case 12:
        header('location: delete_twelve.php');
        break;
		default:
        echo "something is wrong";
}


	?>
	

</body>
</html>