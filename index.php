<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="x5-fullscreen" content="true">
	<title>Document</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>

<!-- header -->
<header class="header">
	<h1>hello world!</h1>
	<p>...</p>
</header>
<!-- header end -->
<section class="section"> 
	<div class="container pdL10 pdR10">
		<div class="tab-content">
			<div class="item">
				<h1 class="title">dns预解析</h1>
					<p>&lt; meta http-equiv="x-dns-prefetch-control" content="on" /&gt;</p>
					<p>&lt; link rel="dns-prefetch" href="...." /&gt;</p>
				<h1 class="title">测试列表</h1>
				<ul>
					<li class="list">
						<div class="list-body clearfix">
							<a href="##" class="fl mrgR10" class="list-img">
								<img src="images/9.jpg" alt="...">
							</a>
							<p class="list-text">
								<a href="##">
								这个系列，学习到了很多东西啊这个系列，学习到了很多东西啊这个系列，学习到了很多东西啊这个系列，学习到了很多东西啊...
								</a>
							</p>
						</div>
						<div class="list-footer">
							<div class="fl">
								<span class="list-state">
									<i class="fa fa-eye"></i>
									100
								</span>
								<time class="list-state">
									2小时前
								</time>
							</div>
							<button type="button">
								<i class="fa fa-thumbs-o-up"></i>
							</button>
							<button type="button" data-name="xiaoxinwu1">
								<i class="fa fa-commenting-o"></i>
							</button>
						</div>
					</li>
					<li class="list">
						<div class="list-body clearfix">
							<a href="##" class="fl mrgR10" class="list-img">
								<img src="images/9.jpg" alt="...">
							</a>
							<p class="list-text">
								<a href="##">
								这个系列，学习到了很多东西啊这个系列，学习到了很多东西啊这个系列，学习到了很多东西啊这个系列，学习到了很多东西啊...
								</a>
							</p>
						</div>
						<div class="list-footer">
							<div class="fl">
								<span class="list-state">
									<i class="fa fa-eye"></i>
									100
								</span>
								<time class="list-state">
									2小时前
								</time>
							</div>
							<button type="button">
								<i class="fa fa-thumbs-o-up"></i>
							</button>
							<button type="button" data-name="xiaoxinwu2">
								<i class="fa fa-commenting-o"></i>
							</button>
						</div>
					</li>
					<li class="list">
						<div class="list-body clearfix">
							<a href="##" class="fl mrgR10" class="list-img">
								<img src="images/9.jpg" alt="...">
							</a>
							<p class="list-text">
								<a href="##">
								这个系列，学习到了很多东西啊这个系列，学习到了很多东西啊这个系列，学习到了很多东西啊这个系列，学习到了很多东西啊...
								</a>
							</p>
						</div>
						<div class="list-footer">
							<div class="fl">
								<span class="list-state">
									<i class="fa fa-eye"></i>
									100
								</span>
								<time class="list-state">
									2小时前
								</time>
							</div>
							<button type="button">
								<i class="fa fa-thumbs-o-up"></i>
							</button>
							<button type="button" data-name="xiaoxinwu3">
								<i class="fa fa-commenting-o"></i>
							</button>
						</div>
					</li>
					<li class="list">
						<div class="list-body clearfix">
							<a href="##" class="fl mrgR10" class="list-img">
								<img src="images/9.jpg" alt="...">
							</a>
							<p class="list-text">
								<a href="##">
								这个系列，学习到了很多东西啊这个系列，学习到了很多东西啊这个系列，学习到了很多东西啊这个系列，学习到了很多东西啊...
								</a>
							</p>
						</div>
						<div class="list-footer">
							<div class="fl">
								<span class="list-state">
									<i class="fa fa-eye"></i>
									100
								</span>
								<time class="list-state">
									2小时前
								</time>
							</div>
							<button type="button">
								<i class="fa fa-thumbs-o-up"></i>
							</button>
							<button type="button" data-name="xiaoxinwu4">
								<i class="fa fa-commenting-o"></i>
							</button>
						</div>
					</li>
					
				</ul>
			</div>
		</div>
		
	</div>
</section>
<!-- js -->
<!-- <script src="js/jquery-1.11.3.min.js"></script> -->
<script src="js/zepto.min.js"></script>
<script>
	(function($){
		var UA=window.navigator.userAgent;
		var CLICK="click";
		if(/ipad|iphone|android/.test(UA)){
			CLICK="tap";
		}

		var btns=$("[type='button']","body");
		btns.each(function(){
			var $this=$(this);
			$this[CLICK](function(){
				getData("GET","php/test.php",{name:$this.data('name')},function(data){
					alert(data);
				});
			});
		});

		function getData(WAY,URL,POSTDATA,callBack){
			$.ajax({
					type:WAY,
					url:URL,
					data:POSTDATA,
					dataType:"json",
					success:function(data){
						callBack(data);
					}
			});
		}
	})(Zepto)
</script>
<!-- js end -->

<!-- footer -->
<footer class="footer">
	<div class="container">
		<ul class="footer-navbar clearfix">
			<li>
				<a href="##">
					<i class="fa fa-user"></i>
				</a>
			</li>
			<li>
				<a href="##">
					<i class="fa fa-users"></i>
				</a>
			</li>
			<li>
				<a href="##">
					<i class="fa fa-star-o"></i>
				</a>
			</li>
		</ul>
	</div>
</footer>
<!-- footer end -->
</body>
</html>