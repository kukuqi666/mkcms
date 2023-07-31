<?php
include 'head.php';
$movie = 'actor';
$cs1 = $_GET['sex']; 
$cs2 = $_GET['area']; 
$cs3 = intval($_GET['page']);
if($cs3 == 0) {$cs3 = 1;} 
?>
<title>电影明星_电视剧明星_娱乐明星排行榜-最新最好看的电影推荐-<?php echo $mkcms_seoname; ?></title>
<meta name="keywords" content="电视剧明星,电影明星,娱乐明星,<?php echo $mkcms_keywords; ?>">
<meta name="description" content="为您提供男明星和女明星高清影视作品在线观看，其中包括知名演员周星驰,成龙,李连杰,甄子丹,杨幂,刘德华,李丽珍,周润发,尼古拉斯.凯奇,胡歌等大牌明星,<?php
echo $mkcms_description; ?>">
</head>
<body>
<?php include 'header.php'; ?>
<div class="container">
	<div class="row">
<?php echo $mkcms_ad11; ?>
		<div class="stui-pannel stui-pannel-bg clearfix">
			<div class="stui-pannel-box">
<div class="stui-pannel_hd">
<div class="stui-pannel__head active bottom-line clearfix">
<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-list"></use></svg>明星</h3></div>
</div>
<!-- 筛选 -->
<ul class="stui-screen__list type-slide bottom-line-dot clearfix up-ul1">
<li><span class="text-muted">地区</span></li>
<li><a href='actor-<?php echo $cs1 ?>--<?php echo $cs3 ?>.html'>全部</a></li>
<li><a href='actor-<?php echo $cs1 ?>-内地-<?php echo $cs3 ?>.html'>内地</a></li>
<li><a href='actor-<?php echo $cs1 ?>-香港-<?php echo $cs3 ?>.html'>香港</a></li>
<li><a href='actor-<?php echo $cs1 ?>-台湾-<?php echo $cs3 ?>.html'>台湾</a></li>
<li><a href='actor-<?php echo $cs1 ?>-日本-<?php echo $cs3 ?>.html'>日本</a></li>
<li><a href='actor-<?php echo $cs1 ?>-韩国-<?php echo $cs3 ?>.html'>韩国</a></li>
<li><a href='actor-<?php echo $cs1 ?>-美国-<?php echo $cs3 ?>.html'>美国</a></li>
<li><a href='actor-<?php echo $cs1 ?>-英国-<?php echo $cs3 ?>.html'>英国</a></li>
</ul>
<ul class="stui-screen__list type-slide bottom-line-dot clearfix up-ul2">
<li><span class="text-muted">性别</span></li>
<li><a href="actor--<?php echo $cs2 ?>-<?php echo $cs3 ?>.html">全部</a></li>
<li><a href="actor-男-<?php echo $cs2 ?>-<?php echo $cs3 ?>.html">男</a></li>
<li><a href="actor-女-<?php echo $cs2 ?>-<?php echo $cs3 ?>.html">女</a></li>
</ul>
<!-- end 筛选 -->
			</div>
			<div class="stui-pannel_bd">
			<ul class="stui-vodlist clearfix">
				<?php
$i = 0;
while ($i < $numcount) {
    $pic = $list['data'][$i]['pic'];
    $star = $list['data'][$i]['star'];
    echo '<li class="col-md-6 col-sm-4 col-xs-3"><div class="stui-vodlist__box stui-vodlist__bg"> <a class="stui-vodlist__thumb lazyload" href="mxstar_', $star, '_dy_1.html" title="', $star, '" data-original="', $pic, '"><span class="play hidden-xs"></span></a><div class="stui-vodlist__detail active"><h4 class="title text-overflow"><a href="mxstar_', $star, '_dy_1.html" title="', $star, '">', $star, '</a></h4></div></div></li>';
    $i++;
} ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<ul class="stui-page text-center cleafix">
<?php include ('system/actfy.php'); ?>
</ul>
<?php include 'footer.php'; ?>