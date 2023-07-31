<?php
include 'head.php';
$dm='active';
$leixing="dongman";
include 'getlist.php';
include 'system/dongman.php';
?>
<title>追动漫<?php echo $yea3.$are3.$type3;?>-最新最好看的动漫-<?php echo $mkcms_seoname;?></title>
<meta name="keywords" content="动漫排行,日本动漫,新番动漫,国产动漫,<?php echo $mkcms_keywords;?>">
<meta name="description" content="<?php echo $mkcms_description;?>">
</head>
<body style="padding: 0;">
<style type="text/css">
.stui-header__top{ background: linear-gradient(to bottom, rgba(0,0,0,0.7) 0%,rgba(0,0,0,0) 100%)}.stui-header__top.headroom--not-top{ background: #292838}.am-slider-desc {background-color: rgba(0,0,0,.7);width: 100%;color: #f8f8f8}.am-slider-content {background-color: rgba(0,0,0,.7);position: absolute;bottom: 0;width: 100%;color: #e4dddd}h3.am-slider-title {color: #fff;text-align: center}
</style>
<?php include 'header.php'; ?>
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
echo '"><a class="stui-banner__pic" href="vod/ct/',$four,'.html" alt="',$one,'" style="background: url(',$two,') rgba(98,71,136,0) no-repeat; background-position: center center; background-size: cover; display: block; width: 100%; height: 100%;" title="',$one,'"><div class="am-slider-desc"><div class="am-slider-content"><h3 class="am-slider-title">',$one,' - ',$three,'</h3><p></p></div></div></a></div>';$i++;}?>
</div>
</div>
<style type="text/css">
.stui-banner__pic{ padding-top: 29%; background-position: center center !important}@media (max-width:1023px){.stui-banner__pic{ padding-top: 40%; background-position: 50% 50% !important; background-size: cover !important}}
</style><!-- 幻灯片 -->
<div class="container">
<div class="row">
<?php echo $mkcms_ad13; ?>
<div class="stui-pannel stui-pannel-bg clearfix">
<div class="stui-pannel-box">
<div class="stui-pannel_hd">
<div class="stui-pannel__head active bottom-line clearfix">
<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-list"></use></svg>动漫频道</h3></div>
</div>
<!-- start 筛选 -->
<ul class="stui-screen__list type-slide bottom-line-dot clearfix up-ul1">  
<li><span class="text-muted">按类型</span></li>
<?php echo '<li><a href="dongman__',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html" >全部</a></li></li>
<li><a href="dongman_热血_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">热血</a></li>
<li><a href="dongman_恋爱_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">恋爱</a></li>
<li><a href="dongman_美少女_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">美少女</a></li>
<li><a href="dongman_运动_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">运动</a></li>
<li><a href="dongman_校园_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">校园</a></li>
<li><a href="dongman_搞笑_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">搞笑</a></li>
<li><a href="dongman_幻想_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">幻想</a></li>
<li><a href="dongman_冒险_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">冒险</a></li>
<li><a href="dongman_悬疑_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">悬疑</a></li>
<li><a href="dongman_魔幻_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">魔幻</a></li>
<li><a href="dongman_动物_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">动物</a></li>
<li><a href="dongman_少儿_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">少儿</a></li>
<li><a href="dongman_亲子_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">亲子</a></li>
<li><a href="dongman_机战_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">机战</a></li>
<li><a href="dongman_怪物_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">怪物</a></li>
<li><a href="dongman_益智_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">益智</a></li>
<li><a href="dongman_战争_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">战争</a></li>
<li><a href="dongman_社会_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">社会</a></li>
<li><a href="dongman_友情_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">友情</a></li>
<li><a href="dongman_成人_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">成人</a></li>
<li><a href="dongman_竞技_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">竞技</a></li>
<li><a href="dongman_耽美_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">耽美</a></li>
<li><a href="dongman_童话_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">童话</a></li>
<li><a href="dongman_LOLI_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">LOLI</a></li>
<li><a href="dongman_青春_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">青春</a></li>
<li><a href="dongman_男性向_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">男性向</a></li>
<li><a href="dongman_女性向_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">女性向</a></li>
<li><a href="dongman_动作_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">动作</a></li>
<li><a href="dongman_真人版_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">真人版</a></li>
<li><a href="dongman_OVA版_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">OVA版</a></li>
<li><a href="dongman_TV版_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">TV版</a></li>
<li><a href="dongman_电影版_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">电影版</a></li>
<li><a href="dongman_新番动画_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">新番动画</a></li>
<li><a href="dongman_完结动画_',$cs1,'_',$cs2,'_',$cs3,'_',$cs4,'.html">完结动画</a></li>
</ul>  
<ul class="stui-screen__list type-slide clearfix up-ul2">  
<li><span class="text-muted">按年份</span></li>
<li><a href="dongman_',$cs0,'__',$cs2,'_',$cs3,'_',$cs4,'.html">全部</a></li>
<li><a href="dongman_',$cs0,'_2021_',$cs2,'_',$cs3,'_',$cs4,'.html">2021</a></li>
<li><a href="dongman_',$cs0,'_2020_',$cs2,'_',$cs3,'_',$cs4,'.html">2020</a></li>
<li><a href="dongman_',$cs0,'_2019_',$cs2,'_',$cs3,'_',$cs4,'.html">2019</a></li>
<li><a href="dongman_',$cs0,'_2018_',$cs2,'_',$cs3,'_',$cs4,'.html">2018</a></li>
<li><a href="dongman_',$cs0,'_2017_',$cs2,'_',$cs3,'_',$cs4,'.html">2017</a></li>
<li><a href="dongman_',$cs0,'_2016_',$cs2,'_',$cs3,'_',$cs4,'.html">2016</a></li>
<li><a href="dongman_',$cs0,'_2015_',$cs2,'_',$cs3,'_',$cs4,'.html">2015</a></li>
<li><a href="dongman_',$cs0,'_2014_',$cs2,'_',$cs3,'_',$cs4,'.html">2014</a></li>
<li><a href="dongman_',$cs0,'_2013_',$cs2,'_',$cs3,'_',$cs4,'.html">2013</a></li>
<li><a href="dongman_',$cs0,'_2012_',$cs2,'_',$cs3,'_',$cs4,'.html">2012</a></li>
<li><a href="dongman_',$cs0,'_2011_',$cs2,'_',$cs3,'_',$cs4,'.html">2011</a></li>
<li><a href="dongman_',$cs0,'_2010_',$cs2,'_',$cs3,'_',$cs4,'.html">2010</a></li>
<li><a href="dongman_',$cs0,'_2009_',$cs2,'_',$cs3,'_',$cs4,'.html">2009</a></li>
<li><a href="dongman_',$cs0,'_2008_',$cs2,'_',$cs3,'_',$cs4,'.html">2008</a></li>
<li><a href="dongman_',$cs0,'_2007_',$cs2,'_',$cs3,'_',$cs4,'.html">2007</a></li>
<li><a href="dongman_',$cs0,'_other_',$cs2,'_',$cs3,'_',$cs4,'.html">更早</a></li>
</ul>
<ul class="stui-screen__list type-slide bottom-line-dot clearfix up-ul3">  
<li><span class="text-muted">按地区</span></li>
<li><a href="dongman_',$cs0,'_',$cs1,'__',$cs3,'_',$cs4,'.html">全部</a></li>
<li><a href="dongman_',$cs0,'_',$cs1,'_日本_',$cs3,'_',$cs4,'.html">日本</a></li>
<li><a href="dongman_',$cs0,'_',$cs1,'_美国_',$cs3,'_',$cs4,'.html">美国</a></li>
<li><a href="dongman_',$cs0,'_',$cs1,'_大陆_',$cs3,'_',$cs4,'.html">大陆</a></li>';?>
</ul>
<!-- end 筛选 -->
</div>
<div class="stui-pannel_hd">
<div class="stui-pannel__head active bottom-line clearfix">
				<span class="more text-muted pull-right hidden-xs">千万部VIP视频免费等你观看</span>
				<ul class="nav nav-head">
<?php echo'<li';
if ($cs3=="rankhot"){echo ' class="active"';}
echo '><a href="dongman_',$cs0,'_',$cs1,'_',$cs2,'_rankhot_',$cs4,'.html">最近热映</a></li>
<li';
if ($cs3=="ranklatest"){echo ' class="active"';}
echo '><a href="dongman_',$cs0,'_',$cs1,'_',$cs2,'_ranklatest_',$cs4,'.html">最新上映</a></li>';?>
				</ul>
</div>
</div>
<div class="stui-pannel_bd">
<ul class="stui-vodlist clearfix">
				<?php
				$i=0;
				while($i<$pagecount){
		$zimg = $list['data']['movies'][$i]['cdncover'];//图片
        $title = $list['data']['movies'][$i]['title'];  //名字
        $upinfo=$list['data']['movies'][$i]['upinfo'];//更新集数
        $total=$list['data']['movies'][$i]['total'];//总集数
        if($upinfo==$total){$jishu='全集'.$total;}else{$jishu='更新至'.$upinfo.'集';}
        if($total=='0'){$jishu='';}
        if(!empty($list['data']['movies'][$i]['comment'])){$jieshao = $list['data']['movies'][$i]['comment']; }//介绍
        else $jieshao="暂无介绍";
        $ccb =  $list['data']['movies'][$i]['id']; //链接	
				        echo '<li class="col-md-7 col-sm-4 col-xs-3 ';
						if ($i>=33){echo 'hidden-xs';}
						echo '"><div class="stui-vodlist__box stui-vodlist__bg"><a class="stui-vodlist__thumb lazyload img-shadow" href="vod/ct/',$ccb,'.html" title="',$title,'" data-original="',$zimg,'" style="background-image: url(', $zimg, ');"><span class="play hidden-xs"></span>';
						echo '<span class="pic-tag pic-tag-b">',$jishu,'</span></a><div class="stui-vodlist__detail active"><h4 class="title text-overflow"><a href="ct/',$ccb,'.html" title="',$title,'">',$title,'</a></h4><p class="text text-overflow text-muted hidden-xs">',$jieshao,'</p></div></div></li>';
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