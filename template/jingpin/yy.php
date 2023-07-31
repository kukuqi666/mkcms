<?php include 'head.php';$yy='active';$fl='active';?>
<title>美女舞曲-<?php echo $mkcms_seoname;?></title>
<meta name="keywords" content="美女,YY舞曲,<?php echo $mkcms_keywords;?>">
<meta name="description" content="<?php echo $mkcms_description;?>">
</head>
<body>
<?php include 'header.php';?>
<div class="container">
	<div class="row">
<?php echo $mkcms_ad15; ?>
		<div class="stui-pannel stui-pannel-bg clearfix">
			<div class="stui-pannel-box">
<div class="stui-pannel_hd">
<div class="stui-pannel__head active bottom-line clearfix">
<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-list"></use></svg>美女舞曲</h3></div>
</div>
<!-- 筛选 -->
<ul class="stui-screen__list type-slide bottom-line-dot clearfix up-ul1">
<li><span class="text-muted">按类型</span></li>
<li><a href="./yy.html">全部</a></li>
<li><a href="./yy_27_p1.html">热舞</a></li>
<li><a href="./yy_25_p1.html">动听</a></li>
<li><a href="./yy_26_p1.html">说唱</a></li>
<li><a href="./yy_28_p1.html">乐器</a></li>
<li><a href="./yy_29_p1.html">另类</a></li>
</ul>
<!-- end 筛选 -->
			</div>
			<div class="stui-pannel_bd">
				<ul class="stui-vodlist clearfix">
<?php
$surl = $mkcms_domain.'json/mnv.php?list='.$_GET['list'];
$list=json_decode(fileget2($surl,1),true);
$i=0;
while($i<20){
$qz1=$list['data'][$i]['cover'];
$xname=$list['data'][$i]['title'];
$xlink=$list['data'][$i]['link'];
$xtext=$list['data'][$i]['text'];
$bj=$list['data'][$i]['hot'];
					if ($i<20){
					echo '<li class="col-md-5 col-sm-4 col-xs-3 ';
					if ($i>=18){echo 'hidden-xs';}
					echo '">
					<div class="stui-vodlist__box  stui-vodlist__bg">
					<a class="stui-vodlist__thumb1 lazyload" href="/yplay/',$xlink,'" title="',$xname,'" data-original="',$qz1,'">
					<span class="play hidden-xs"></span>
					<span class="pic-text text-right">',$xtext,'</span></a>
					<div class="stui-vodlist__detail">
					<h4 class="title text-overflow"><a href="/yplay/',$xlink,'" title="',$xname,'">',$xname,'</a></h4>
					<p class="text text-overflow text-muted hidden-xs">',$bj,'次播放</p>
					</div>
					</div>
					</li>';}$i++;}?>
				</ul>
			</div>
		</div>
	</div>
</div>
<ul class="stui-page text-center cleafix">
	<div monitor-desc="分页" id="js-ew-page" data-block="js-ew-page"  class="ew-page">
	<?php
	ini_set('user_agent','Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.2; SV1; .NET CLR 1.1.4322)');
	if (empty($_GET['list'])) {
	$arta0= 'https://www.yy.com/shenqu/clist/t10025_p1.html';
	} else {
	$arta0= 'https://www.yy.com/shenqu/clist/t100'.$_GET['list'].'.html';}
	$arta2 = fileget2($arta0);
	$yeshu = strstr($arta2, "<ul class=\"pagination clf\">");
	$yeshu = strstr($yeshu, "</ul>", true);
	$yeshu = str_replace("<ul class=\"pagination clf\">", "", $yeshu);
	$yeshu = str_replace("<li><span class=\"more\">...</span></li>", "", $yeshu);
	$yeshu = str_replace("<li><span class=\"active\">", "<li class=\"active\"><a target='_self' class='on'>", $yeshu);
	$yeshu = str_replace("</span>", "</a>", $yeshu);
	$yeshu = str_replace("/shenqu/clist/t100", "yy_", $yeshu);
	$yeshu = str_replace("<li><span class=\"prev disable\">上一页</a></li>", "<li class=\"prev\"><a>上一页</a></li>", $yeshu);
	$yeshu = str_replace("<li><span class=\"prev disable\">下一页</a></li>","<li class=\"next\"><a>下一页</a></li>", $yeshu);
	echo $yeshu;
?>
	</div>
</ul>
<?php  include 'footer.php';?>