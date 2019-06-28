<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>About of Me</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		.card {
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 2);
		width: 100%;
		margin: auto;
		float:left;
		
		text-align: center;
		font-family: arial;
		}
		/* Responsive layout - makes a two column-layout instead of four columns */
		@media screen and (max-width: 900px) {
		.card  {
			width: 100%;
		}
		}
		
		/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
		@media screen and (max-width: 600px) {
		.card  {
			width: 100%;
		}
		}

		.title {
		color: grey;
		font-size: 18px;
		}
		
		button {
		border: none;
		outline: 0;
		display: inline-block;
		padding: 8px;
		color: white;
		background-color: #000;
		text-align: center;
		cursor: pointer;
		width: 100%;
		font-size: 18px;
		}
		
		a {
		text-decoration: none;
		font-size: 22px;
		color: black;
		}
		
		button:hover, a:hover {
		opacity: 0.7;
		}
		.toptext{
			text-align: center;
			font-family: "Times New Roman", Times, serif;
			font-size: 45px;
			color: #4267B2;
			text-shadow: 4px 4px 2px #968266;
		}
	</style>
</head>
<body>
	<h1 class="toptext" >About of Me</h1>

	<div class="card">
		<img src="../img/kho.png" alt="John" style="width:100%">
		<h1>Khokan Barai</h1>
		<p class="title">BSc in CSE (student)</p>
		<p>Dhaka International University(DIU)</p>
		
		<div style="margin: 24px 0;">
			<a href="http://cseday41.cf/" target="_blank"><i class="fa fa-dribbble"></i></a> 
			<a href="https://twitter.com/khokanbarai522" target="_blank"><i class="fa fa-twitter"></i></a>  
			<a href="https://www.linkedin.com/in/khokan-barai-451a26143/" target="_blank"><i class="fa fa-linkedin"></i></a>  
			<a href="https://www.facebook.com/profile.php?id=100004770225341" target="_blank"><i class="fa fa-facebook"></i></a> 
		</div>
		<p><button>Contact</button></p>
	</div>
</body>
</html>

