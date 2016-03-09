require(["jquery"],function($){

	//portfolio
	$(".imgBox").hover(function(){
		$(this).children(".imgMask").stop().animate({
			opacity:0.84
		});
		$(this).children("img").stop().animate({
			width:305,
			height:193,
			marginLeft:-10,
			marginTop:-6
		});
	},function(){
		$(this).children(".imgMask").stop().animate({
			opacity:0
		});
		$(this).children("img").stop().animate({
			width:285,
			height:180,
			marginLeft:0,
			marginTop:0
		});
	});

	//blog
	$blogHeadTitle = $("#blog .headTitle");
	var iHeadTitleTop = $blogHeadTitle.offset().top,
		 iHeadTitleHeight = $blogHeadTitle.height();
	var bLoad = true;//判断是否该加载新数据
	var bLoaded = false;//判断本次请求的数据是不是加载完毕
	var isEnd = false;//判断是不是加载完数据中的所有数据
	var page = 0;//控制分页

	//查找最短的ul
	function getMinUl() {
		$blogList = $(".blogBoxList");
		var $minUl = $blogList.eq(0);
		for(var i=1;i<$blogList.length;i++) {
			if($blogList.eq(i).height() < $minUl.height()) {
				$minUl = $blogList.eq(i);
			}
		}
		return $minUl;
	}

	$(window).on("scroll",function(){
		if($(window).height()+$(window).scrollTop()>=iHeadTitleTop+iHeadTitleHeight && !isEnd) {
			if(bLoad) {
				bLoad = false;
				$.get("welcome/get_articles?page="+page, function(res){
					if(!res.isEnd) {
						for(var i=0;i<res.data.length;i++) {
							var blog = res.data[i];
							var html = '<li>'
											+'<a href="welcome/detail?blog_id='+blog.blog_id+'"><img src="img/blog-post.jpg" alt=""></a>'
											+'<div class="blogInfo">'
												+'<h3><a href="#">'+blog.title+'</a></h3>'
												+'<span>'+blog.admin_name+'| <a href="#">13 comments</a></span>'
												+'<p>'+blog.content+'</p>'
												+'<a href="" class="seeMore">SEE MORE</a>'
											+'</div>'
										+'</li>';
							var $minUl = getMinUl();
							$minUl.append(html);
						}
						bLoaded = true;
						page+=6;
					}else {
						isEnd = true;
					}
				},'json');
			}

			var $minUl = getMinUl();
			if($(window).height()+$(window).scrollTop() >= $minUl.offset().top+$minUl.height() && bLoaded) {
				bLoad = true;
				bLoaded = false;
			}
		}
	});
});