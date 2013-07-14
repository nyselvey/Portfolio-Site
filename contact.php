<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<script src="js/ios-orientationchange-fix.js"></script>
	<meta name="keywords" content="natasha selvey, natasha, selvey, technical writing, writer">
	<meta name="description" content="Natasha Selvey is experienced in documentation and quality, and currently working towards a career in technical writing and support.">
	<title>Natasha Selvey - Contact</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/device_styles.css">
	<link rel="shortcut icon" href="icon.png">
	<!-- [if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<! [endif] -->
</head>

<body>

	<!--/////////// Header //////////-->
	<header>

		<!-- /////// Name Logo ////// -->
		<div id="name">
			<div class="wrapper">
				<a href="index.html"><img src="name.png" alt="name" width="400" height="100"></a>
			</div>
		</div>
		<!-- /////// End Name Logo ////// -->
	<div id="containerborder" class="clearfix">	
		<div class="wrapper">
		<!-- ////// Navigation Bar ///// -->
			<div id="nav">
				<nav>
					<a href="index.html"> ABOUT </a>
					<a href="resume.html"> RESUME </a>
					<a href="work.html"> WORK </a>
					<a href="http://natashaselvey.blogspot.com/"> BLOG </a>
					<a href="contact.php"> CONTACT </a>
				</nav>
			</div>
		</div>
	</div>
		<!-- ////// End Navigation Bar ///// -->

	</header>
	<!--/////////// Ends Header //////////-->

	<!--/////////// Contact Form //////////-->
	<div id="container" class="clearfix">
		<div class="wrapper">
			<section class="col3">
				<form method="post" action="mailer.php">
					<input type="text" name="name" placeholder="your name" required>
					<input type="email" name="email" placeholder="your email" required>
					<textarea rows="10" name="message" placeholder=" your message"></textarea>
					<input type="text" name="verify" class="verif_box" placeholder="verify you're human" required> 
					<img class="verif_img" src="verificationimage.php?<?php echo rand(0,9999);?>" alt="verification image">
					<input type="submit" value="send">
				</form>
			</section>
	<!--/////////// Ends Contact Form //////////-->
		</div> <!--wrapper -->
	</div> <!-- container-->
	<!--/////////// Footer //////////-->
		<footer>
			&copy; 2013 Natasha Selvey. Branding images by <a href="http://amyzhangdesign.com/">Amy Zhang Design</a>. 
		</footer>
	<!--/////////// End Footer //////////-->

</body>
</html>