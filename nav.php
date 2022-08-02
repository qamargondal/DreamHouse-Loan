<?php include 'db_connect.php' ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>My Website</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>
<body>
	<!--  Navigation Bar Section Start -->
	<section id="header">
		<div class="header container">
			<div class="nav-bar">
				<div class="brand">
					<a href="#hero"><h1 class="section-title"><span>D</span>REAM   <span>H</span>ome <span>L</span>one</h1></a>
				</div>
				<div class="nav-list">
					<div class="hamburger">
						<div class="bar"></div>
					</div>
					<ul>
						<li><a href="homePage.php" data-after='HOME'>HOME</a></li>
						<li><a href="about.php" data-after='About'>About</a></li>
						<li><a href="contact.php" data-after='Contact'>Contact</a></li>
						<li><a href="login.php" data-after='Project'>Apply</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!--  Navigation Bar Section End -->