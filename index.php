<!DOCTYPE>
<html lang="zh-CN">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta charset="utf-8">
		<title>market data from EVEOnline serenity server</title>
		<link rel="stylesheet" href="css/includes/global.css">
		<link rel="stylesheet" href="css/includes/page.css">
		<link rel="stylesheet" href="css/includes/marquee.css">
		<link rel="stylesheet" href="css/index.css">
	</head>
	<body>
		<div class="image-bg">
			<div class="inner">
				<div class="bg"></div>
			</div>
		</div>
		<div class="video-bg">
			<div class="inner">
				<video autoplay="" loop="" muted="" id="vid2000">
						<source src="vid/traffic2.mp4" type="video/mp4" />
						<source src="vid/traffic2.webm" type="video/webm" />
				</video>
			</div>
		</div>
		<div id="goods-price-marquee"></div>
		<script src="js/tool/TranspMarquee/TranspMarquee.js"></script>
		<script>
			window.onload = function(){
				initMarquee("goods-price-marquee", "today_goods_price.json");
			}
		</script>
	</body>
</html>