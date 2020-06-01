<?php 
	session_start();
?> 

<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" width="400">
	<title>Techland-Your No 1 hub for Tech related News.</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<style type="text/css">
		body{
			text-align: center;
			font-family: Verdana, sans-serif;
			font-size: 10pt;
			background: #E8ECE0;
			width: 90%;
			max-width: 1280px;
		}
		p{
			font-family: Tahoma, Verdana, sans-serif;
			font-size: 20px;
			font-weight: 700;
		}
		.pageheader, .categories, .news, .signup, .pagefooter{
			width: 960px;
  			border: 1px solid #444;
  			overflow: hidden;
  			font-weight: bold;
  			padding-bottom: 20px;
  			margin-left: 160px;
  			margin-top: 25px;
  			border-radius: 15px;
  		}
  		.comments{
  			width: 960px;
  			border: 1px solid #444;
  			overflow: hidden;
  			font-weight: normal;
  			padding-bottom: 20px;
  			margin-left: 160px;
  			border-radius: 10px;
  			padding-left: 5px;
  		}
  		.news, .pagefooter{
  			padding-top: 5px
  		}
		.signupform{
			width: 90%;
			height: 40px;
			padding: 0px 5%;
			margin-top: 5px;
			border: none;
			font-family: arial;
			font-size: 12px;
			color: #111;
		}
		.news-detail{
		  	font-size: 20px;
		  	font-style: cursive;
		  	font-weight: 300;
		  	text-align: left;
		  	padding-left: 5px;
		}
		.g{
		  	color: #185518;
		}
		#category{
  			border-bottom: 1px solid #444
  		}
  		#replies{
  			text-align: left;
  			border-bottom: 1px solid #444;
  		}
  		#main-comment{
  			text-align: left;
  		}
  		#loginform{
  			margin-top: 10px;
  		}
  		a{
  			text-decoration: underline;
  		}
	</style>
</head>
<body>
<header>
	<div class="pageheader">
		<div class="row">
			<div class="col-lg-12">
				<a href="Tech.php" class="g"><h2>Techland Forum</h2></a>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				Welcome, 
				<?php
					if(isset($_SESSION['uid'])) {
						echo  "<b>".$_SESSION['uid']."</b>";
					} else {
						echo "<b>Guest</b>";
					}
				?>

				<?php 
					if(!isset($_SESSION['uid'])) {

				?>
						<a href='TechlandSignup.php'>Join Techland</a> /
						<a href='Techlandlogin.php'><b>LOGIN!</b></a> /
				<?php
					} else {
				?>
						<a href='TechlandLogout.php'>Logout</a> /
				<?php
					}
				?>
				
				<a href="">Trending</a> /
				<a href="">Recent</a> /
				<a href="">New</a>
				<br>
				<b>Stats:</b> 10 members, 20 topics.
				<b>Date</b>: Wednesday 30th January 2019 at 16:27
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<form action="">
					<input type="text" name="question" size="64">
					<button type="submit" name="submit">Search</button>
				</form>
			</div>
		</div>
	</div>
</header> 
