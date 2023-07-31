<?php
include 'head.php';
$zx = 'active';
?>
</style><link rel="stylesheet" href="/template/jingpin/css/news.css" type="text/css">
<title><?php echo $onee[0] ?>-<?php echo $mkcms_seoname; ?></title>
<meta name="keywords" content="<?php echo $ks[0] ?>,<?php echo $mkcms_keywords; ?>">
<meta name="description" content="<?php echo $des[0] ?>">
</head>
<body>
<?php
include 'header.php'; ?>
<div class="container">
	<div class="row">
	<div class="col-lg-wide-75 col-xs-1 padding-0">
	<div class="stui-pannel-box">
	<div class="stui-pannel stui-pannel-bg clearfix">
<div class="fed-arti-info fed-part-layout fed-back-whits">
   <div class="fed-arti-head fed-padding fed-part-rows fed-text-sm-center fed-line-bottom">
    <h1 class="fed-font-xxiv"><?php echo $onee[0] ?></h1>
    <p class="fed-text-muted"><?php echo $from; ?></p>
   </div>
   <div class="fed-arti-content fed-padding">
<?php echo $string; ?>
<script type="text/javascript">
if(document.getElementById('fed-now')) document.getElementById('fed-now').innerHTML='1';if(document.getElementById('fed-count')) document.getElementById('fed-count').innerHTML='1';
</script>
  </div>
  </div></div></div>
<div class="col-lg-wide-25 stui-pannel-side hidden-md hidden-sm hidden-xs">
				<div class="stui-pannel stui-pannel-bg clearfix">
					<div class="stui-pannel-box">
			<div class="stui-pannel_hd">
						<div class="stui-pannel__head active bottom-line clearfix">
						<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-movie"></use></svg>最新资讯</h3>
						</div>
				</div>
				<div class="stui-pannel_bd clearfix">
			<ul class="stui-vodlist__text active col-pd clearfix">
<?php
$topimg = $list['cover']['img'];
$title = $list['data'][0]['title'];
$chuandi = 'content-' . $list['data'][0]['link1'] . '-' . $list['data'][0]['link2'] . '.html';
echo '<li class="padding-0"><div class="stui-vodlist__box">
<a class="stui-vodlist__thumb lazyload img-shadow" href="' , $chuandi , '" title="' , $title , '" alt="' , $title , '" data-original="' , $topimg , '" style="padding-top:60%;">
<span class="play hidden-xs"></span>
<span class="pic-text text-center">' , $title , '</span>
<span class="pic-tag pic-tag-h">Top</span>
</a></div></li>';
?>
<?php
$i = 1;
while ($i < 10) {
    $title = $list['data'][$i]['title'];
    $chuandi = 'content-' . $list['data'][$i]['link1'] . '-' . $list['data'][$i]['link2'] . '.html';
echo '<li class="col-xs-1 padding-0">
	<a class="text-overflow" href="',$chuandi,'" title="',$title,'">
	<span class="am-badge am-round pull-left">',$i + 1,'</span><em class="text-red"></em>&nbsp;',$title,'
</a></li>';
 $i++;} ?>
</ul>
</div>
</div>
</div>
<?php
$rimg = $list['relate']['img'];
$rtitle = $list['relate']['title'];
$rlink = $list['relate']['link'];
$rzhuyan = $list['relate']['zhuyan'];
if (empty($rimg)) {$yc = 'style="display: none;"';}
				echo '<div class="stui-pannel stui-pannel-bg clearfix" ',$yc,'>
				<div class="stui-pannel-box">
                <div class="stui-pannel_hd">
						<div class="stui-pannel__head active bottom-line clearfix">
						<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-movie"></use></svg>相关电影</h3>
						</div>
				</div>
					<div class="stui-pannel_bd clearfix">
						<ul class="stui-vodlist__text active col-pd clearfix">
						<li class="col-xs-1 padding-0">
						<a class="text-overflow" href="',$rlink,'" target="_blank" title="查看《',$rtitle,'》预告片"><img src="',$rimg,'" data-original="',$rimg,'" onerror=src="/template/jingpin/img/load.gif" alt="',$rtitle,'" style="width:80%;margin-left:10%;"/></a>
						<a class="text-overflow" href="',$rlink,'" target="_blank" title="查看《',$rtitle,'》预告片"><h4 class="title" style="margin-left:10%;"><i class="icon iconfont icon-more text-muted pull-right"></i>',$rtitle,' 预告片</h4></a>';
						if (!empty($rzhuyan)) { echo '<a class="text-overflow"><h5 class="title" style="margin-left:10%;">主演：',$rzhuyan,'等</h5></a>';} ?>
						</li>
						</ul>
						</div>
                  </div>
				</div>
		</div>
  </div>
</div>
<script>
    $('.hot-cate-title li').hover(function () {
        var index = $(this).data('index'),
            cate_list = $('.hot-cate-list[data-pid=' + index + ']');
        if ($('.hot-cate-title.activee').data('index') === index) {
            return true;
        }
        $('.hot-cate-title li').removeClass('activee');
        $('.hot-cate-list').removeClass('activee');
        $(this).addClass('activee');
        cate_list.addClass('activee');
    }, function () {

    });
  </script>
<?php
include 'footer.php'; ?>