<?php $fl='active';?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0"/>
<meta name="format-detection" content="telephone=no,email=no,date=no,address=no">
<link rel="stylesheet" href="/template/jingpin/css/zhibo.css">
<link href="/template/jingpin/css/aui.css" rel="styleSheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/template/jingpin/css/phone_style.css"/>
<title>福利</title>
<style> 
body {background-repeat: repeat;background-size: inherit;background-attachment: fixed;background-position: center center;background: url(/style/bg.jpg);}
.aui-slide-wrap {overflow: hidden;}
</style>
</head>
<body>
<div id="wrap" class="flex-wrap flex-vertical">
	<div id="main" class="flex-con" >
		<section class="aui-flexView">
			<section class="aui-scrollView">
			<a href="javascript:;"><img src="/template/jingpin/img/qicai.png"></a>
				<div class="aui-tab">
					<div class="tab-panel">
						<div class="tab-panel-item tab-active">
							<div class="tab-item">
							<?php echo $mkcms_fulicode;?>
							</div>
						</div>
					</div>
				</div>
			</section>
		</section>
	</div>
<div id="footer" class="border-t hidden-lg hidden-md" >
	<ul class="flex-wrap" style="font-weight:bold">
		<?php echo'<a class="flex-con paiban ',$index,'" href="/index.html"><li onclick="randomSwitchBtn(this);">首页</li></a>
		<a class="flex-con paiban ',$movie,'" href="/movie_____ranklatest_1.html"><li onclick="randomSwitchBtn(this);">电影</li></a>
		<a class="flex-con paiban ',$dt,'" href="/hall.html"><li onclick="randomSwitchBtn(this);">大厅</li></a>
		<a class="flex-con paiban ',$fl,'" href="/fuli.html"><li onclick="randomSwitchBtn(this);">福利</li></a>
		<a class="flex-con paiban ',$hy,'" href="/ucenter"><li onclick="randomSwitchBtn(this);">我的</li></a>'?>
	</ul>
</div>
</div>
</body>
</html>