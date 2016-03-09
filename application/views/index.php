<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>我的主页</title>
	<base href="<?php echo site_url(); ?>">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/index.css">
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
		<img src="img/bg2.jpg" alt="bg2" class="headerBg">	
		<span class="navIcon"></span>
		<div class="navBox">
			<div class="navBoxBg"></div>
			<ul class="navMenu">
				<li><a href="welcome/index">HOME</a></li>
				<li><a href="#">ABOUT</a></li>
				<li><a href="#">SERVICES</a></li>
				<li><a href="#">PORTFOLIO</a></li>
				<li><a href="#">BLOG</a></li>
				<li><a href="#">CONTACT</a></li>
				<li><a href="admin/login" target="_blank"> ADMIN</a></li>
			</ul>
			<span class="navCloseIcon"></span>
		</div>
		<div class="headerInfo">
			<img src="img/pic.png" alt="pic">
			<h1>Videntur Parum</h1>
			<p>Love to Design and capture Photographs :)</p>
			<span><a href="#">Hire Me</a></span>
			<span><a href="#">Follow Me</a></span>			
		</div>		
	</div>
	<div id="aboutUs">
		<div class="wrap">
			<div class="headTitle">
				<h2>ABOUT ME</h2>
				<span></span>			
			</div>
			<div class="aboutLeft">
				<h3>VIDENTUR PARUM</h3>
				<span>GRAPHIC DESIGNER,UI/UX EXPERT</span>
				<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM ERAT VOLUTPAT. UT WISI ENIM AD MINIM VENIAM, QUIS NOSTRUD EXERCI TATION ULLAMCORPER SUSCIPIT LOBORTIS NISL UT ALIQUIP EX EA COMMODO CONSEQUAT. DUIS AUTEM VEL EUM IRIURE DOLOR IN HENDRERIT IN VULPUTATE VELIT ESSE MOLESTIE CONSEQUAT, VEL ILLUM DOLORE EU FEUGIAT NULLA FAM.</p>
				<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT. SUSPENDISSE SIT AMET PURUS IPSUM. IN ANTE LEO, ELEMENTUM AT PLACERAT IN, ALIQUET NON LECTUS. NAM IMPERDIET MAGNA EU FAUCIBUS CURSUS.</p>
			</div>
			<div class="aboutRight">
				<img src="img/video.jpg" title="name">
			</div>
		</div>
	</div>
	<div id="services">
		<div class="wrap">
			<div class="headTitle">
				<h2>MY SERVICES</h2>
				<span></span>		
			</div>
			<div class="servicesBox">
				<div class="servicesInfo">
					<span class="s-cion1"></span>
					<h3>PRODUCT DESIGN</h3>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam</p>
				</div>
				<div class="servicesInfo">
					<span class="s-cion2"></span>
					<h3>PRODUCT DESIGN</h3>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam</p>
				</div>
				<div class="servicesInfo">
					<span class="s-cion3"></span>
					<h3>PRODUCT DESIGN</h3>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam</p>
				</div>
				<div class="servicesInfo">
					<span class="s-cion4"></span>
					<h3>PRODUCT DESIGN</h3>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam</p>
				</div>
				<div class="servicesInfo">
					<span class="s-cion5"></span>
					<h3>PRODUCT DESIGN</h3>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam</p>
				</div>
				<div class="servicesInfo">
					<span class="s-cion6"></span>
					<h3>PRODUCT DESIGN</h3>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam</p>
				</div>
			</div>
		</div>
	</div>
	<div id="portfolio">
		<div class="wrap">
			<div class="headTitle">
				<h2>PORTFOLIO</h2>
				<span></span>
			</div>
			<div class="portfolioBox">
				<div data-src="img/port-pic.jpg" class="imgBox">
				<!-- JQ对象.data("src")直接获取data-src的属性值 -->
					<img src="img/port-pic.jpg" alt="">
					<div class="imgMask">
						<span></span>
						<h3>Product Design</h3>
						<p>"LimeLight"</p>
					</div>
				</div>
				<div data-src="img/port-pic1.jpg" class="imgBox">
					<img src="img/port-pic1.jpg" alt="">
					<div class="imgMask">
						<span></span>
						<h3>Product Design</h3>
						<p>"LimeLight"</p>
					</div>
				</div>
				<div data-src="img/port-pic2.jpg" class="imgBox">
					<img src="img/port-pic2.jpg" alt="">
					<div class="imgMask">
						<span></span>
						<h3>Product Design</h3>
						<p>"LimeLight"</p>
					</div>
				</div>
				<div data-src="img/port-pic3.jpg" class="imgBox">
					<img src="img/port-pic3.jpg" alt="">
					<div class="imgMask">
						<span></span>
						<h3>Product Design</h3>
						<p>"LimeLight"</p>
					</div>
				</div>
				<div data-src="img/port-pic4.jpg" class="imgBox">
					<img src="img/port-pic4.jpg" alt="">
					<div class="imgMask">
						<span></span>
						<h3>Product Design</h3>
						<p>"LimeLight"</p>
					</div>
				</div>
				<div data-src="img/port-pic5.jpg" class="imgBox">
					<img src="img/port-pic5.jpg" alt="">
					<div class="imgMask">
						<span></span>
						<h3>Product Design</h3>
						<p>"LimeLight"</p>
					</div>
				</div>
				<div data-src="img/port-pic6.jpg" class="imgBox">
					<img src="img/port-pic6.jpg" alt="">
					<div class="imgMask">
						<span></span>
						<h3>Product Design</h3>
						<p>"LimeLight"</p>
					</div>
				</div>
				<div data-src="img/port-pic7.jpg" class="imgBox">
					<img src="img/port-pic7.jpg" alt="">
					<div class="imgMask">
						<span></span>
						<h3>Product Design</h3>
						<p>"LimeLight"</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="blog">
		<div class="wrap">
			<div class="headTitle">
				<h2>MY BLOG</h2>
				<span></span>		
			</div>
			<div class="blogBox">
				<ul class="blogBoxList">
				</ul>
				<ul class="blogBoxList">
				</ul>
				<ul class="blogBoxList" style="margin-right:0;">
				</ul>	
			</div>
			<div>
				<p class="moreArticals">Check Out My <a href="#">BLOG</a> And Subscribe To Get All The Updates</p>
			</div>
		</div>
	</div>
	<div id="projects">
		<div class="projectsBox">
			<span class="circle"></span>
			<div class="pro">
				<div>
					<p>79</p>
					<p>PROJECTS</p>
				</div>
				<span><i></i></span>
			</div>
			<div class="cli">
				<div>
					<p>25</p>
					<p>CLIENTS</p>
				</div>
				<span><i></i></span>
			</div>
			<div class="sat">
				<div>
					<p>100%</p>
					<p>SATISFACTION</p>
				</div>				
				<span><i></i></span>
			</div>				
		</div>
	</div>
	<div id="contact">
		<div class="wrap">
			<p>Want To Discuss Any Creative Projct ? 
				<a href="welcome/contact">Contact Me</a>
			</p>
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
	<script src="js/require.js" data-main="js/index.js"></script>
	<script src="js/common.js"></script>
</body>
</html>

