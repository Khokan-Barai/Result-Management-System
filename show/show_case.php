<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php

	$dropdownlist2 = $_POST['dropdownlist_s'];
	
	switch ($dropdownlist2) {
    case 1:
        header('location: show_one.php');
        break;
    case 2:
        header('location: show_two.php');
        break;
	case 3:
        header('location: show_three.php');
        break;
	case 4:
        header('location: show_four.php');
        break;
	case 5:
        header('location: show_five.php');
        break;
	case 6:
        header('location: show_six.php');
        break;
	case 7:
        header('location: show_seven.php');
        break;
	case 8:
        header('location: show_eight.php');
        break;
	case 9:
        header('location: show_nine.php');
        break;
	case 10:
        header('location: show_ten.php');
        break;
	case 11:
        header('location: show_eleven.php');
        break;
	case 12:
        header('location: show_twelve.php');
        break;
		default:
        echo "something is wrong";
}


	?>
	

</body>
</html>