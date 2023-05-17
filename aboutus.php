<?php
session_start();

// check if the user is already logged in
if(!isset($_SESSION['username']))
{
    //echo "hello";
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>About us Page</title>
  <link rel="stylesheet" href="aboutus.css">
</head>
<body>
	<nav class="navbar background">
		<ul class="nav-list">
			<div class="logo"><img src=""></div>
			<li><a href="homepage.php">Home</a></li>
			
		</ul>
		
	</nav>
	<section class="background firstsection">
		<div class="box-main">
			<div class="firstHalf">
				<p class="text-big">About US</p>
				
				<p class="text-small">
					Here you will get to know the team
					members of our company
				</p>
				<br>
				<p class="center"><a href="#Order"
				style="text-decoration:none;color:rgb(21, 226, 237);">
						Below are the people who
						works in our company</a>
				</p>
			</div>
		</div>
	</section>
	<section class="service">
		<h1 class="h-primary center" style="margin-top:30px;text-align:center;">
			Our Project Team
		</h1>
	<div id="services">
			<div class="box">
				<img src=
"sanket.jpg"
					alt="picture goes here">
			
				<p class="center">
					<a href="#xyz" style="text-decoration:none;color:black;
		font-weight:bold;font-family: 'Arial', cursive;">
						Sanket Prajapati
					</a>
				</p>
				<p style="font-family: sans-serif">Project Partner</p>
        <p style="font-family: sans-serif ">sanket.pra187@gmail.com</p>
			</div>
			<div class="box">
				<img src=
"om.png"
					alt="picture goes here">
				
				<p class="center">
					<a href="#abc" style="text-decoration:none;color:black;
		font-weight:bold;font-family: 'Arial', cursive;">
						Om Prajapati
					</a>
				</p>
				
				<p style="font-family: sans-serif ">Project Partner</p>
				<p style="font-family: sans-serif ">omp95043@gmail.com</p>
			</div>
			<div class="box">
				<img src=
"vipul.jpg"
					alt="picture goes here">
				<br>
				<p class="center">
					<a href="#xyz" style="text-decoration:none;color:black;
		font-weight:bold;font-family: 'Arial', cursive;">
						Vipul Patani
					</a>
				</p>
				
				<p style="font-family: sans-serif ">Project Partner</p>
				<p style="font-family: sans-serif ">vipulpat8347@gmail.com</p>

			</div>
		</div>
	
	</section>

	<footer class="background">
		<p class="text-footer">
			Copyright ©-All rights are reserved
		</p>

	</footer>
  
</body>

</html>
