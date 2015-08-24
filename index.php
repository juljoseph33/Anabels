<!DOCTYPE html>
<html>

<head>
	<title>Anabel's Grocery</title>
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
	<link rel="stylesheet" type="text/css" href="css/960_12_col.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.theme.min.css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- <link rel="icon" type="image/x-icon" href="img/favicon.png" /> -->
	<script src="js/scripts.js"></script>
	<script src="js/fixto.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/scrolltofixed.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

</head>

<body>

<div id="wrapper">

<div id="nav" class="container_12">
	<ul>
		<li id="picturelink" class="grid_2"><a href="index.php"><img alt="logo" id="headerpic" src="img/logosmall.png"></a></li>
		<li class="grid_3 empty">"</li>
		<li class="grid_2"><a href="#">About Us</a>
			<ul>
				<li><a href="ourstory.php">Our Story</a></li>
				<li><a href="theteam.php">The Team</a></li>
				<li><a href="faq.php">FAQ</a></li>
			</ul>
		</li>
		<li class="grid_2"><a href="#">What We Do</a>
			<ul>
				<li><a href="programming.php">Programming</a></li>
				<li><a href="discountprogram.php">Discount Program</a></li>
				<li><a href="communityengagement.php">Community Engagement</a></li>
				<li><a href="products.php">Products</a></li>	
			</ul>
		</li>
		
		<li class="grid_2"><a href="#">Get Involved</a>
			<ul>
				<li><a href="applyforajob.php">Apply For A Job</a></li>
				<li><a href="volunteer.php">Volunteer</a></li>
			</ul>
		</li>
		<li class="grid_2 single"><a href="donate.php">Donate</a></li>
		<li class="grid_2 single"><a href="contactresources.php">Contact/Resources</a></li>
	</ul>
</div>

<div id="innercontainer">

<div id="homebackground">
	<img  alt="spices" src="img/Spices.jpg">
	<h1 id="f">Anabel's Grocery</h1>
</div>

<div id="mission" class="container_12">
	<div class="empty grid_2">"</div><div class="grid_8"><p><span class="color">OUR MISSION</span> is to fight the problem of food insecurity at 
	Cornell by providing access to healthy, affordable food and 
	increasing food literacy.</p></div><div class="empty grid_2">"</div><div class="clear"></div>
	<div class="empty grid_2">"</div><div class="grid_8"><p><span class="color">OUR PURPOSE</span> is to develop a student-run grocery store on the 
	Cornell campus that provides financial assistance and 
	educational programs on healthy and cost-effective eating.</p></div><div class="empty grid_2">"</div>
</div>


<div id="guidingprinciples">
	<h2 class="fadeInBlock">Our Guiding Principles</h2>
	<div id="container" class="container_12 fadeInBlock">
		<div class="grid_4">
			<div class="empty grid_1">"</div>
			<div class="grid_2">
				<img alt="books" src="img/books8.png">
				<p>Education</p>
			</div>
			<div class="empty grid_1">"</div>
		</div>
		<div class="grid_4">
			<div class="empty grid_1">"</div>
			<div class="grid_2">
				<img alt="lock" src="img/block32.png">
				<p>Accessability<br>Affordability</p>
			</div>
			<div class="empty grid_1">"</div>
		</div>
		<div class="grid_4">
			<div class="empty grid_1">"</div>
			<div class="grid_2">
				<img alt="apple" src="img/apple54.png">
				<p>Taste</p>
			</div>
			<div class="empty grid_1">"</div>	
		</div>	
	</div>
</div>

<div id="statement">
<p><span class="emphasis">ANABEL’S GROCERY</span> believes that cooking is a <span class="emphasis">life skill</span>. We offer classes designed to teach novice cooks how to <span class="emphasis">eat healthy</span> and develop lifelong skills. Our grocery store is <span class="emphasis">for everyone</span>.  We strive to meet the needs of individuals from <span class="emphasis">all financial backgrounds</span> to ensure everyone has <span class="emphasis">access</span> to nutritional food.</p>
</div>


<?php include('footer.php'); ?>