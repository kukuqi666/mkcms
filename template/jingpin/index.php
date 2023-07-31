<?php
error_reporting(0);
header('Content-type:text/html;charset=utf-8');
include 'head.php';
$index = 'active';
?>
<title><?php echo $mkcms_seoname; ?></title>
<meta name="keywords" content="<?php echo $mkcms_keywords; ?>">
<meta name="description" content="<?php echo $mkcms_description; ?>">
<meta name="referrer" content="same-origin">
</head>
<body style="padding: 0;">
<style type="text/css">.stui-header__top{ background: linear-gradient(to bottom, rgba(0,0,0,0.7) 0%,rgba(0,0,0,0) 100%)}.stui-header__top.headroom--not-top{ background: #292838}.am-slider-desc {background-color: rgba(0,0,0,.7);width: 100%;color: #f8f8f8;}.am-slider-content {background-color: rgba(0,0,0,.7);position: absolute;bottom: 0;width: 100%;color: #e4dddd}h3.am-slider-title {color: #fff;text-align: center}</style>
<?php
include 'header.php'; ?>
<!-- 幻灯片 -->
<div id="banner" data-ride="carousel" class="stui-banner carousel slide">
<a class="carousel-control left" href="#banner" data-slide="prev"><i class="icon iconfont icon-back"></i></a>
<a class="carousel-control right" href="#banner" data-slide="next"><i class="icon iconfont icon-more"></i></a>
<div class="carousel-inner">
<?php
if ($mkcms_slow == 0) {
$one0=$listc['data']['lists'][0]['title'];//标题
$two0=$listc['data']['lists'][0]['pic_lists'][0]['url'];//图片
$three0=$listc['data']['lists'][0]['comment'];//简介
$four0=$listc['data']['lists'][0]['ent_id'];//链接
$five0=$listc['data']['lists'][0]['cat'];//分类
if($five0=='1'){$cat0='m';}else if($five0=='2'){$cat0='tv';}else if($five0=='4'){$cat0='ct';}else if($five0=='3'){$cat0='va';}
    echo '<div class="item stui-banner__item active"><a class="stui-banner__pic" href="vod/',$cat0,'/',$four0, '.html" alt="',$one0, '" style="background: url(',$two0, ') rgba(98,71,136,0) no-repeat; background-position: center center; background-size: cover; display: block; width: 100%; height: 100%;" title="',$one0, '"><div class="am-slider-desc hidden-lg"><div class="am-slider-content"><h3 class="am-slider-title">',$one0, ' - ',$three0, '</h3><p></p></div></div></a></div>';
    $i = 1;
    while ($i < 6) {
$one=$listc['data']['lists'][$i]['title'];//标题
$two=$listc['data']['lists'][$i]['pic_lists'][0]['url'];//图片
$three=$listc['data']['lists'][$i]['comment'];//简介
$four=$listc['data']['lists'][$i]['ent_id'];//链接
$five=$listc['data']['lists'][$i]['cat'];//分类
if($five=='1'){$cat='m';}else if($five=='2'){$cat='tv';}else if($five=='4'){$cat='ct';}else if($five=='3'){$cat='va';}
        echo '<div class="item stui-banner__item"><a class="stui-banner__pic" href="vod/',$cat,'/',$four, '.html" alt="',$one, '" style="background: url(',$two, ') rgba(98,71,136,0) no-repeat; background-position: center center; background-size: cover; display: block; width: 100%; height: 100%;" title="',$one, '"><div class="am-slider-desc hidden-lg"><div class="am-slider-content"><h3 class="am-slider-title">',$one, ' - ',$three0, '</h3><p></p></div></div></a></div>';
        $i++;
    }
    echo '</div>
<div class="stui-banner__switch clearfix hidden-sm hidden-xs">
    <div class="container">
        <div class="row">
        <ul class="carousel-indicators">
        <li data-target="#banner" data-slide-to="0" class="active"><span class="stui-vodlist__thumb" data-original="', $listc['data']['lists'][0]['pic_lists'][0]['url'], '" style="background: url(',$listc['data']['lists'][0]['pic_lists'][0]['url'], ') no-repeat; padding-top: 45%; background-position: 50% 50%; background-size: cover;" title="', $listc['data']['lists'][0]['title'], '"></span></li>';
    $i = 1;
    while ($i < 6) {
$one=$listc['data']['lists'][$i]['title'];//标题
$two=$listc['data']['lists'][$i]['pic_lists'][0]['url'];//图片
$three=$listc['data']['lists'][$i]['comment'];//简介
$four=$listc['data']['lists'][$i]['ent_id'];//链接
$five=$listc['data']['lists'][$i]['cat'];//分类
        echo '<li data-target="#banner" data-slide-to="',$i,'"><span class="stui-vodlist__thumb" data-original="',$two, '" style="background: url(',$two,') no-repeat; padding-top: 45%; background-position: 50% 50%; background-size: cover;" title="',$one,'"></span></li>';
        $i++;
    }
    echo '</ul>
        </div>
    </div>
</div>';
} else {
    $result = mysqli_query($conn, 'select * from mkcms_slideshow order by s_order asc');
    while ($row = mysqli_fetch_array($result)) {
        $i = $row['s_order'];
        echo '<div class="item stui-banner__item';
        if ($i == 0) {
            echo ' active';
        }
        echo '"><a class="stui-banner__pic" href="', $row['s_url'], '"  alt="', $row['s_name'], '" target="_blank" style="background: url(', $row['s_picture'], ') rgba(98,71,136,0) no-repeat; background-position: center center; background-size: cover; display: block; width: 100%; height: 100%;" title="', $row['s_name'], '"><div class="am-slider-desc hidden-lg"><div class="am-slider-content"><h3 class="am-slider-title">', $row['s_name'], '</h3><p></p></div></div></a></div>';
    }
    echo '</div>
<div class="stui-banner__switch clearfix hidden-sm hidden-xs">
    <div class="container">
        <div class="row">
        <ul class="carousel-indicators">';
    while ($row = mysqli_fetch_array($result)) {
        $i = $row['s_order'];
        echo '<li data-target="#banner" data-slide-to="', $i, '"';
        if ($i == 0) {
            echo ' class="active"';
        }
        echo '><span class="stui-vodlist__thumb" data-original="', $row['s_picture'], '" style="background: url(', $row['s_picture'], ') no-repeat; padding-top: 45%; background-position: 50% 50%; background-size: cover;" title="', $row['s_name'], '"></span></li>';
    }
    echo '</ul></div></div></div>';
} ?>
</div>
<style type="text/css">
.stui-banner__pic{ padding-top: 29%; background-position: center center !important;}
@media (max-width:1023px){.stui-banner__pic{ padding-top: 40%; background-position: 50% 50% !important; background-size: cover !important;}}
</style><!-- 幻灯片 -->
<!-- 筛选 -->
<div class="stui-pannel stui-pannel-screen hidden-sm hidden-xs clearfix" style="margin-bottom: 0;"><div class="stui-pannel-box"><div class="container"><div class="row"><ul class="stui-index__screen col-pd clearfix"><li class="type-slide m-bottom-line"><a href="movie.html"><dt>电<br>    影</dt></a><a href="movie_喜剧____rankhot_1.html">喜剧</a><a href="movie_爱情____rankhot_1.html">爱情</a><a href="movie_动作____rankhot_1.html">动作</a><a href="movie_恐怖____rankhot_1.html">恐怖</a><a href="movie_科幻____rankhot_1.html">科幻</a><a href="movie_剧情____rankhot_1.html">剧情</a></li><li class="type-slide m-bottom-line"><a href="tv.html"><dt>剧<br>    集</dt></a><a href="tv_警匪____rankhot_1.html">警匪</a><a href="tv_悬疑____rankhot_1.html">悬疑</a><a href="tv_都市____rankhot_1.html">都市</a><a href="tv_偶像____rankhot_1.html">偶像</a><a href="tv_古装____rankhot_1.html">古装</a><a href="tv_军事____rankhot_1.html">军事</a></li><li class="type-slide m-bottom-line"><a href="zongyi.html"><dt>综<br>    艺</dt></a><a href="zongyi_选秀___rankhot_1.html">选秀</a><a href="zongyi_搞笑___rankhot_1.html">搞笑</a><a href="zongyi_访谈___rankhot_1.html">访谈</a><a href="zongyi_体育___rankhot_1.html">体育</a><a href="zongyi_纪实___rankhot_1.html">纪实</a><a href="zongyi_科教___rankhot_1.html">科教</a></li><li class="type-slide m-bottom-line"><a href="dongman.html"><dt>动<br>    漫</dt></a><a href="dongman_热血___rankhot_1.html">热血</a><a href="dongman_恋爱___rankhot_1.html">恋爱</a><a href="dongman_校园___rankhot_1.html">校园</a><a href="dongman_幻想___rankhot_1.html">幻想</a><a href="dongman_成人___rankhot_1.html">成人</a><a href="dongman_悬疑___rankhot_1.html">悬疑</a></li></ul></div></div></div></div><!-- 筛选 --> 
<!-- 公告start -->
<div class="stui-pannel-bg clearfix" style="background-color: #ff6600;"><div class="clearfix"><div class="container stui-pannel_hd"><div class="stui-pannel__head clearfix"><li class="active"><table border="0" width="100%"><tbody><tr><td width="22" height="22"><img src="images/notice.png" width="22" height="22"></td><td width="12" height="22"></td><td><strong><marquee scrollamount="6" direction="left" align="Middle" style="padding-right:20px;color:#fff;"><?php
echo $mkcms_gonggao; ?></marquee></strong></td></tr></tbody></table></li></div></div></div></div><!-- 公告end --> 
<div class="container">
<div class="row">
<div class="stui-pannel stui-pannel-bg clearfix">
<ul class="stui-vodlist clearfix">
<?php echo $mkcms_ad2; ?>
</ul>
</div>
<div class="stui-pannel stui-pannel-bg clearfix">
    <div class="stui-pannel-box">
        <div class="stui-pannel_hd">
            <div class="stui-pannel__head active bottom-line clearfix">
                <h3 class="title">
                <svg class="iconm" aria-hidden="true"><use xlink:href="#icon-remen"></use></svg>
                热播推荐
                </h3>
                <a class="more text-muted pull-right" href="movie_____rankhot_1.html">更多 <i class="icon iconfont icon-more"></i></a>
            </div>
        </div>
<div class="stui-pannel_bd clearfix">
<ul class="stui-vodlist clearfix">
<?php
$wangzhi = 'https://api.web.360kan.com/v1/filter/list?catid=1&rank=rankhot';
$list=json_decode(fileget2($wangzhi,0),true);
$playurl = 'vod/m/'.$list['data']['movies'][0]['id'].'.html'; 
$zimg = $list['data']['movies'][0]['cdncover'];
$zname =  $list['data']['movies'][0]['title'];
$zstar = $list['data']['movies'][0]['comment'];
echo '<li class="col-lg-4-l col-md-4 col-sm-3 col-xs-3 hidden-md hidden-sm hidden-xs">
<div class="stui-vodlist__box stui-vodlist__bg">
<a class="stui-vodlist__thumb active first lazyload" href="', $playurl, '" title="', $zname, '" data-original="', $zimg, '" style="background-image: url("', $zimg, '");" style="padding-top: 152%;"><span class="play hidden-xs"></span><span class="pic-tag pic-tag-h">HOT</span></a>
<div class="stui-vodlist__detail active">
<h4 class="title text-overflow"><a href="', $playurl, '" title="', $zname, '">', $zname, '</a></h4>
<p class="text text-overflow visible-lg"><span class="text-muted"></span>', $zstar, '</p>
</div>
</div>
</li>';
?>
<?php
$wangzhi = 'https://api.web.360kan.com/v1/filter/list?catid=1&rank=rankhot';
$list=json_decode(fileget2($wangzhi,0),true);
$i = 0;
while ($i < 11) {
$playurl = 'vod/m/'.$list['data']['movies'][$i]['id'].'.html';
$zimg = $list['data']['movies'][$i]['cdncover'];
$zname =  $list['data']['movies'][$i]['title'];
echo '<li class="col-lg-7 col-md-5 col-sm-3 col-xs-3 ';
    if ($i < 1) {
        echo 'hidden-lg hidden-md';
    }
    if ($i > 8) {
        echo 'hidden-xs';
    }
    echo '">
<div class="stui-vodlist__box stui-vodlist__bg">
<a class="stui-vodlist__thumb active lazyload" href="', $playurl, '" title="', $zname, '" data-original="', $zimg, '" style="background-image: url("', $zimg, '");" alt="', $zstar, '"><span class="play hidden-xs"></span></a>
<div class="stui-vodlist__detail active">
<h4 class="title text-overflow"><a href="', $playurl, '" title="', $zstar, '" alt="', $zstar, '">',$zname,'</a></h4>
</div>
</div>
</li>';
$i++;} ?>
</ul>
</div>
</div>
</div>
<!--商品推荐-->
<?php if ($mkcms_tk == 1) { ?>
<div class="stui-pannel stui-pannel-bg clearfix">
<div class="stui-pannel-box">
<div class="stui-pannel_hd">
<div class="stui-pannel__head active bottom-line clearfix">
<a class="more text-muted pull-right" href="shop.html">更多 <i class="icon iconfont icon-more"></i></a>
<h3 class="title">
<svg class="iconm" aria-hidden="true">
    <use xlink:href="#icon-shopping"></use>
</svg>
<a href="shop.html">商品推荐</a></h3>
</div>
</div>
<div class="stui-pannel_bd clearfix">
<ul class="stui-vodlist clearfix">
<?php
$surl = $mkcms_domain.'slist.php?page=1';
$list=json_decode(fileget2($surl,0),true);
$i = 0;while ($i < 7) {
$dd=$list['data'][$i]['tid'];
$pic=$list['data'][$i]['cover'];
$title =  $list['data'][$i]['title'];
$yuanjia = $list['data'][$i]['yuanjia'];
$quan = $list['data'][$i]['quan'];
$jiage = $list['data'][$i]['jiage'];
        echo '<li class="col-md-7 col-sm-3 col-xs-3 ';
        if ($i > 5) {
            echo 'hidden-xs';
        }
        echo '">
<div class="stui-vodlist__box stui-vodlist__bg">
<a class="stui-vodlist__thumb lazyload"  style="padding-top:100%;" href="', $mkcms_dataoke, '?r=l/d&u=', $mkcms_dataokeid, '&id=', $dd, '" target="_blank" title="', $title, '" data-original="', $pic, '">
<span class="pic-tag pic-tag-l">原价￥', $yuanjia, '</span>
<span class="pic-tag pic-tag-b" style="color:#red;">券后￥', $jiage, '</span>
<span class="pic-tag pic-tag-h" style="color:#red;">', $quan, '元券</span>
</a>
<div class="stui-vodlist__detail active">
<h4 class="title text-overflow"><a href="', $mkcms_dataoke, '?r=l/d&u=', $mkcms_dataokeid, '&id=', $dd, '" target="_blank" title="', $title, '">', $title, '</a></h4>
</div>
</div>
</li>';
        $i++;
    } ?> 
</ul>
</div>
</div>
</div>
<!--商品推荐-->
<?php
} ?>
<!--抢先看-->
<?php
if ($mkcms_qianxian == 1) { ?>
<div class="stui-pannel stui-pannel-bg clearfix">
<ul class="stui-vodlist clearfix">
</ul>
</div>
<div class="stui-pannel stui-pannel-bg clearfix">
<div class="stui-pannel-box">
<div class="stui-pannel_hd">
<div class="stui-pannel__head active bottom-line clearfix">
<a class="more text-muted pull-right" href="cx.html">更多 <i class="icon iconfont icon-more"></i></a>
<h3 class="title">
<svg class="iconm" aria-hidden="true">
    <use xlink:href="#icon-play"></use>
</svg>
<a href="cx.html">影视尝鲜</a></h3>
</div>
</div>
<div class="stui-pannel_bd clearfix">
<ul class="stui-vodlist clearfix">
<?php
    $data = json_decode(fileget3($mkcms_cxzy),true);
    $i=0;
    while($i<7){
                            $ccb = "./cxplay/" . $data['data'][$i]['vod_id'] . ".html";
                            if ($row['d_jifen'] > 0) {
                                $ok = "onclick=\"return confirm('此视频为收费视频，观看需要支付" . $row['d_jifen'] . "积分，您是否观看？')\"";
                            } else {
                                $ok = "";
                            }
                            echo '<li class="col-md-7 col-sm-3 col-xs-3';
                            if ($i > 5) {
                                echo ' hidden-xs';
                            }
                            echo '">
<div class="stui-vodlist__box stui-vodlist__bg">
<a class="stui-vodlist__thumb lazyload" ', $ok, ' href="', $ccb, '" title="', $data['data'][$i]['vod_name'], '" data-original="', $data['data'][$i]['vod_pic'], '">
<span class="play hidden-xs"></span>
<span class="pic-tag pic-tag-b">', $data['data'][$i]['vod_year'], $data['data'][$i]['d_year'], '</span>
</a>
<div class="stui-vodlist__detail active">
<h4 class="title text-overflow"><a href="', $ccb, '" title="', $data['data'][$i]['vod_name'], '">', $data['data'][$i]['vod_name'], '</a></h4>
<p class="text text-overflow text-muted hidden-xs">主演：';
                            if (empty($data['data'][$i]['vod_actor'])) {
                                echo '未知';
                            } else {
                                echo $data['data'][$i]['vod_actor'];
                            }
                            echo '</p></div></div></li>';
                           $i++;} ?>
</ul>
</div>
</div>
</div>
<?php } ?>
<!--抢先看-->
<!--MV-->
<?php
if ($mkcms_mv == 1) { ?>
<div class="stui-pannel stui-pannel-bg clearfix">
<div class="stui-pannel-box">
<div class="stui-pannel_hd">
<div class="stui-pannel__head active bottom-line clearfix">
<a class="more text-muted pull-right" href="mv.html">更多 <i class="icon iconfont icon-more"></i></a>
<h3 class="title">
<svg class="iconm" aria-hidden="true">
    <use xlink:href="#icon-mv"></use>
</svg>
<a href="mv.html">音乐MV</a></h3>
</div>
</div>
<div class="stui-pannel_bd clearfix">
<ul class="stui-vodlist clearfix">
<?php
    $surl = $mkcms_domain.'gethotmv.php';
    $list=json_decode(fileget2($surl,0),true);
    $i = 0;
    while ($i < 6) {
        $gq = $list['data'][$i]['title'];
        $mpic = $list['data'][$i]['cover'];
        $href = $list['data'][$i]['link'];
        echo '<li class="col-md-6 col-sm-4 col-xs-3">
<div class="stui-vodlist__box stui-vodlist__bg">
<a class="stui-vodlist__thumb1 lazyload img-shadow" href="' , $href, '" title="' , $gq, '" data-original="' , $mpic, '" style="background-image: url(&quot;' , $mpic, '&quot;);">
<span class="play hidden-xs"></span>
</a>
<div class="stui-vodlist__detail active">
<h4 class="title text-overflow"><a href="' , $ccb, '>" title="' , $gq, '" title="' , $gq, '">', $gq, '</a></h4>
</div>
</div>
</li>';
$i++;} ?> 
</ul>
</div>
</div>
</div>
<?php } ?>
<!--MV-->
<!--电影-->
<?php
if ($mkcms_dianying == 1) { ?>
<div class="stui-pannel stui-pannel-bg clearfix">
<ul class="stui-vodlist clearfix">
<?php echo $mkcms_ad4; ?>
</ul>
</div> 
<div class="stui-pannel stui-pannel-bg clearfix">
<div class="stui-pannel-box">
<div class="stui-pannel_hd">
<div class="stui-pannel__head active bottom-line clearfix">
<a class="more text-muted pull-right" href="movie.html">更多 <i class="icon iconfont icon-more"></i></a>
<h3 class="title">
<svg class="iconm" aria-hidden="true">
    <use xlink:href="#icon-movie"></use>
</svg>
<a href="movie_____createtime_1.html">最新电影</a></h3>
<ul class="nav nav-text pull-right hidden-sm hidden-xs"><li><a href="movie___大陆__rankhot_1.html" class="text-muted">华语强档</a> <span class="split-line"></span></li><li><a href="movie_____rankhot_1.html" class="text-muted">网络热映</a> <span class="split-line"></span></li><li><a href="movie___美国__rankhot_1.html" class="text-muted">欧美范儿</a> <span class="split-line"></span></li><li><a href="movie___韩国__rankhot_1.html" class="text-muted">亚洲风情</a> <span class="split-line"></span></li></ul>
</div>
</div>
<div class="stui-pannel_bd clearfix">
<div class="col-lg-wide-8 col-xs-1 padding-0">
<ul class="stui-vodlist clearfix">
<?php
$wangzhi = 'https://api.web.360kan.com/v1/filter/list?catid=1&rank=ranklatest';
$list=json_decode(fileget2($wangzhi,0),true);
$i = 0;
    while ($i < 12) {
    $playurl = 'vod/m/'.$list['data']['movies'][$i]['id'].'.html';
    $zimg = $list['data']['movies'][$i]['cdncover'];
    $zname = $list['data']['movies'][$i]['title'];
    $actor = $list['data']['movies'][$i]['actor'];
    $nname = $list['data']['movies'][$i]['pubdate'];
    $nname=date("Y", strtotime($nname) );
        echo '<li class="col-md-6 col-sm-4 col-xs-3">
<div class="stui-vodlist__box stui-vodlist__bg">
<a class="stui-vodlist__thumb lazyload img-shadow" href="', $playurl, '" title="', $zstar, '" alt="', $zstar, '" data-original="', $zimg, '" style="background-image: url("', $zimg, '");">
<span class="play hidden-xs"></span>
<span class="pic-tag pic-tag-b">', $nname, '</span></a>
<div class="stui-vodlist__detail active">
<h4 class="title text-overflow">
<a href="', $playurl, '" title="', $zname, '">', $zname, '</a>
<p class="text text-overflow text-muted hidden-xs">';
$x=0;while($x<count($actor)) {echo $actor[$x].'/'; $x++;}
echo '</p>
</h4>
</div>
</div>
</li>';
        $i++;
    } ?>
</ul>
</div>
<div class="col-lg-wide-2 hidden-md hidden-sm hidden-xs">
<div class="stui-pannel_bd clearfix">
<div class="stui-pannel__head">
<a class="more text-muted pull-right" href="movie.html">更多 <i class="icon iconfont icon-more"></i></a>
<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-bang"></use></svg>影视排行</h3>
</div>
</div>
<div class="stui-pannel_bd clearfix">
    <ul class="stui-vodlist__text active col-pd clearfix">
<?php 
                    $i=0;while ($i<10){
                            echo '<li class="col-xs-1 padding-0"><a class="text-overflow" href="/vod/m/',$bd1['data'][$i]['ent_id'],'.html" title="',$bd1['data'][$i]['title'],'"><span class="am-badge am-round pull-left">',$i+1,'</span><span class="text-muted pull-right">',$bd1['data'][$i]['pv'],'</span><em class="text-red"></em>&nbsp;',$bd1['data'][$i]['title'],'</a></li>';$i++;}?>
    </ul>
</div>
<div class="stui-pannel_bd">
<div class="stui-pannel__head clearfix">
<a class="more text-muted pull-right" href="movie.html">更多 <i class="icon iconfont icon-more"></i></a>
<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-shoucang-"></use></svg>电影筛选</h3>
</div>
</div>
<div class="stui-pannel_bd col-pd"><ul class="stui-vodlist__screen clearfix"><li><a href="movie_喜剧____rankhot_1.html" title="喜剧">喜剧</a></li><li><a href="movie_爱情____rankhot_1.html" title="爱情">爱情</a></li><li><a href="movie_动作____rankhot_1.html" title="动作">动作</a></li><li><a href="movie_恐怖____rankhot_1.html" title="恐怖">恐怖</a></li><li><a href="movie_科幻____rankhot_1.html" title="科幻">科幻</a></li><li><a href="movie_剧情____rankhot_1.html" title="剧情">剧情</a></li><li><a href="movie_犯罪____rankhot_1.html" title="犯罪">犯罪</a></li><li><a href="movie_战争____rankhot_1.html" title="战争">战争</a></li><li><a href="movie_悬疑____rankhot_1.html" title="悬疑">悬疑</a></li><li><a href="movie_文艺____rankhot_1.html" title="文艺">文艺</a></li><li><a href="movie_记录____rankhot_1.html" title="记录">记录</a></li><li><a href="movie_古装____rankhot_1.html" title="古装">古装</a></li></ul><ul class="stui-vodlist__screen top-line-dot clearfix"><li><a href="movie__2021___rankhot_1.html" title="2021">2021</a></li><li><a href="movie__2020___rankhot_1.html" title="2020">2020</a></li><li><a href="movie__2019___rankhot_1.html" title="2019">2019</a></li><li><a href="movie__2018___rankhot_1.html" title="2018">2018</a></li><li><a href="movie__2017___rankhot_1.html" title="2017">2017</a></li><li><a href="movie__2016___rankhot_1.html" title="2016">2016</a></li><li><a href="movie__2015___rankhot_1.html" title="2015">2015</a></li><li><a href="movie__2014___rankhot_1.html" title="2014">2014</a></li><li><a href="movie__2013___rankhot_1.html" title="2013">2013</a></li><li><a href="movie__2012___rankhot_1.html" title="2012">2012</a></li><li><a href="movie__2011___rankhot_1.html" title="2011.html">2011</a></li><li><a href="movie__other___rankhot_1.html" title="更早">更早</a></li></ul></div>
</div>
</div>
</div>
</div>
<?php
} ?>
<!--电影-->
<!--HY-->
<div class="stui-pannel stui-pannel-bg clearfix">
<ul class="stui-vodlist clearfix">
<?php echo $mkcms_ad8; ?>
</ul>
</div>
<div class="stui-pannel stui-pannel-bg clearfix">
<div class="stui-pannel-box">
<div class="stui-pannel_hd">
<div class="stui-pannel__head active bottom-line clearfix">
<a class="more text-muted pull-right" href="hy.html">更多 <i class="icon iconfont icon-more"></i></a>
<h3 class="title">
<svg class="iconm" aria-hidden="true">
    <use xlink:href="#icon-music"></use>
</svg>
<a href="hy_2168_1.html">美女直播</a></h3>
</div>
</div>
<div class="stui-pannel_bd clearfix">
<ul class="stui-vodlist clearfix">
<?php
$surl = $mkcms_domain.'json/hyhot.php';
$data=json_decode(fileget2($surl,0),true);
$i = 0;
while ($i < 6) {
    $number = $data['data']['datas'][$i]['totalCount'];
    $img = $data['data']['datas'][$i]['screenshot'];
    $xvau = $data['data']['datas'][$i]['nick'];
    $info = $data['data']['datas'][$i]['introduction'];
    $do = $data['data']['datas'][$i]['profileRoom'] . '.html';
    echo '<li class="col-md-6 col-sm-4 col-xs-3">
<div class="stui-vodlist__box stui-vodlist__bg">
<a class="stui-vodlist__thumb1 lazyload" href="hyplay_', $do, '" title="', $info, '" data-original="', $img, '">
<span class="play hidden-xs"></span>                        
<span class="pic-tag pic-tag-b">', $xvau, '</span></a>
<div class="stui-vodlist__detail active">
<h4 class="title text-overflow">
<a href="yplay_', $do, '" title="', $info, '">', $info, '</a>
</h4>
</div>
</div>
</li>';
    $i++;
} ?>
</ul>
</div>
</div>
</div>
<!--HY-->
<!--剧集-->
<?php if ($mkcms_dianshi == 1) { ?>
<div class="stui-pannel stui-pannel-bg clearfix">
<ul class="stui-vodlist clearfix">
<?php echo $mkcms_ad5; ?>
</ul>
</div>
<div class="stui-pannel stui-pannel-bg clearfix">
<div class="stui-pannel-box">
<div class="stui-pannel_hd">
<div class="stui-pannel__head active bottom-line clearfix">
<a class="more text-muted pull-right" href="tv.html">更多 <i class="icon iconfont icon-more"></i></a>
<h3 class="title">
<svg class="iconm" aria-hidden="true">
    <use xlink:href="#icon-tv"></use>
</svg>
<a href="tv.html">热播剧集</a></h3>
<ul class="nav nav-text pull-right hidden-sm hidden-xs"><li><a href="tv___大陆__rankhot_1.html" class="text-muted">国产剧</a> <span class="split-line"></span></li><li><a href="tv___香港__rankhot_1.html" class="text-muted">港台剧</a> <span class="split-line"></span></li><li><a href="tv___韩国__rankhot_1.html" class="text-muted">日韩剧</a> <span class="split-line"></span></li><li><a href="tv___美国__rankhot_1.html" class="text-muted">欧美剧</a> <span class="split-line"></span></li></ul>
</div>
</div>
<div class="stui-pannel_bd clearfix">
<div class="col-lg-wide-8 col-xs-1 padding-0">
<ul class="stui-vodlist clearfix">  
<?php
$wangzhi = 'https://api.web.360kan.com/v1/filter/list?catid=2&rank=rankhot';
$list=json_decode(fileget2($wangzhi,0),true);
    $i = 0;
    while ($i < 12) {
        $zimg = $list['data']['movies'][$i]['cdncover'];
        $zname = $list['data']['movies'][$i]['title'];
        $updata=$list['data']['movies'][$i]['upinfo'];
        $total=$list['data']['movies'][$i]['total'];
        if($updata==$total){$jishu='全集'.$total;}else{$jishu='更新至'.$updata.'集';}
        if($total=='0'){$jishu='';}
        $actor = $list['data']['movies'][$i]['actor'];
        $chuandi =  'vod/tv/'.$list['data']['movies'][$i]['id'].'.html';
        echo '<li class="col-md-6 col-sm-4 col-xs-3">
<div class="stui-vodlist__box stui-vodlist__bg">
<a class="stui-vodlist__thumb lazyload img-shadow" href="', $chuandi, '" title="', $zname, '" alt="', $zname, '" data-original="', $zimg, '" style="background-image: url("', $zimg, '");">
<span class="play hidden-xs"></span>
<span class="pic-tag pic-tag-b">', $jishu, '</span></a>
<div class="stui-vodlist__detail active">
<h4 class="title text-overflow">
<a href="', $chuandi, '" title="', $zname, '">', $zname, '</a>
</h4>
<p class="text text-overflow text-muted hidden-xs">';
$x=0;while($x<count($actor)) {echo $actor[$x].'/'; $x++;}
echo '</p>
</div>
</div>
</li>';
        $i++;
    } ?>
</ul>
</div>
<div class="col-lg-wide-2 hidden-md hidden-sm hidden-xs">
<div class="stui-pannel_bd clearfix">
<div class="stui-pannel__head">
<a class="more text-muted pull-right" href="tv.html">更多 <i class="icon iconfont icon-more"></i></a>
<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-bang"></use></svg>剧集排行</h3>
</div>
</div>
<div class="stui-pannel_bd clearfix">
<ul class="stui-vodlist__text active col-pd clearfix">
<?php 
                    $i=0;while ($i<10){
                            echo '<li class="col-xs-1 padding-0"><a class="text-overflow" href="/vod/tv/',$bd2['data'][$i]['ent_id'],'.html" title="',$bd2['data'][$i]['title'],'"><span class="am-badge am-round pull-left">',$i+1,'</span><span class="text-muted pull-right">',$bd2['data'][$i]['pv'],'</span><em class="text-red"></em>&nbsp;',$bd2['data'][$i]['title'],'</a></li>';$i++;}?>
    </ul>
</div>
<div class="stui-pannel_bd"><div class="stui-pannel__head clearfix"><a class="more text-muted pull-right" href="tv.html">更多 <i class="icon iconfont icon-more"></i></a><h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-shoucang-"></use></svg>剧集筛选</h3></div></div><div class="stui-pannel_bd col-pd"><ul class="stui-vodlist__screen clearfix"><li><a href="tv_军事____rankhot_1.html" title="军事">军事</a></li><li><a href="tv_古装____rankhot_1.html" title="古装">古装</a></li><li><a href="tv_谍战____rankhot_1.html" title="谍战">谍战</a></li><li><a href="tv_喜剧____rankhot_1.html" title="喜剧">喜剧</a></li><li><a href="tv_言情____rankhot_1.html" title="言情">言情</a></li><li><a href="tv_伦理____rankhot_1.html" title="伦理">伦理</a></li><li><a href="tv_都市____rankhot_1.html" title="都市">都市</a></li><li><a href="tv_警匪____rankhot_1.html" title="警匪">警匪</a></li><li><a href="tv_历史____rankhot_1.html" title="历史">历史</a></li><li><a href="tv_>神话____rankhot_1.html" title="神话">神话</a></li><li><a href="tv_武侠____rankhot_1.html" title="武侠">武侠</a></li><li><a href="tv_青春____rankhot_1.html" title="青春">青春</a></li></ul><ul class="stui-vodlist__screen top-line-dot clearfix"><li><a href="tv__2021___rankhot_1.html" title="2021">2021</a></li><li><a href="tv__2020___rankhot_1.html" title="2020">2020</a></li><li><a href="tv__2019___rankhot_1.html" title="2019">2019</a></li><li><a href="tv__2018___rankhot_1.html" title="2018">2018</a></li><li><a href="tv__2017___rankhot_1.html" title="2017">2017</a></li><li><a href="tv__2016___rankhot_1.html" title="2016">2016</a></li><li><a href="tv__2015___rankhot_1.html" title="2015">2015</a></li><li><a href="tv__2014___rankhot_1.html" title="2014">2014</a></li><li><a href="tv__2013___rankhot_1.html" title="2013">2013</a></li><li><a href="tv__2012___rankhot_1.html" title="2012">2012</a></li><li><a href="tv__2011___rankhot_1.html" title="2011.html">2011</a></li><li><a href="tv__other___rankhot_1.html" title="更早">更早</a></li></ul></div></div></div></div></div>
<!--剧集-->
<?php
} ?>
<!--YY-->
<?php
if ($mkcms_yy == 1) { ?>
<div class="stui-pannel stui-pannel-bg clearfix">
<ul class="stui-vodlist clearfix">
<?php echo $mkcms_ad3; ?>
</ul>
</div>
<div class="stui-pannel stui-pannel-bg clearfix">
<div class="stui-pannel-box">
<div class="stui-pannel_hd">
<div class="stui-pannel__head active bottom-line clearfix">
<a class="more text-muted pull-right" href="yy.html">更多 <i class="icon iconfont icon-more"></i></a>
<h3 class="title">
<svg class="iconm" aria-hidden="true">
    <use xlink:href="#icon-music"></use>
</svg>
<a href="yy.html">美女视听</a></h3>
</div>
</div>
<div class="stui-pannel_bd clearfix">
<ul class="stui-vodlist clearfix">
<?php
    $surl = $mkcms_domain.'json/mnv.php?list=27_p1';
    $list=json_decode(fileget($surl,0),true);
    $i = 0;
    while ($i < 6) {
        $qz1 = $list['data'][$i]['cover'];
        $xname = $list['data'][$i]['title'];
        $xlink = $list['data'][$i]['link'];
        $xtext = $list['data'][$i]['text'];
        $bj = $list['data'][$i]['hot'];
        echo '<li class="col-md-6 col-sm-4 col-xs-3">
<div class="stui-vodlist__box stui-vodlist__bg">
<a class="stui-vodlist__thumb1 lazyload" href="yplay/', $xlink, '" title="', $xname, '" data-original="', $qz1, '">
<span class="play hidden-xs"></span>                        
<span class="pic-tag pic-tag-b">', $xtext, '</span></a>
<div class="stui-vodlist__detail active">
<h4 class="title text-overflow">
<a href="yplay/', $xlink, '" title="', $xname, '">', $xname, '</a>
</h4>
<p class="text text-overflow text-muted hidden-xs">', $bj, '次播放</p>
</div>
</div>
</li>';
$i++;} ?> 
</ul>
</div>
</div>
</div>
<?php } ?>
<!--YY-->
<!--综艺-->
<?php
if ($mkcms_zongyi == 1) { ?>
<div class="stui-pannel stui-pannel-bg clearfix">
<ul class="stui-vodlist clearfix">
<?php echo $mkcms_ad7; ?>
</ul>
</div>
<div class="stui-pannel stui-pannel-bg clearfix">
<div class="stui-pannel-box">
<div class="stui-pannel_hd">
<div class="stui-pannel__head active bottom-line clearfix">
<a class="more text-muted pull-right" href="zongyi.html">更多 <i class="icon iconfont icon-more"></i></a>
<h3 class="title">
<svg class="iconm" aria-hidden="true">
    <use xlink:href="#icon-zongyi"></use>
</svg>
<a href="zongyi____createtime_1.html">最新综艺</a></h3>
<ul class="nav nav-text pull-right hidden-sm hidden-xs"><li><a href="zongyi_101___rankhot_1.html" class="text-muted">选秀</a> <span class="split-line"></span></li><li><a href="zongyi_104___rankhot_1.html" class="text-muted">情感</a> <span class="split-line"></span></li><li><a href="zongyi_107___rankhot_1.html" class="text-muted">搞笑</a> <span class="split-line"></span></li><li><a href="zongyi_108___rankhot_1.html" class="text-muted">音乐</a> <span class="split-line"></span></li></ul>
</div>
</div>
<div class="stui-pannel_bd clearfix">
<div class="col-lg-wide-8 col-xs-1 padding-0">
<ul class="stui-vodlist clearfix">
<?php
$wangzhi = 'https://api.web.360kan.com/v1/filter/list?catid=3&rank=ranklatest';
$list=json_decode(fileget2($wangzhi,0),true);
    $i = 0;
    while ($i < 12) {
        $playurl = 'vod/va/'.$list['data']['movies'][$i]['id'].'.html';
        $zimg = $list['data']['movies'][$i]['cdncover'];
        $zname = $list['data']['movies'][$i]['title'];
        $info = $list['data']['movies'][$i]['lasttitle'];
        $zdata = $list['data']['movies'][$i]['tag'];
        echo '<li class="col-md-6 col-sm-4 col-xs-3">
<div class="stui-vodlist__box stui-vodlist__bg">
<a class="stui-vodlist__thumb lazyload img-shadow" href="', $playurl, '" title="', $zname, '" alt="', $zname, '" data-original="', $zimg, '" style="background-image: url("',$zimg, '");">
<span class="play hidden-xs"></span>
<span class="pic-tag pic-tag-b">',$zdata, '</span></a>
<div class="stui-vodlist__detail active">
<h4 class="title text-overflow">
<a href="', $playurl, '" title="', $zname, '">', $zname, '</a>
</h4>
<p class="text text-overflow text-muted hidden-xs">', $info, '</p>
</div>
</div>
</li>';
        $i++;
    } ?>
</ul>
</div>
<div class="col-lg-wide-2 hidden-md hidden-sm hidden-xs">
<div class="stui-pannel_bd clearfix">
<div class="stui-pannel__head">
<a class="more text-muted pull-right" href="zongyi.html">更多 <i class="icon iconfont icon-more"></i></a>
<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-bang"></use></svg>综艺排行</h3>
</div>
</div>
<div class="stui-pannel_bd clearfix">
    <ul class="stui-vodlist__text active col-pd clearfix">
<?php 
                    $i=0;while ($i<10){
                            echo '<li class="col-xs-1 padding-0"><a class="text-overflow" href="/vod/va/',$bd3['data'][$i]['ent_id'],'.html" title="',$bd3['data'][$i]['title'],'"><span class="am-badge am-round pull-left">',$i+1,'</span><span class="text-muted pull-right">',$bd3['data'][$i]['pv'],'</span><em class="text-red"></em>&nbsp;',$bd3['data'][$i]['title'],'</a></li>';$i++;}?>
    </ul>
    </div>
<div class="stui-pannel_bd">
<div class="stui-pannel__head clearfix">
<a class="more text-muted pull-right" href="zongyi.html">更多 <i class="icon iconfont icon-more"></i></a>
<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-shoucang-"></use></svg>综艺筛选</h3>
</div>
</div>
<div class="stui-pannel_bd col-pd"><ul class="stui-vodlist__screen clearfix"><li><a href="zongyi_脱口秀___rankhot_1.htmll" title="脱口秀">脱口秀</a></li><li><a href="zongyi_真人秀___rankhot_1.html" title="真人秀">真人秀</a></li><li><a href="zongyi_访谈___rankhot_1.html" title="访谈">访谈</a></li><li><a href="zongyi_情感___rankhot_1.html" title="情感">情感</a></li><li><a href="zongyi_生活___rankhot_1.html" title="生活">生活</a></li><li><a href="zongyi_晚会___rankhot_1.html" title="晚会">晚会</a></li><li><a href="zongyi_搞笑___rankhot_1.html" title="搞笑">搞笑</a></li><li><a href="zongyi_游戏___rankhot_1.html" title="游戏">游戏</a></li><li><a href="zongyi_体育___rankhot_1.html" title="体育">体育</a></li><li><a href="zongyi_纪实___rankhot_1.html" title="纪实">纪实</a></li><li><a href="zongyi_歌舞___rankhot_1.html" title="歌舞">歌舞</a></li><li><a href="zongyi_曲艺___rankhot_1.html" title="曲艺">曲艺</a></li></ul><ul class="stui-vodlist__screen top-line-dot clearfix"><li><a href="zongyi__邓超__rankhot_1.html" title="邓超">邓超</a></li><li><a href="zongyi__陈赫__rankhot_1.html" title="陈赫">陈赫</a></li><li><a href="zongyi__何炅__rankhot_1.html" title="何炅">何炅</a></li><li><a href="zongyi__汪涵__rankhot_1.html" title="汪涵">汪涵</a></li><li><a href="zongyi__谢娜__rankhot_1.html" title="谢娜">谢娜</a></li><li><a href="zongyi__周杰伦__rankhot_1.html" title="周杰伦">周杰伦</a></li><li><a href="zongyi__岳云鹏__rankhot_1.html" title="岳云鹏">岳云鹏</a></li><li><a href="zongyi__杨幂__rankhot_1.html" title="杨幂">杨幂</a></li><li><a href="zongyi__宋小宝__rankhot_1.html" title="宋小宝">宋小宝</a></li><li><a href="zongyi__贾玲__rankhot_1.htmll" title="贾玲">贾玲</a></li><li><a href="zongyi__华晨宇__rankhot_1.html" title="华晨宇">华晨宇</a></li><li><a href="zongyi__范冰冰__rankhot_1.html" title="范冰冰">范冰冰</a></li></ul></div>
</div>
</div>
</div>
</div>
<?php } ?>
<!--综艺-->
<!--资讯-->
<div class="stui-pannel stui-pannel-bg clearfix">
<ul class="stui-vodlist clearfix">
<?php echo $mkcms_ad6; ?>
</ul>
</div>
<div class="stui-pannel stui-pannel-bg clearfix">
<div class="stui-pannel-box">
<div class="stui-pannel_hd">
<div class="stui-pannel__head active bottom-line clearfix">
<a class="more text-muted pull-right" href="news.html">更多 <i class="icon iconfont icon-more"></i></a>
<h3 class="title">
<svg class="iconm" aria-hidden="true">
    <use xlink:href="#icon-movie"></use>
</svg>
<a href="news.html">影视资讯</a></h3>
</div>
</div>
<div class="stui-pannel_bd clearfix">
<ul class="stui-vodlist clearfix">
<?php
$surl = $mkcms_domain.'json/newl.php?page=1';
$list=json_decode(fileget2($surl,0),true);
$i = 0;
while ($i < 6) {
    $cs = $list['data'][$i]['title']; //标题
    $one1 = $list['data'][$i]['link1']; //地址
    $one2 = $list['data'][$i]['link2']; //地址
    $one3 = $list['data'][$i]['cover']; //图片
    $sj = $list['data'][$i]['time']; //时间
    echo '<li class="col-md-6 col-sm-4 col-xs-3">
<div class="stui-vodlist__box stui-vodlist__bg">
<a class="stui-vodlist__thumb1 lazyload" href="content-', $one1, '-', $one2, '.html" title="', $cs, '" data-original="', $one3, '">
<span class="play hidden-xs"></span>                        
<span class="pic-tag pic-tag-b">', $sj, '</span></a>
<div class="stui-vodlist__detail active">
<h4 class="title text-overflow">
<a href="content-', $one1, '-', $one2, '.html" title="', $cs, '">', $cs, '</a>
</h4>
</div>
</div>
</li>';
$i++;} ?> 
</ul>
</div>
</div>
</div>
<!--资讯-->
<!--动漫-->
<?php if ($mkcms_dongman == 1) { ?>
<div class="stui-pannel stui-pannel-bg clearfix">
<ul class="stui-vodlist clearfix">
<?php echo $mkcms_ad9; ?>
</ul>
</div>
<div class="stui-pannel stui-pannel-bg clearfix">
<div class="stui-pannel-box">
<div class="stui-pannel_hd">
<div class="stui-pannel__head active bottom-line clearfix">
<a class="more text-muted pull-right" href="dongman.html">更多 <i class="icon iconfont icon-more"></i></a>
<h3 class="title">
<svg class="iconm" aria-hidden="true">
    <use xlink:href="#icon-dongman"></use>
</svg>
<a href="dongman____createtime_1.html">热门动漫</a></h3>
<ul class="nav nav-text pull-right hidden-sm hidden-xs"><li><a href="dongman_热血___rankhot_1.html" class="text-muted">热血</a> <span class="split-line"></span></li><li><a href="dongman_恋爱___rankhot_1.html" class="text-muted">恋爱</a> <span class="split-line"></span></li><li><a href="dongman_悬疑___rankhot_1.html" class="text-muted">悬疑</a> <span class="split-line"></span></li><li><a href="dongman_少儿___rankhot_1.html" class="text-muted">少儿</a> <span class="split-line"></span></li></ul>
</div>
</div>
<div class="stui-pannel_bd clearfix">
<div class="col-lg-wide-8 col-xs-1 padding-0">
<ul class="stui-vodlist clearfix">
<?php
$wangzhi = 'https://api.web.360kan.com/v1/filter/list?catid=4&rank=rankhot';
$list=json_decode(fileget2($wangzhi,0),true);
    $i = 0;
    while ($i < 12) {
        $playurl ='vod/ct/'.$list['data']['movies'][$i]['id'].'.html';
        $zimg = $list['data']['movies'][$i]['cover'];
        $zname = $list['data']['movies'][$i]['title'];
        $info = $list['data']['movies'][$i]['comment'];
        echo '<li class="col-md-6 col-sm-4 col-xs-3">
<div class="stui-vodlist__box stui-vodlist__bg">
<a class="stui-vodlist__thumb lazyload img-shadow" href="', $playurl, '" title="', $zname, '" alt="', $zname, '" data-original="', $zimg, '" style="background-image: url("', $zimg, '");">
<span class="play hidden-xs"></span>
<span class="pic-tag pic-tag-b">', $nname, '</span></a>
<div class="stui-vodlist__detail active">
<h4 class="title text-overflow">
<a href="', $playurl, '" title="', $zname, '">', $zname, '</a>
</h4>
<p class="text text-overflow text-muted hidden-xs">', $info, '</p>
</div>
</div>
</li>';
$i++;} ?>
</ul>
</div>
<div class="col-lg-wide-2 hidden-md hidden-sm hidden-xs">
<div class="stui-pannel_bd clearfix">
<div class="stui-pannel__head">
<a class="more text-muted pull-right" href="dongman.html">更多 <i class="icon iconfont icon-more"></i></a>
<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-bang"></use></svg>动漫排行</h3>
</div>
</div>
<div class="stui-pannel_bd clearfix">
<ul class="stui-vodlist__text active col-pd clearfix">
<?php 
                    $i=0;while ($i<10){
                            echo '<li class="col-xs-1 padding-0"><a class="text-overflow" href="/vod/ct/',$bd4['data'][$i]['ent_id'],'.html" title="',$bd4['data'][$i]['title'],'"><span class="am-badge am-round pull-left">',$i+1,'</span><span class="text-muted pull-right">',$bd4['data'][$i]['pv'],'</span><em class="text-red"></em>&nbsp;',$bd4['data'][$i]['title'],'</a></li>';$i++;}?>
</ul>
</div>
<div class="stui-pannel_bd">
<div class="stui-pannel__head clearfix">
<a class="more text-muted pull-right" href="dongman.html">更多 <i class="icon iconfont icon-more"></i></a>
<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-shoucang-"></use></svg>动漫筛选</h3>
</div>
</div>
<div class="stui-pannel_bd col-pd">
<ul class="stui-vodlist__screen clearfix"><li><a href="dongman_rankhot_热血_1.html" title="热血">热血</a></li><li><a href="dongman_科幻___rankhot_1.html" title="科幻">科幻</a></li><li><a href="dongman_魔幻___rankhot_1.html" title="魔幻">魔幻</a></li><li><a href="dongman_经典___rankhot_1.html" title="经典">经典</a></li><li><a href="dongman_冒险___rankhot_1.html" title="冒险">冒险</a></li><li><a href="dongman_少儿___rankhot_1.html" title="少儿">少儿</a></li><li><a href="dongman_推理___rankhot_1.html" title="推理">推理</a></li><li><a href="dongman_校园___rankhot_1.html" title="校园">校园</a></li><li><a href="dongman_机战___rankhot_1.html" title="机战">机战</a></li><li><a href="dongman_青春___rankhot_1.html" title="青春">青春</a></li><li><a href="dongman_战争___rankhot_1.html" title="战争">战争</a></li><li><a href="dongman_动作___rankhot_1.html" title="动作">动作</a></li><li><a href="dongman_恋爱___rankhot_1.html" title="恋爱">恋爱</a></li><li><a href="dongman_成人___rankhot_1.html" title="成人">成人</a></li><li><a href="dongman_悬疑___rankhot_1.html" title="悬疑">悬疑</a></li><li><a href="dongman_TV版___rankhot_1.html" title="TV版">TV版</a></li></ul><ul class="stui-vodlist__screen top-line-dot clearfix"><li><a href="dongman__2021__rankhot_1.html" title="2021">2021</a></li><li><a href="dongman__2020__rankhot_1.html" title="2020">2020</a></li><li><a href="dongman__2019__rankhot_1.html" title="2019">2019</a></li><li><a href="dongman__2018__rankhot_1.html" title="2018">2018</a></li><li><a href="dongman__2017__rankhot_1.html" title="2017">2017</a></li><li><a href="dongman__2016__rankhot_1.html" title="2016">2016</a></li><li><a href="dongman__2015__rankhot_1.html" title="2015">2015</a></li><li><a href="dongman__other__rankhot_1.html" title="更早">更早</a></li></ul>
</div>
</div>
</div>
</div>
</div>
<?php } ?>
<!--动漫-->
<!--合作-->
<?php if ($mkcms_hz == 1) { ?>
<div class="stui-pannel stui-pannel-bg clearfix hidden-sm hidden-xs"><div class="stui-pannel-box"><div class="stui-pannel_hd"><div class="stui-pannel__head active bottom-line clearfix"><h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-hezuo"></use></svg>合作伙伴</h3></div></div><div class="stui-pannel_bd clearfix"><ul class="stui-link__pic clearfix"><li class="col-md-7 col-sm-4 col-xs-3"><a href="http://v.qq.com/" target="_blank" title=""> <img src="/template/jingpin/img/logo/qq.png"/> </a></li><li class="col-md-7 col-sm-4 col-xs-3"><a href="http://www.youku.com/" target="_blank" title=""> <img src="/template/jingpin/img/logo/youku.png"/> </a></li><li class="col-md-7 col-sm-4 col-xs-3"><a href="http://www.iqiyi.com/" target="_blank" title=""> <img src="/template/jingpin/img/logo/iqiyi.png"/></a></li><li class="col-md-7 col-sm-4 col-xs-3"><a href="http://v.sohu.com/" target="_blank" title=""> <img src="/template/jingpin/img/logo/sohu.png"/> </a></li><li class="col-md-7 col-sm-4 col-xs-3"><a href="http://www.mgtv.com/" target="_blank" title=""> <img src="/template/jingpin/img/logo/mg.png"/> </a></li><li class="col-md-7 col-sm-4 col-xs-3"><a href="http://www.pptv.com/" target="_blank" title=""> <img src="/template/jingpin/img/logo/pptv.png"/> </a></li><li class="col-md-7 col-sm-4 col-xs-3"><a href="http://www.tudou.com/" target="_blank" title=""> <img src="/template/jingpin/img/logo/tudou.png"/> </a></li><li class="col-md-7 col-sm-4 col-xs-3"><a href="http://www.letv.com/" target="_blank" title=""> <img src="/template/jingpin/img/logo/letv.png"/> </a></li><li class="col-md-7 col-sm-4 col-xs-3"><a href="http://www.ku6.com/" target="_blank" title=""> <img src="/template/jingpin/img/logo/ku6.png"/> </a></li><li class="col-md-7 col-sm-4 col-xs-3"><a href="https://v.wasu.cn/" target="_blank" title=""> <img src="/template/jingpin/img/logo/wasu.png"/> </a></li><li class="col-md-7 col-sm-4 col-xs-3"><a href="http://www.kankan.com/" target="_blank" title=""> <img src="/template/jingpin/img/logo/kankan.png"/> </a></li><li class="col-md-7 col-sm-4 col-xs-3"><a href="http://www.baofeng.com/" target="_blank" title=""> <img src="/template/jingpin/img/logo/baofeng.png"/> </a></li>          <li class="col-md-7 col-sm-4 col-xs-3"><a href="http://www.fun.tv/" target="_blank" title=""> <img src="/template/jingpin/img/logo/fengxing.png"/> </a></li><li class="col-md-7 col-sm-4 col-xs-3"><a href="http://www.1905.com/" target="_blank" title=""> <img src="/template/jingpin/img/logo/1905.png"/> </a></li></ul></div></div></div>
<?php } ?>
<!--合作-->
<!--友链-->
<?php if ($mkcms_yq == 1) { ?>
<div class="stui-pannel stui-pannel-bg clearfix">
<ul class="stui-vodlist clearfix">
<?php echo $mkcms_ad10; ?>
</ul>
</div>
<div class="stui-pannel stui-pannel-bg clearfix">
<div class="stui-pannel-box">
<div class="stui-pannel_hd">
<div class="stui-pannel__head active bottom-line clearfix">
<h3 class="title">
<svg class="iconm" aria-hidden="true"><use xlink:href="#icon-link"></use></svg>友情链接</h3>
</div>
</div>
<div class="stui-pannel_bd clearfix">
<div class="col-xs-1">
<ul class="stui-link__text clearfix">
<?php
    $result = mysqli_query($conn, 'select * from mkcms_link');
    while ($row = mysqli_fetch_array($result)) {
        echo '<li><a class="text-color-999" href="', $row['l_url'], '" target="_blank">', $row['l_name'], '</a></li>';
    } ?>
</ul></div></div></div></div>
<?php } ?>
<!--友链-->
</div>
</div>
<?php include 'footer.php'; ?>