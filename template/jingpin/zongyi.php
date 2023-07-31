<?php
include 'head.php';
$zy='active';
$leixing="zongyi";
include 'getlist.php';
include 'system/zongyi.php';
?>
<title>追综艺<?php echo $are4.$ac4.$type4;?>-最新好看综艺排行-<?php echo $mkcms_seoname;?></title>
<meta name="keywords" content="追综艺,最新综艺,好看综艺,最新综艺排行,<?php echo $mkcms_keywords;?>">
<meta name="description" content="<?php echo $mkcms_description;?>">
</head>
<body style="padding: 0;">
<style type="text/css">.stui-header__top{ background: linear-gradient(to bottom, rgba(0,0,0,0.7) 0%,rgba(0,0,0,0) 100%);}.stui-header__top.headroom--not-top{ background: #292838;}.am-slider-desc {background-color: rgba(0,0,0,.7);width: 100%;color: #f8f8f8}.am-slider-content {background-color: rgba(0,0,0,.7);position: absolute;bottom: 0;width: 100%;color: #e4dddd}h3.am-slider-title {color: #fff;text-align: center}
</style>
<?php include 'header.php';?>
<!-- 幻灯片 -->
<div id="banner" data-ride="carousel" class="stui-banner carousel slide">
<a class="carousel-control left" href="#banner" data-slide="prev"><i class="icon iconfont icon-back"></i></a>
<a class="carousel-control right" href="#banner" data-slide="next"><i class="icon iconfont icon-more"></i></a>
<div class="carousel-inner">
<?php $i=0;while ($i<6){
$one=$listc['data']['lists'][$i]['title'];//标题
$two=$listc['data']['lists'][$i]['pic_lists'][0]['url'];//图片
$three=$listc['data']['lists'][$i]['comment'];//简介
$four=$listc['data']['lists'][$i]['ent_id'];//链接
echo '<div class="item stui-banner__item ';
if ($i<1){echo 'active';}
echo '"><a class="stui-banner__pic" href="vod/va/',$four,'.html" alt="',$one,'" style="background: url(',$two,') rgba(98,71,136,0) no-repeat; background-position: center center; background-size: cover; display: block; width: 100%; height: 100%;" title="',$one,'"><div class="am-slider-desc"><div class="am-slider-content"><h3 class="am-slider-title">',$one,' - ',$three,'</h3><p></p></div></div></a></div>';$i++;}?>
</div>
</div>
<style type="text/css">
	.stui-banner__pic{ padding-top: 29%; background-position: center center !important;}
	@media (max-width:1023px){.stui-banner__pic{ padding-top: 40%; background-position: 50% 50% !important; background-size: cover !important;}}
</style><!-- 幻灯片 -->
<div class="container">
	<div class="row">
		<?php echo $mkcms_ad14; ?>
		<div class="stui-pannel stui-pannel-bg clearfix">
			<div class="stui-pannel-box">
			<div class="stui-pannel_hd">
			<div class="stui-pannel__head active bottom-line clearfix">
			<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-list"></use></svg>综艺</h3>
			</div>
			</div>
			<!-- 筛选 --> 
<ul class="stui-screen__list type-slide bottom-line-dot clearfix up-ul1">  
<li><span class="text-muted">按类型</span></li>
<?php echo '<li><a href="zongyi__',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">全部</a></li>
<li><a href="zongyi_脱口秀_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">脱口秀</a></li>
<li><a href="zongyi_真人秀_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">真人秀</a></li>
<li><a href="zongyi_选秀_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">选秀</a></li>
<li><a href="zongyi_八卦_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">八卦</a></li>
<li><a href="zongyi_访谈_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">访谈</a></li>
<li><a href="zongyi_情感_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">情感</a></li>
<li><a href="zongyi_生活_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">生活</a></li>
<li><a href="zongyi_晚会_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">晚会</a></li>
<li><a href="zongyi_搞笑_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">搞笑</a></li>
<li><a href="zongyi_音乐_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">音乐</a></li>
<li><a href="zongyi_时尚_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">时尚</a></li>
<li><a href="zongyi_游戏_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">游戏</a></li>
<li><a href="zongyi_少儿_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">少儿</a></li>
<li><a href="zongyi_体育_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">体育</a></li>
<li><a href="zongyi_纪实_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">纪实</a></li>
<li><a href="zongyi_科教_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">科教</a></li>
<li><a href="zongyi_曲艺_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">曲艺</a></li>
<li><a href="zongyi_歌舞_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">歌舞</a></li>
<li><a href="zongyi_财经_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">财经</a></li>
<li><a href="zongyi_汽车_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">汽车</a></li>
<li><a href="zongyi_播报_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">播报</a></li>
<li><a href="zongyi_其他_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">其他</a></li>
</ul>
<ul class="stui-screen__list type-slide clearfix up-ul2">  
<li><span class="text-muted">按明星</span></li>
<li><a href="zongyi_',$cs0,'__',$cs2,'_',$cs3,'_',$cs4,'.html">全部</a></li>
<li><a href="zongyi_',$cs0,'_邓超_',$cs2,'_',$cs3,'_',$cs4,'.html">邓超</a></li>
<li><a href="zongyi_',$cs0,'_陈赫_',$cs2,'_',$cs3,'_',$cs4,'.html">陈赫</a></li>
<li><a href="zongyi_',$cs0,'_何炅_',$cs2,'_',$cs3,'_',$cs4,'.html">何炅</a></li>
<li><a href="zongyi_',$cs0,'_汪涵_',$cs2,'_',$cs3,'_',$cs4,'.html">汪涵</a></li>
<li><a href="zongyi_',$cs0,'_王俊凯_',$cs2,'_',$cs3,'_',$cs4,'.html">王俊凯</a></li>
<li><a href="zongyi_',$cs0,'_黄磊_',$cs2,'_',$cs3,'_',$cs4,'.html">黄磊</a></li>
<li><a href="zongyi_',$cs0,'_谢娜_',$cs2,'_',$cs3,'_',$cs4,'.html">谢娜</a></li>
<li><a href="zongyi_',$cs0,'_黄渤_',$cs2,'_',$cs3,'_',$cs4,'.html">黄渤</a></li>
<li><a href="zongyi_',$cs0,'_周杰伦_',$cs2,'_',$cs3,'_',$cs4,'.html">周杰伦</a></li>
<li><a href="zongyi_',$cs0,'_吴亦凡_',$cs2,'_',$cs3,'_',$cs4,'.html">吴亦凡</a></li>
<li><a href="zongyi_',$cs0,'_赵薇_',$cs2,'_',$cs3,'_',$cs4,'.html">赵薇</a></li>
<li><a href="zongyi_',$cs0,'_薛之谦_',$cs2,'_',$cs3,'_',$cs4,'.html">薛之谦</a></li>
<li><a href="zongyi_',$cs0,'_岳云鹏_',$cs2,'_',$cs3,'_',$cs4,'.html">岳云鹏</a></li>
<li><a href="zongyi_',$cs0,'_王嘉尔_',$cs2,'_',$cs3,'_',$cs4,'.html">王嘉尔</a></li>
<li><a href="zongyi_',$cs0,'_鹿晗_',$cs2,'_',$cs3,'_',$cs4,'.html">鹿晗</a></li>
<li><a href="zongyi_',$cs0,'_杨幂_',$cs2,'_',$cs3,'_',$cs4,'.html">杨幂</a></li>
<li><a href="zongyi_',$cs0,'_沈腾_',$cs2,'_',$cs3,'_',$cs4,'.html">沈腾</a></li>
<li><a href="zongyi_',$cs0,'_罗志祥_',$cs2,'_',$cs3,'_',$cs4,'.html">罗志祥</a></li>
<li><a href="zongyi_',$cs0,'_张艺兴_',$cs2,'_',$cs3,'_',$cs4,'.html">张艺兴</a></li>
<li><a href="zongyi_',$cs0,'_潘玮柏_',$cs2,'_',$cs3,'_',$cs4,'.html">潘玮柏</a></li>
<li><a href="zongyi_',$cs0,'_华晨宇_',$cs2,'_',$cs3,'_',$cs4,'.html">华晨宇</a></li>
<li><a href="zongyi_',$cs0,'_李维嘉_',$cs2,'_',$cs3,'_',$cs4,'.html">李维嘉</a></li>
<li><a href="zongyi_',$cs0,'_钱枫_',$cs2,'_',$cs3,'_',$cs4,'.html">钱枫</a></li>
<li><a href="zongyi_',$cs0,'_宋小宝_',$cs2,'_',$cs3,'_',$cs4,'.html">宋小宝</a></li>
<li><a href="zongyi_',$cs0,'_贾玲_',$cs2,'_',$cs3,'_',$cs4,'.html">贾玲</a></li>
<li><a href="zongyi_',$cs0,'_沙溢_',$cs2,'_',$cs3,'_',$cs4,'.html">沙溢</a></li>
<li><a href="zongyi_',$cs0,'_涂磊_',$cs2,'_',$cs3,'_',$cs4,'.html">涂磊</a></li>
<li><a href="zongyi_',$cs0,'_撒贝宁_',$cs2,'_',$cs3,'_',$cs4,'.html">撒贝宁</a></li>
</ul>
<ul class="stui-screen__list type-slide bottom-line-dot clearfix up-ul3"> 
<li><span class="text-muted">按地区</span></li>
<li><a href="zongyi_',$cs0,'_',$cs1,'__',$cs3,'_',$cs4,'.html">全部</a></li></li>
<li><a href="zongyi_',$cs0,'_',$cs1,'_大陆_',$cs3,'_',$cs4,'.html">大陆</a></li>
<li><a href="zongyi_',$cs0,'_',$cs1,'_台湾_',$cs3,'_',$cs4,'.html">台湾</a></li>
<li><a href="zongyi_',$cs0,'_',$cs1,'_韩国_',$cs3,'_',$cs4,'.html">韩国</a></li>
<li><a href="zongyi_',$cs0,'_',$cs1,'_日本_',$cs3,'_',$cs4,'.html">日本</a></li>
<li><a href="zongyi_',$cs0,'_',$cs1,'_欧美_',$cs3,'_',$cs4,'.html">欧美</a></li>
<li><a href="zongyi_',$cs0,'_',$cs1,'_香港_',$cs3,'_',$cs4,'.html">香港</a></li>
</ul>';?>
<!-- end 筛选 -->
			</div>
			<div class="stui-pannel_hd">
				<div class="stui-pannel__head active bottom-line clearfix">
					<span class="more text-muted pull-right hidden-xs">千万部VIP视频免费等你观看</span>
					<ul class="nav nav-head">
					<li <?php if ($cs3=="rankhot"){echo 'class="active"';}elseif($cs3=="createtime"){}else{ echo 'class="active"';};?>><a href="zongyi_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_rankhot_<?php echo $cs4 ?>.html">最近热映</a></li>
					<li <?php if ($cs3=="ranklatest"){echo 'class="active"';}else{};?>><a href="zongyi_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_ranklatest_<?php echo $cs4 ?>.html">最新上映</a></li>
					</ul>
				</div>
			</div>
			<div class="stui-pannel_bd">
				<ul class="stui-vodlist clearfix">
				<?php
				$i=0;
				while($i<$pagecount){
		$img = $list['data']['movies'][$i]['cdncover'];//图片
        $title = $list['data']['movies'][$i]['title'];  //名字
        $tag = $list['data']['movies'][$i]['tag'];//综艺更新期
        $jieshao = $list['data']['movies'][$i]['lasttitle'];  //介绍
        $ccb =  $list['data']['movies'][$i]['id']; //链接	
				        echo '<li class="col-md-7 col-sm-4 col-xs-3 ';
						if ($i>=33){echo 'hidden-xs';}
						echo '"><div class="stui-vodlist__box stui-vodlist__bg"><a class="stui-vodlist__thumb lazyload img-shadow" href="vod/va/',$ccb,'.html" title="',$title,'" data-original="',$img,'" style="background-image: url(', $img, ');"><span class="play hidden-xs"></span>';
						echo '<span class="pic-tag pic-tag-b">',$tag,'</span></a><div class="stui-vodlist__detail active"><h4 class="title text-overflow"><a href="va/',$ccb,'.html" title="',$title,'">',$title,'</a></h4><p class="text text-overflow text-muted hidden-xs">',$jieshao,'</p></div></div></li>';
						$i++;}?>
				</ul>
			</div>
		</div>
	</div>
</div>
<ul class="stui-page text-center cleafix">
<?php include('system/fenye.php');?>
</ul>
<?php  include 'footer.php';?>