<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>detail</title>
	<base href="<?php echo site_url(); ?>">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/single.css">
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
				<li><a href="admin/login" target="_blank"> ADMIN</a></li>
			</ul>
			<span class="navCloseIcon"></span>
		</div>			
	</div>
	<div id="single">
		<div class="wrap">
			<img src="img/single.jpg" alt="loading……">
			<h2>博客题目：<?php echo $blog ->title; ?></h2>
			<br>
			<p>发表时间：<?php echo $blog ->add_time; ?></p>
			<p class="singleInfo">博客内容：<?php echo $blog ->content; ?></p>
			<div class="commentList">
				<h5>Written by
					<a href="#" title="Posts by admin" rel="author"><?php echo $blog ->admin_name; ?></a>
				</h5>
				<img src="img/avatar.png" alt="loading">
				<p>View all posts by:<a href="#" title="Posts by admin" rel="author"><?php echo $blog ->admin_name; ?></a></p>
			</div>
			<div class="commentinfoList">
				<h2>COMMENT AREA</h2>
				<br>
				<div>
					<?php foreach($comments as $com) { 	?>
					<img src="img/comm.png" alt="" style="margin-right: 15px" >
					<div class="comdetail">
						<span><?php echo $com->comm_name;?></span> :
						<span style="margin-left: 10px"><?php echo $com->subject;?></span>
						<br>
						<span><?php echo $com->add_time;?></span>
					</div>
					<br>
					<?php } ?>

				</div>
			</div>
			<div class="commentArea">
				<h3>Add New Comment</h3>
					<input type="hidden" name="blog_id" value="<?php echo $this->input->get("blog_id"); ?>">
					<p>
						<label>Name</label>
						<span>*</span>
						<input type="text" class="inpute" name="name">
					</p>
					<p>
						<label>Email</label>
						<span>*</span>				
						<input type="text" class="inpute" name="email">
					</p>
					<p>
						<label>Website</label>		
						<input type="text" class="inpute" name="website">
					</p>
					<p>
						<label>Subject</label>
						<span>*</span>				
						<textarea class="inpute" name="subject"></textarea>
					</p>
					<p><input type="button" value="Submit Comment" id="submit"></p>
<!--				</form>-->
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
	<div id="toTop">		
	</div>
	<script src="js/require.js" data-main="js/common.js"></script>
	<script src="js/detail.js"></script>
</body>
</html>