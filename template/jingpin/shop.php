<?php
error_reporting(0); 
header('Content-type:text/html;charset=utf-8'); 
include 'head.php';
$shop='active'?>
<title>天猫优惠券-每天实时更新千款优惠券，一折限时疯抢！-<?php echo $mkcms_seoname;?></title>
<meta name="keywords" content="淘宝优惠券,天猫优惠券,优惠券折扣,9块9包邮,限时特卖,优品折扣,领券优惠,专业砍价,<?php echo $mkcms_keywords;?>">
<meta name="description" content="每天实时更新千款优惠券，纯人工筛选验货，限时限量特卖，全场1折包邮！">
</head>
<body>
<?php include 'header.php';?>
<div class="container">
<div class="row">
<div class="stui-pannel stui-pannel-bg clearfix">
<div class="stui-pannel-box">
<div class="stui-pannel_hd">
<div class="stui-pannel__head active bottom-line clearfix">
<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-shopping"></use></svg>好货精选</h3>
</div>
</div>
</div>
<div class="stui-pannel_bd">
<ul class="stui-vodlist clearfix">
<?php
$num=$list['num']['numcount'];
$i=0;while($i<$num){
$dd=$list['data'][$i]['tid'];
$pic=$list['data'][$i]['cover'];
$title =  $list['data'][$i]['title'];
$yuanjia = $list['data'][$i]['yuanjia'];
$quan = $list['data'][$i]['quan'];
$jiage = $list['data'][$i]['jiage'];
if ($i<$num){
echo '<li class="col-md-5 col-sm-3 col-xs-2 ';
if ($i>=98){echo 'hidden-xs';}echo '">
<div class="stui-vodlist__box">
<a class="stui-vodlist__thumb lazyload" style="padding-top:100%;" href="',$mkcms_dataoke,'?r=l/d&u=',$mkcms_dataokeid,'&id=',$dd,'" target="_blank" title="',$title,'" data-original="',$pic,'">
<span class="pic-tag pic-tag-l">原价￥',$yuanjia,'</span>
<span class="pic-tag pic-tag-b">券后￥',$jiage,'</span>
<span class="pic-tag pic-tag-h">', $quan,'元券</span>
</a>
<div class="stui-vodlist__detail">
<h4 class="title text-overflow"><a href="',$mkcms_dataoke,'?r=l/d&u=',$mkcms_dataokeid,'&id=',$dd,'" target="_blank" title="',$title,'">',$title,'</a></h4>
</div>
</div>
</li>';}$i++;} ?> 
</ul>
</div>
</div>
</div>
</div>
<ul class="stui-page text-center cleafix">
<?php $page=$_GET['page'];echo getshop($page,100,'');?><li><a>共100页</a></li>
</ul>
<?php  include 'footer.php';?>