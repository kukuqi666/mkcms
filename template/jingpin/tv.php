<?php
include 'head.php';
$tv='active';
$leixing='dianshi';
include 'getlist.php';
include 'system/tv.php';
?>
<title>追热剧<?php echo $yea2.$are2.$ac2.$type2;?>-最新剧集排行-<?php echo $mkcms_seoname;?></title>
<meta name="keywords" content="追热剧-最新剧集-好看剧集-最新剧集排行,<?php echo $mkcms_keywords;?>">
<meta name="description" content="<?php echo $mkcms_description;?>">
</head>
<body style="padding: 0;">
<style type="text/css">
.stui-header__top{ background: linear-gradient(to bottom, rgba(0,0,0,0.7) 0%,rgba(0,0,0,0) 100%)}.stui-header__top.headroom--not-top{ background: #292838}.am-slider-desc{background-color: rgba(0,0,0,.7);width: 100%;color: #f8f8f8}.am-slider-content {background-color: rgba(0,0,0,.7);position: absolute;bottom: 0;width: 100%;color: #e4dddd;}h3.am-slider-title{color:#fff;text-align:center}
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
echo '"><a class="stui-banner__pic" href="vod/tv/',$four,'.html" alt="',$one,'" style="background: url(',$two,') rgba(98,71,136,0) no-repeat; background-position: center center; background-size: cover; display: block; width: 100%; height: 100%;" title="',$one,'"><div class="am-slider-desc"><div class="am-slider-content"><h3 class="am-slider-title">',$one,' - ',$three,'</h3><p></p></div></div></a></div>';$i++;}?>
</div>
</div>
<style type="text/css">
.stui-banner__pic{ padding-top: 29%; background-position: center center !important}@media (max-width:1023px){.stui-banner__pic{ padding-top: 40%; background-position: 50% 50% !important;background-size: cover !important}}
</style><!-- 幻灯片 -->
<div class="container">
	<div class="row">
		<?php echo $mkcms_ad12; ?>
		<div class="stui-pannel stui-pannel-bg clearfix">
			<div class="stui-pannel-box">
				<div class="stui-pannel_hd">
					<div class="stui-pannel__head active bottom-line clearfix">
					<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-list"></use></svg>剧集</h3></div>
				</div>
<ul class="stui-screen__list type-slide bottom-line-dot clearfix up-ul1">
<li><span class="text-muted">按类型</span></li>
<?php echo '<li><a href="tv__',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">全部</a></li>
<li><a href="tv_言情_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">言情</a></li>
<li><a href="tv_伦理_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">伦理</a></li>
<li><a href="tv_喜剧_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">喜剧</a></li>
<li><a href="tv_悬疑_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">悬疑</a></li>
<li><a href="tv_都市_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">都市</a></li>
<li><a href="tv_偶像_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">偶像</a></li>
<li><a href="tv_古装_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">古装</a></li>
<li><a href="tv_军事_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">军事</a></li>
<li><a href="tv_警匪_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">警匪</a></li>
<li><a href="tv_历史_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">历史</a></li>
<li><a href="tv_武侠_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">武侠</a></li>
<li><a href="tv_科幻_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">科幻</a></li>
<li><a href="tv_宫廷_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">宫廷</a></li>
<li><a href="tv_情景_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">情景</a></li>
<li><a href="tv_动作_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">动作</a></li>
<li><a href="tv_励志_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">励志</a></li>
<li><a href="tv_神话_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">神话</a></li>
<li><a href="tv_谍战_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">谍战</a></li>
<li><a href="tv_粤语_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">粤语</a></li>
<li><a href="tv_其他_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">其他</a></li>
</ul> 
<ul class="stui-screen__list type-slide bottom-line-dot clearfix up-ul2">
<li><span class="text-muted">按地区</span></li>
<li><a href="tv_',$cs0,'_',$cs1,'__',$cs3,'_',$cs4,'_',$cs5,'.html">全部</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_大陆_',$cs3,'_',$cs4,'_',$cs5,'.html">大陆</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_香港_',$cs3,'_',$cs4,'_',$cs5,'.html">香港</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_台湾_',$cs3,'_',$cs4,'_',$cs5,'.html">台湾</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_韩国_',$cs3,'_',$cs4,'_',$cs5,'.html">韩国</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_泰国_',$cs3,'_',$cs4,'_',$cs5,'.html">泰国</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_日本_',$cs3,'_',$cs4,'_',$cs5,'.html">日本</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_美国_',$cs3,'_',$cs4,'_',$cs5,'.html">美国</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_英国_',$cs3,'_',$cs4,'_',$cs5,'.html">英国</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_新加坡_',$cs3,'_',$cs4,'_',$cs5,'.html">新加坡</a></li>
</ul>
<ul class="stui-screen__list type-slide clearfix up-ul3">
<li><span class="text-muted">按年份</span></li>
<li><a href="tv_',$cs0,'__',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">全部</a></li>
<li><a href="tv_',$cs0,'_2021_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">2021</a></li>
<li><a href="tv_',$cs0,'_2020_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">2020</a></li>
<li><a href="tv_',$cs0,'_2019_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">2019</a></li>
<li><a href="tv_',$cs0,'_2018_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">2018</a></li>
<li><a href="tv_',$cs0,'_2017_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">2017</a></li>
<li><a href="tv_',$cs0,'_2016_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">2016</a></li>
<li><a href="tv_',$cs0,'_2015_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">2015</a></li>
<li><a href="tv_',$cs0,'_2014_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">2014</a></li>
<li><a href="tv_',$cs0,'_2013_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">2013</a></li>
<li><a href="tv_',$cs0,'_2012_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">2012</a></li>
<li><a href="tv_',$cs0,'_2011_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">2011</a></li>
<li><a href="tv_',$cs0,'_2010_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">2010</a></li>
<li><a href="tv_',$cs0,'_2009_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">2009</a></li>
<li><a href="tv_',$cs0,'_2008_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">2008</a></li>
<li><a href="tv_',$cs0,'_2007_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">2007</a></li>
<li><a href="tv_',$cs0,'_other_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">更早</a></li>
</ul>
<ul class="stui-screen__list type-slide clearfix up-ul4">
<li><span class="text-muted">按明星</span></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_all_',$cs4,'_',$cs5,'.html">全部</a></li>';
if($cs2==""){
echo '<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_杨幂_',$cs4,'_',$cs5,'.html">杨幂</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_热巴_',$cs4,'_',$cs5,'.html">热巴</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_郑爽_',$cs4,'_',$cs5,'.html">郑爽</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_胡歌_',$cs4,'_',$cs5,'.html">胡歌</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_罗晋_',$cs4,'_',$cs5,'.html">罗晋</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_陈坤_',$cs4,'_',$cs5,'.html">陈坤</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_徐峥_',$cs4,'_',$cs5,'.html">徐峥</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_唐嫣_',$cs4,'_',$cs5,'.html">唐嫣</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_祖峰_',$cs4,'_',$cs5,'.html">祖峰</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_张嘉译_',$cs4,'_',$cs5,'.html">张嘉译</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_赵丽颖_',$cs4,'_',$cs5,'.html">赵丽颖</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_张一山_',$cs4,'_',$cs5,'.html">张一山</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_吴秀波_',$cs4,'_',$cs5,'.html">吴秀波</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_刘亦菲_',$cs4,'_',$cs5,'.html">刘亦菲</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_李易峰_',$cs4,'_',$cs5,'.html">李易峰</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_周冬雨_',$cs4,'_',$cs5,'.html">周冬雨</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_雷佳音_',$cs4,'_',$cs5,'.html">雷佳音</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_贾乃亮_',$cs4,'_',$cs5,'.html">贾乃亮</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_秦海璐_',$cs4,'_',$cs5,'.html">秦海璐</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_于和伟_',$cs4,'_',$cs5,'.html">于和伟</a></li>';
}
if($cs2=="大陆"){
echo '<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_孙俪_',$cs4,'_',$cs5,'.html">孙俪</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_杨幂_',$cs4,'_',$cs5,'.html">杨幂</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_文章_',$cs4,'_',$cs5,'.html">文章</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_吴秀波_',$cs4,'_',$cs5,'.html">吴秀波</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_海清_',$cs4,'_',$cs5,'.html">海清</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_黄渤_',$cs4,'_',$cs5,'.html">黄渤</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_刘诗诗_',$cs4,'_',$cs5,'.html">刘诗诗</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_林永健_',$cs4,'_',$cs5,'.html">林永健</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_刘涛_',$cs4,'_',$cs5,'.html">刘涛</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_于震_',$cs4,'_',$cs5,'.html">于震</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_唐嫣_',$cs4,'_',$cs5,'.html">唐嫣</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_刘亦菲_',$cs4,'_',$cs5,'.html">刘亦菲</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_范冰冰_',$cs4,'_',$cs5,'.html">范冰冰</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_胡歌_',$cs4,'_',$cs5,'.html">胡歌</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_黄晓明_',$cs4,'_',$cs5,'.html">黄晓明</a></li>';
}
if($cs2=="香港"){
echo '<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_蔡少芬_',$cs4,'_',$cs5,'.html">蔡少芬</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_陈浩民_',$cs4,'_',$cs5,'.html">陈浩民</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_佘诗曼_',$cs4,'_',$cs5,'.html">佘诗曼</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_宣萱_',$cs4,'_',$cs5,'.html">宣萱</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_张卫健_',$cs4,'_',$cs5,'.html">张卫健</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_谢天华_',$cs4,'_',$cs5,'.html">谢天华</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_欧阳震华_',$cs4,'_',$cs5,'.html">欧阳震华</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_林保怡_',$cs4,'_',$cs5,'.html">林保怡</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_陈豪_',$cs4,'_',$cs5,'.html">陈豪</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_胡杏儿_',$cs4,'_',$cs5,'.html">胡杏儿</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_刘恺威_',$cs4,'_',$cs5,'.html">刘恺威</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_黎耀祥_',$cs4,'_',$cs5,'.html">黎耀祥</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_邓萃雯_',$cs4,'_',$cs5,'.html">邓萃雯</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_林峰_',$cs4,'_',$cs5,'.html">林峰</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_张智霖_',$cs4,'_',$cs5,'.html">张智霖</a></li>';
}
if($cs2=="台湾"){
echo '<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_林心如_',$cs4,'_',$cs5,'.html">林心如</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_霍建华_',$cs4,'_',$cs5,'.html">霍建华</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_陈乔恩_',$cs4,'_',$cs5,'.html">陈乔恩</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_吴奇隆_',$cs4,'_',$cs5,'.html">吴奇隆</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_林依晨_',$cs4,'_',$cs5,'.html">林依晨</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_明道_',$cs4,'_',$cs5,'.html">明道</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_贾静雯_',$cs4,'_',$cs5,'.html">贾静雯</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_言承旭_',$cs4,'_',$cs5,'.html">言承旭</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_郑元畅_',$cs4,'_',$cs5,'.html">郑元畅</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_贺军翔_',$cs4,'_',$cs5,'.html">贺军翔</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_杨丞琳_',$cs4,'_',$cs5,'.html">杨丞琳</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_徐熙媛_',$cs4,'_',$cs5,'.html">徐熙媛</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_安以轩_',$cs4,'_',$cs5,'.html">安以轩</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_何润东_',$cs4,'_',$cs5,'.html">何润东</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_周渝民_',$cs4,'_',$cs5,'.html">周渝民</a></li>';
}
if($cs2=="韩国"){
echo '<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_宋慧乔_',$cs4,'_',$cs5,'.html">宋慧乔</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_尹恩惠_',$cs4,'_',$cs5,'.html">尹恩惠</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_李多海_',$cs4,'_',$cs5,'.html">李多海</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_宋承宪_',$cs4,'_',$cs5,'.html">宋承宪</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_玄彬_',$cs4,'_',$cs5,'.html">玄彬</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_张赫_',$cs4,'_',$cs5,'.html">张赫</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_金基范_',$cs4,'_',$cs5,'.html">金基范</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_文根英_',$cs4,'_',$cs5,'.html">文根英</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_张根硕_',$cs4,'_',$cs5,'.html">张根硕</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_权相宇_',$cs4,'_',$cs5,'.html">权相宇</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_朴信惠_',$cs4,'_',$cs5,'.html">朴信惠</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_朴施厚_',$cs4,'_',$cs5,'.html">朴施厚</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_张娜拉_',$cs4,'_',$cs5,'.html">张娜拉</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_张东健_',$cs4,'_',$cs5,'.html">张东健</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_朴有天_',$cs4,'_',$cs5,'.html">朴有天</a></li>';
}
if($cs2=="泰国"){
echo '<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_杰西达邦_',$cs4,'_',$cs5,'.html">杰西达邦</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_马里奥毛瑞尔_',$cs4,'_',$cs5,'.html">马里奥毛瑞尔</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_Pong_',$cs4,'_',$cs5,'.html">Pong</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_查克利·彦纳姆_',$cs4,'_',$cs5,'.html">查克利·彦纳姆</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_素格力·威塞哥_',$cs4,'_',$cs5,'.html">素格力·威塞哥</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_卡曼妮·耶美肯_',$cs4,'_',$cs5,'.html">卡曼妮·耶美肯</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_拼塔安_',$cs4,'_',$cs5,'.html">拼塔安</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_Ken_',$cs4,'_',$cs5,'.html">Ken</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_Aum_',$cs4,'_',$cs5,'.html">Aum</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_Weir_',$cs4,'_',$cs5,'.html">Weir</a></li>';
}
if($cs2=="日本"){
echo '<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_堀北真希_',$cs4,'_',$cs5,'.html">堀北真希</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_反町隆史_',$cs4,'_',$cs5,'.html">反町隆史</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_江口洋介_',$cs4,'_',$cs5,'.html">江口洋介</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_广末凉子_',$cs4,'_',$cs5,'.html">广末凉子</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_小栗旬_',$cs4,'_',$cs5,'.html">小栗旬</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_木村拓哉_',$cs4,'_',$cs5,'.html">木村拓哉</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_户田惠梨香_',$cs4,'_',$cs5,'.html">户田惠梨香</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_松田翔太_',$cs4,'_',$cs5,'.html">松田翔太</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_常盘贵子_',$cs4,'_',$cs5,'.html">常盘贵子</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_织田裕二_',$cs4,'_',$cs5,'.html">织田裕二</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_竹内结子_',$cs4,'_',$cs5,'.html">竹内结子</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_妻夫木聪_',$cs4,'_',$cs5,'.html">妻夫木聪</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_福山雅治_',$cs4,'_',$cs5,'.html">福山雅治</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_中山裕介_',$cs4,'_',$cs5,'.html">中山裕介</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_观月亚理莎_',$cs4,'_',$cs5,'.html">观月亚理莎</a></li>';
}
if($cs2=="美国"){
echo '<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_妮娜·杜波夫_',$cs4,'_',$cs5,'.html">妮娜·杜波夫</a></li>
 <li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_安德鲁·林肯_',$cs4,'_',$cs5,'.html">安德鲁·林肯</a></li>
 <li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_吉姆·帕森斯_',$cs4,'_',$cs5,'.html">吉姆·帕森斯</a></li>
 <li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_布莱克·莱弗利_',$cs4,'_',$cs5,'.html">布莱克·莱弗利</a></li>
 <li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_艾伦·旁派_',$cs4,'_',$cs5,'.html">艾伦·旁派</a></li>
 <li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_詹妮弗·安妮斯顿_',$cs4,'_',$cs5,'.html">詹妮弗·安妮斯顿</a></li>
 <li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_艾米丽·万凯普_',$cs4,'_',$cs5,'.html">艾米丽·万凯普</a></li>
 <li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_泰瑞·海切尔_',$cs4,'_',$cs5,'.html">泰瑞·海切尔</a></li>
 <li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_托马斯·吉布森_',$cs4,'_',$cs5,'.html">托马斯·吉布森</a></li>
 <li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_贾德·帕达里克_',$cs4,'_',$cs5,'.html">贾德·帕达里克</a></li>
 <li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_内森·菲利安_',$cs4,'_',$cs5,'.html">内森·菲利安</a></li>
 <li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_詹妮弗·莫里森_',$cs4,'_',$cs5,'.html">詹妮弗·莫里森</a></li>';
}
if($cs2=="英国"){
echo '<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_本尼迪克特·康伯巴奇_',$cs4,'_',$cs5,'.html">本尼迪克特·康伯巴奇</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_克里斯·奥多德_',$cs4,'_',$cs5,'.html">克里斯·奥多德</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_比莉·派佩_',$cs4,'_',$cs5,'.html">比莉·派佩</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_道格拉斯·韩歇尔_',$cs4,'_',$cs5,'.html">道格拉斯·韩歇尔</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_鲁伯特·彭利·琼斯_',$cs4,'_',$cs5,'.html">鲁伯特·彭利·琼斯</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_伯恩·乔曼_',$cs4,'_',$cs5,'.html">伯恩·乔曼</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_休·博内威利_',$cs4,'_',$cs5,'.html">休·博内威利</a></li>
<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_大卫·苏切特_',$cs4,'_',$cs5,'.html">大卫·苏切特</a></li>';
}
if($cs2=="新加坡"){
echo '<li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_李南星_',$cs4,'_',$cs5,'.html">李南星</a></li>
  <li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_范文芳_',$cs4,'_',$cs5,'.html">范文芳</a></li>
  <li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_郑斌辉_',$cs4,'_',$cs5,'.html">郑斌辉</a></li>
  <li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_彭耀顺_',$cs4,'_',$cs5,'.html">彭耀顺</a></li>
  <li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_林湘萍_',$cs4,'_',$cs5,'.html">林湘萍</a></li>
  <li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_郭妃丽_',$cs4,'_',$cs5,'.html">郭妃丽</a></li>
  <li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_李铭顺_',$cs4,'_',$cs5,'.html">李铭顺</a></li>
  <li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_欧萱_',$cs4,'_',$cs5,'.html">欧萱</a></li>
  <li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_郭淑贤_',$cs4,'_',$cs5,'.html">郭淑贤</a></li>
  <li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_周初明_',$cs4,'_',$cs5,'.html">周初明</a></li>
  <li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_郑惠玉_',$cs4,'_',$cs5,'.html">郑惠玉</a></li>
  <li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_陈莉萍_',$cs4,'_',$cs5,'.html">陈莉萍</a></li>
  <li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_许美珍_',$cs4,'_',$cs5,'.html">许美珍</a></li>
  <li><a href="tv_',$cs0,'_',$cs1,'_',$cs2,'_曹国辉_',$cs4,'_',$cs5,'.html">曹国辉</a></li>';
}?>
</ul><!-- end 筛选 -->
			</div>
			<div class="stui-pannel_hd">
				<div class="stui-pannel__head active bottom-line clearfix">
					<span class="more text-muted pull-right hidden-xs">千万部VIP视频免费等你观看</span>
					<ul class="nav nav-head">
					<li<?php if ($cs4=="rankhot"){echo ' class="active"';}?>><a href="tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_rankhot_<?php echo $cs5 ?>.html">最近热映</a></li>
					<li<?php if ($cs4=="ranklatest"){echo ' class="active"';}else{};?>><a href="tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_ranklatest_<?php echo $cs5 ?>.html">最新上映</a></li>
					<li<?php if ($cs4=="rankpoint"){echo ' class="active"';}?>><a href="tv_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_rankpoint_<?php echo $cs5 ?>.html">最受好评</a></li>
                    </ul>
				</div>
			</div>
			<div class="stui-pannel_bd">
				<ul class="stui-vodlist clearfix">
					<?php
				$i=0;
				while($i<$pagecount){
        $img = $list['data']['movies'][$i]['cdncover'];
        $title = $list['data']['movies'][$i]['title'];
        $upinfo=$list['data']['movies'][$i]['upinfo'];
        $total=$list['data']['movies'][$i]['total'];
        if($upinfo==$total){$jishu='全集'.$total;}else{$jishu='更新至'.$upinfo.'集';}
        if($total=='0'){$jishu='';}
        $actor = $list['data']['movies'][$i]['actor'];  //演员
        $ccb =  $list['data']['movies'][$i]['id'];				    
						echo '<li class="col-md-7 col-sm-4 col-xs-3 ';
						if ($i>=33){echo 'hidden-xs';}
						echo '"><div class="stui-vodlist__box stui-vodlist__bg"><a class="stui-vodlist__thumb lazyload img-shadow" href="vod/tv/',$ccb,'.html" title="',$title,'" data-original="',$img,'" style="background-image: url(', $img, ');"><span class="play hidden-xs"></span>';
						echo '<span class="pic-tag pic-tag-b">',$jishu,'</span></a><div class="stui-vodlist__detail active"><h4 class="title text-overflow"><a href="',$ccb,'" title="',$title,'">',$title,'</a></h4><p class="text text-overflow text-muted hidden-xs">';
						$x=0;while($x<count($actor)) {echo $actor[$x].'/'; $x++;}
						echo '</p></div></div></li>';
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