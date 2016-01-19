<!DOCTYPE>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8">
		<style>
			body { margin: 0; }
			.image-bg {
				opacity: 1;
				display: block;
				min-width: 100%;
				min-height: 100%;
				width: 100%;
				height: 100%;
				position: absolute;
				top: 0;
				overflow: hidden;
			}
			img {
				min-width: 100%;
				min-height: 100%;
			}
			.video-bg {
				opacity: 1;
				display: block;
				width: 100%;
				height: 100%;
				position: absolute;
				top: 0;
				overflow: hidden;
				transition: all .5s linear 0s;
			}
			.video-bg .inner {
				width: 100%;
				height: 100%;
			}
			video {
				min-width: 100%;
				min-height: 100%;
			}
		</style>
	</head>
	<body>
		<div class="image-bg">
			<div class="inner">
				<img src="img/traffic2.jpg">
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
	</body>
</html>