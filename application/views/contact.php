<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact</title>
	<base href="<?php echo site_url(); ?>">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/contact.css">
	<link href='http://fonts.googleapis.com/css?family=Raleway:200,400,300,600,500,900,700,100,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
	<script type="application/x-javascript"> 
		addEventListener("load", function() { 
			setTimeout(hideURLbar, 0); 
		}, false); 
		function hideURLbar(){ 
			window.scrollTo(0,1); 
		} 
	</script>
</head>
<body>	
	<div id="header">
		<div class="headerBg"></div>		
		<span class="navIcon"></span>
		<div class="navBox">
			<div class="navBoxBg"></div>
			<ul class="navMenu">
				<li><a href="#">HOME</a></li>
				<li><a href="#">ABOUT</a></li>
				<li><a href="#">SERVICES</a></li>
				<li><a href="#">PORTFOLIO</a></li>
				<li><a href="#">BLOG</a></li>
				<li><a href="#">CONTACT</a></li>
				<li><a href="admin/login"> ADMIN</a></li>
			</ul>
			<span class="navCloseIcon"></span>
		</div>			
	</div>
	<div id="contact">
		<div class="wrap">
			<div class="contactForm">
				<form action="welcome/message" method="post">
					<p>
						<label>YOUR NAME:</label>
						<input type="text" value="" class="inpute" name="username">
						<span class="uname"></span>
					</p>
					<p>
						<label>EMAIL:</label>
						<input type="text" value="" class="inpute" name="email">
						<span class="emai"></span>
					</p>
					<p>
						<label>MESSAGE:</label>
						<textarea value="" class="inpute" name="content"></textarea>
						<span class="cont"></span>
					</p>
					<input type="button" value="Submit" id="submit" name="submit">
				</form>
			</div>	
			<div class="contactAddress">
				<h3>Address</h3>
				<p class="addressInfo">
				  Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non
			    </p>
				<p class="addressInfo">1-25-2568-897</p>
				<p class="email"><a href="">mail@portfolio.com</a></p>
			</div>		
		</div>
	</div>
	<div id="footer">
		<div class="wrap">
			<div class="footerBox">
				<p>Template by <a href="http://w3layouts.com">W3layouts</a></p>
				<ul class="share">
					<li><a href="#" class="f"></a></li>
					<li><a href="#" class="b"></a></li>
					<li><a href="#" class="q"></a></li>
					<li><a href="#" class="p"></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="toTop"></div>
	<script src="js/require.js" data-main="js/common.js"></script>
	<script src="js/contact.js"></script>
</body>
</html>

