<?php
include 'head.php';
$movie='active';
$leixing='dianying';
include 'system/movie.php';
include 'getlist.php';
?>
<title>看电影<?php echo $yea1.$are1.$ac1.$type1;?>-最新最好看的电影推荐-<?php echo $mkcms_seoname;?></title>
<meta name="keywords" content="看电影,<?php echo $mkcms_keywords;?>">
<meta name="description" content="<?php echo $mkcms_description;?>">
</head>
<body style="padding: 0;">
<style type="text/css">
.stui-header__top{ background: linear-gradient(to bottom, rgba(0,0,0,0.7) 0%,rgba(0,0,0,0) 100%)}.stui-header__top.headroom--not-top{ background: #292838;}.am-slider-desc {background-color: rgba(0,0,0,.7);width: 100%;color: #f8f8f8}.am-slider-content {background-color: rgba(0,0,0,.7);position: absolute;bottom: 0;width: 100%;color: #e4dddd}h3.am-slider-title {color: #fff;text-align: center}
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
echo '"><a class="stui-banner__pic" href="vod/m/',$four,'.html" alt="',$one,'" style="background: url(',$two,') rgba(98,71,136,0) no-repeat; background-position: center center; background-size: cover; display: block; width: 100%; height: 100%;" title="',$one,'"><div class="am-slider-desc"><div class="am-slider-content"><h3 class="am-slider-title">',$one,' - ',$three,'</h3><p></p></div></div></a></div>';$i++;}?>
</div>
</div>
<style type="text/css">
.stui-banner__pic{ padding-top: 29%; background-position: center center !important}@media (max-width:1023px){.stui-banner__pic{ padding-top: 40%; background-position: 50% 50% !important; background-size: cover !important}}
</style><!-- 幻灯片 -->
<div class="container">
	<div class="row">
<?php echo $mkcms_ad11; ?>
		<div class="stui-pannel stui-pannel-bg clearfix">
			<div class="stui-pannel-box">
<div class="stui-pannel_hd">
<div class="stui-pannel__head active bottom-line clearfix">
<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-list"></use></svg>电影</h3></div>
</div>
<!-- 筛选 -->
<ul class="stui-screen__list type-slide bottom-line-dot clearfix up-ul1">
<li><span class="text-muted">按类型</span></li>
<?php echo '<li><a href="movie__',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">全部</a></li>
<li><a href="movie_喜剧_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">喜剧</a></li>
<li><a href="movie_爱情_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">爱情</a></li>
<li><a href="movie_动作_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">动作</a></li>
<li><a href="movie_恐怖_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">恐怖</a></li>
<li><a href="movie_科幻_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">科幻</a></li>
<li><a href="movie_剧情_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">剧情</a></li>
<li><a href="movie_犯罪_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">犯罪</a></li>
<li><a href="movie_奇幻_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">奇幻</a></li>
<li><a href="movie_战争_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">战争</a></li>
<li><a href="movie_悬疑_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">悬疑</a></li>
<li><a href="movie_动画_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">动画</a></li>
<li><a href="movie_文艺_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">文艺</a></li>
<li><a href="movie_纪录_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">纪录</a></li>
<li><a href="movie_传记_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">传记</a></li>
<li><a href="movie_歌舞_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">歌舞</a></li>
<li><a href="movie_古装_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">古装</a></li>
<li><a href="movie_历史_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">历史</a></li>
<li><a href="movie_惊悚_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">惊悚</a></li>
<li><a href="movie_其他_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">其他</a></li>
</ul>
<ul class="stui-screen__list type-slide bottom-line-dot clearfix up-ul2">
<li><span class="text-muted">按地区</span></li>
<li><a href="movie_',$cs0,'_',$cs1,'__',$cs3,'_',$cs4,'_',$cs5,'.html">全部</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_美国_',$cs3,'_',$cs4,'_',$cs5,'.html">美国</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_大陆_',$cs3,'_',$cs4,'_',$cs5,'.html">大陆</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_香港_',$cs3,'_',$cs4,'_',$cs5,'.html">香港</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_韩国_',$cs3,'_',$cs4,'_',$cs5,'.html">韩国</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_日本_',$cs3,'_',$cs4,'_',$cs5,'.html">日本</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_法国_',$cs3,'_',$cs4,'_',$cs5,'.html">法国</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_英国_',$cs3,'_',$cs4,'_',$cs5,'.html">英国</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_德国_',$cs3,'_',$cs4,'_',$cs5,'.html">德国</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_台湾_',$cs3,'_',$cs4,'_',$cs5,'.html">台湾</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_泰国_',$cs3,'_',$cs4,'_',$cs5,'.html">泰国</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_印度_',$cs3,'_',$cs4,'_',$cs5,'.html">印度</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_其他_',$cs3,'_',$cs4,'_',$cs5,'.html">其他</a></li>
</ul>
<ul class="stui-screen__list type-slide clearfix up-ul3">
<li><span class="text-muted">按年份</span></li>
<li><a href="movie_',$cs0,'__',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">全部</a></li>
<li><a href="movie_',$cs0,'_2021_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">2021</a></li>
<li><a href="movie_',$cs0,'_2020_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">2020</a></li>
<li><a href="movie_',$cs0,'_2019_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">2019</a></li>
<li><a href="movie_',$cs0,'_2018_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">2018</a></li>
<li><a href="movie_',$cs0,'_2017_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">2017</a></li>
<li><a href="movie_',$cs0,'_2016_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">2016</a></li>
<li><a href="movie_',$cs0,'_2015_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">2015</a></li>
<li><a href="movie_',$cs0,'_2014_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">2014</a></li>
<li><a href="movie_',$cs0,'_2013_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">2013</a></li>
<li><a href="movie_',$cs0,'_2012_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">2012</a></li>
<li><a href="movie_',$cs0,'_2011_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">2011</a></li>
<li><a href="movie_',$cs0,'_2010_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">2010</a></li>
<li><a href="movie_',$cs0,'_2009_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">2009</a></li>
<li><a href="movie_',$cs0,'_2008_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">2008</a></li>
<li><a href="movie_',$cs0,'_2007_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">2007</a></li>
<li><a href="movie_',$cs0,'_other_',$cs2,'_',$cs3,'_',$cs4,'_',$cs5,'.html">更早</a></li>
</ul>
<ul class="stui-screen__list type-slide clearfix up-ul4">
<li><span class="text-muted">按明星</span></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'__',$cs4,'_',$cs5,'.html">全部</a></li>';
if($cs2==""){
echo '<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_成龙_',$cs4,'_',$cs5,'.html">成龙</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_周星驰_',$cs4,'_',$cs5,'.html">周星驰</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_李连杰_',$cs4,'_',$cs5,'.html">李连杰</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_林正英_',$cs4,'_',$cs5,'.html">林正英</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_吴京_',$cs4,'_',$cs5,'.html">吴京</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_徐峥_',$cs4,'_',$cs5,'.html">徐峥</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_黄渤_',$cs4,'_',$cs5,'.html">黄渤</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_王宝强_',$cs4,'_',$cs5,'.html">王宝强</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_李小龙_',$cs4,'_',$cs5,'.html">李小龙</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_张国荣_',$cs4,'_',$cs5,'.html">张国荣</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_洪金宝_',$cs4,'_',$cs5,'.html">洪金宝</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_姜文_',$cs4,'_',$cs5,'.html">姜文</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_沈腾_',$cs4,'_',$cs5,'.html">沈腾</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_邓超_',$cs4,'_',$cs5,'.html">邓超</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_巩俐_',$cs4,'_',$cs5,'.html">巩俐</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_马丽_',$cs4,'_',$cs5,'.html">马丽</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_周冬雨_',$cs4,'_',$cs5,'.html">周冬雨</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_闫妮_',$cs4,'_',$cs5,'.html">闫妮</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_刘昊然_',$cs4,'_',$cs5,'.html">刘昊然</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_汤唯_',$cs4,'_',$cs5,'.html">汤唯</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_舒淇_',$cs4,'_',$cs5,'.html">舒淇</a></li>';
}
if($cs2=="其他"){
echo '<li><a href="movie_',$cs0,'_",$cs1,"_',$cs2,'_黄渤_',$cs4,'_',$cs5,'.html">黄渤</a></li><li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_孙红雷_',$cs4,'_',$cs5,'.html">孙红雷</a></li><li><a href="movie_",$cs0,"_",$cs1,"_",$cs2,"_郑伊健_",$cs4,"_",$cs5,".html">郑伊健</a></li><li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_吴君如_',$cs4,'_',$cs5,'.html">吴君如</a></li>';
}
if($cs2=="印度"){
echo '<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_阿米尔·汗_',$cs4,'_',$cs5,'.html">阿米尔·汗</a></li><li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_伊尔凡·可汗_',$cs4,'_',$cs5,'.html">伊尔凡·可汗</a></li><li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_艾西瓦娅·雷_',$cs4,'_',$cs5,'.html">艾西瓦娅·雷</a></li><li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_桑杰·达特_',$cs4,'_',$cs5,'.html">桑杰·达特</a></li><li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_迪皮卡·帕度柯妮_',$cs4,'_',$cs5,'.html">迪皮卡·帕度柯妮</a></li><li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_阿贾耶·德乌干_',$cs4,'_',$cs5,'.html">阿贾耶·德乌干</a></li><li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_阿克谢·库玛尔_',$cs4,'_',$cs5,'.html">阿克谢·库玛尔</a></li><li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_拉妮·玛克赫吉_',$cs4,'_',$cs5,'.html">拉妮·玛克赫吉</a></li><li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_赛义夫·阿里·汗_',$cs4,'_',$cs5,'.html">赛义夫·阿里·汗</a></li>';
}
if($cs2=="泰国"){
echo '<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_马里奥·毛瑞尔_',$cs4,'_',$cs5,'.html">马里奥·毛瑞尔</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_赖拉·邦雅淑_',$cs4,'_',$cs5,'.html">赖拉·邦雅淑</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_托尼·贾_',$cs4,'_',$cs5,'.html">托尼·贾</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_苏达拉·布查蓬_',$cs4,'_',$cs5,'.html">苏达拉·布查蓬</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_阿南达·爱华灵咸_',$cs4,'_',$cs5,'.html">阿南达·爱华灵咸</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_阿部宽_',$cs4,'_',$cs5,'.html">阿部宽</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_Jirayu La·ongmanee_',$cs4,'_',$cs5,'.html">Jirayu La·ongmanee</a></li>';
}
if($cs2=="台湾"){
echo '<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_林志玲_',$cs4,'_',$cs5,'.html">林志玲</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_陈柏霖_',$cs4,'_',$cs5,'.html">陈柏霖</a></li><li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_彭于晏_',$cs4,'_',$cs5,'.html">彭于晏</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_陈妍希_',$cs4,'_',$cs5,'.html">陈妍希</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_柯震东_',$cs4,'_',$cs5,'.html">柯震东</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_桂纶镁_',$cs4,'_',$cs5,'.html">桂纶镁</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_张震_',$cs4,'_',$cs5,'.html">张震</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_徐若瑄_',$cs4,'_',$cs5,'.html">徐若瑄</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_徐熙媛_',$cs4,'_',$cs5,'.html">徐熙媛</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_林依晨_',$cs4,'_',$cs5,'.html">林依晨</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_蓝正龙_',$cs4,'_',$cs5,'.html">蓝正龙</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_范逸臣_',$cs4,'_',$cs5,'.html">范逸臣</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_张孝全_',$cs4,'_',$cs5,'.html">张孝全</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_吴奇隆_',$cs4,'_',$cs5,'.html">吴奇隆</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_阮经天_',$cs4,'_',$cs5,'.html">阮经天</a></li>';
}
if($cs2==16||$cs2=="德国"){
echo '<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_莫里兹·布雷多_',$cs4,'_',$cs5,'.html">莫里兹·布雷多</a></li>';
}
if($cs2==17||$cs2=="英国"){
echo '<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_奥兰多·布鲁姆_',$cs4,'_',$cs5,'.html">奥兰多·布鲁姆</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_凯拉·奈特利_',$cs4,'_',$cs5,'.html">凯拉·奈特利</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_肖恩·康纳利_',$cs4,'_',$cs5,'.html">肖恩·康纳利</a></li>';
}
if($cs2==12||$cs2=="法国"){
echo '<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_让·雷诺_',$cs4,'_',$cs5,'.html">让·雷诺</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_苏菲·玛索_',$cs4,'_',$cs5,'.html">苏菲·玛索</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_阿兰·德龙_',$cs4,'_',$cs5,'.html">阿兰·德龙</a></li>';
}
if($cs2=="日本"){
echo '<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_木村拓哉_',$cs4,'_',$cs5,'.html">木村拓哉</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_新垣结衣_',$cs4,'_',$cs5,'.html">新垣结衣</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_小栗旬_',$cs4,'_',$cs5,'.html">小栗旬</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_北川景子_',$cs4,'_',$cs5,'.html">北川景子</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_堀北真希_',$cs4,'_',$cs5,'.html">堀北真希</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_竹内结子_',$cs4,'_',$cs5,'.html">竹内结子</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_深田恭子_',$cs4,'_',$cs5,'.html">深田恭子</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_柏原崇_',$cs4,'_',$cs5,'.html">柏原崇</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_绫濑遥_',$cs4,'_',$cs5,'.html">绫濑遥</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_小田切让_',$cs4,'_',$cs5,'.html">小田切让</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_松山健一_',$cs4,'_',$cs5,'.html">松山健一</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_广末凉子_',$cs4,'_',$cs5,'.html">广末凉子</a></li>';
}
if($cs2=="韩国"){
echo '<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_韩艺瑟_',$cs4,'_',$cs5,'.html"></a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_张东健_',$cs4,'_',$cs5,'.html">张东健</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_张真英_',$cs4,'_',$cs5,'.html">张真英</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_李成宰_',$cs4,'_',$cs5,'.html">李成宰</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_全度妍_',$cs4,'_',$cs5,'.html">全度妍</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_车太贤_',$cs4,'_',$cs5,'.html">车太贤</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_河智苑_',$cs4,'_',$cs5,'.html">河智苑</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_李秉宪_',$cs4,'_',$cs5,'.html">李秉宪</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_孙艺珍_',$cs4,'_',$cs5,'.html">孙艺珍</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_裴勇俊_',$cs4,'_',$cs5,'.html">裴勇俊</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_金荷娜_',$cs4,'_',$cs5,'.html">金荷娜</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_姜东元_',$cs4,'_',$cs5,'.html">姜东元</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_全智贤_',$cs4,'_',$cs5,'.html">全智贤</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_申贤俊_',$cs4,'_',$cs5,'.html">申贤俊</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_崔胜贤_',$cs4,'_',$cs5,'.html">崔胜贤</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_元彬_',$cs4,'_',$cs5,'.html">元彬</a></li>';
}
if($cs2==15||$cs2=="香港"){
echo '<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_刘德华_',$cs4,'_',$cs5,'.html">刘德华</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_郭富城_',$cs4,'_',$cs5,'.html">郭富城</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_张国荣_',$cs4,'_',$cs5,'.html">张国荣</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_周星驰_',$cs4,'_',$cs5,'.html">周星驰</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_舒淇_',$cs4,'_',$cs5,'.html">舒淇</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_周润发_',$cs4,'_',$cs5,'.html">周润发</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_杨紫琼_',$cs4,'_',$cs5,'.html">杨紫琼</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_甄子丹_',$cs4,'_',$cs5,'.html">甄子丹</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_张曼玉_',$cs4,'_',$cs5,'.html">张曼玉</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_梁朝伟_',$cs4,'_',$cs5,'.html">梁朝伟</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_梅艳芳_',$cs4,'_',$cs5,'.html">梅艳芳</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_刘青云_',$cs4,'_',$cs5,'.html">刘青云</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_成龙_',$cs4,'_',$cs5,'.html">成龙</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_黄百鸣_',$cs4,'_',$cs5,'.html">黄百鸣</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_古天乐_',$cs4,'_',$cs5,'.html">古天乐</a></li>';
}
if($cs2==10||$cs2=="大陆"){
echo '<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_文章_',$cs4,'_',$cs5,'.html">文章</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_汤唯_',$cs4,'_',$cs5,'.html">汤唯</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_黄渤_',$cs4,'_',$cs5,'.html">黄渤</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_徐铮_',$cs4,'_',$cs5,'.html">徐铮</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_王宝强_',$cs4,'_',$cs5,'.html">王宝强</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_范冰冰_',$cs4,'_',$cs5,'.html">范冰冰</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_姜文_',$cs4,'_',$cs5,'.html">姜文</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_葛优_',$cs4,'_',$cs5,'.html">葛优</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_章子怡_',$cs4,'_',$cs5,'.html">章子怡</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_白百合_',$cs4,'_',$cs5,'.html">白百合</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_赵薇_',$cs4,'_',$cs5,'.html">赵薇</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_周迅_',$cs4,'_',$cs5,'.html">周迅</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_陈坤_',$cs4,'_',$cs5,'.html">陈坤</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_吴秀波_',$cs4,'_',$cs5,'.html">吴秀波</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_刘烨_',$cs4,'_',$cs5,'.html">刘烨</a></li>';
}
if($cs2==11||$cs2=="美国"){
echo '<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_安妮·海瑟薇_',$cs4,'_',$cs5,'.html">安妮·海瑟薇</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_斯嘉丽·约翰逊_',$cs4,'_',$cs5,'.html">斯嘉丽·约翰逊</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_约翰尼·德普_',$cs4,'_',$cs5,'.html">约翰尼·德普</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_小罗伯特·唐尼_',$cs4,'_',$cs5,'.html">小罗伯特·唐尼</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_汤姆·克鲁斯_',$cs4,'_',$cs5,'.html">汤姆·克鲁斯</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_莱昂纳多·迪卡普里奥_',$cs4,'_',$cs5,'.html">莱昂纳多·迪卡普里奥</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_尼古拉斯·凯奇_',$cs4,'_',$cs5,'.html">尼古拉斯·凯奇</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_安吉丽娜·朱莉_',$cs4,'_',$cs5,'.html">安吉丽娜·朱莉</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_威尔·史密斯_',$cs4,'_',$cs5,'.html">威尔·史密斯</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_布鲁斯·威利斯_',$cs4,'_',$cs5,'.html">布鲁斯·威利斯</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_西尔维斯特·史泰龙_',$cs4,'_',$cs5,'.html">西尔维斯特·史泰龙</a></li>
<li><a href="movie_',$cs0,'_',$cs1,'_',$cs2,'_约瑟夫·高登-莱维特_',$cs4,'_',$cs5,'.html">约瑟夫·高登-莱维特</a></li>';
}?>
</ul>
<!-- end 筛选 -->
			</div>
			<div class="stui-pannel_hd">
				<div class="stui-pannel__head active bottom-line clearfix">
				<span class="more text-muted pull-right hidden-xs">千万部VIP视频免费等你观看</span>
					<ul class="nav nav-head">
					<li<?php if ($cs4=="rankhot"){echo ' class="active"';}?>><a href="movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_rankhot_<?php echo $cs5 ?>.html">按最热</a></li>
					<li<?php if ($cs4=="ranklatest"){echo ' class="active"';}else{};?>><a href="movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_ranklatest_<?php echo $cs5 ?>.html">按最新</a></li>
					<li<?php if ($cs4=="rankpoint"){echo ' class="active"';}?>><a href="movie_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_rankpoint_<?php echo $cs5 ?>.html">按好评</a></li>
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
        $nian=$list['data']['movies'][$i]['pubdate'];
        $nian=date("Y", strtotime($nian) );
        $actor = $list['data']['movies'][$i]['actor'];
        $ccb =  $list['data']['movies'][$i]['id'];	
				        echo '<li class="col-md-7 col-sm-4 col-xs-3 ';
						if ($i>=33){echo 'hidden-xs';}
						echo '"><div class="stui-vodlist__box stui-vodlist__bg"><a class="stui-vodlist__thumb lazyload img-shadow" href="vod/m/',$ccb,'.html" title="',$title,'" data-original="',$img,'" style="background-image: url(', $img, ');"><span class="play hidden-xs"></span>';
						echo '<span class="pic-tag pic-tag-b">',$nian,'</span></a><div class="stui-vodlist__detail active"><h4 class="title text-overflow"><a href="vod/m/',$ccb,'.html" title="',$title,'">',$title,'</a></h4><p class="text text-overflow text-muted hidden-xs">';
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