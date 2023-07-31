<?php  include 'head.php';$zx='active'?>
<link rel="stylesheet" href="/template/jingpin/css/news.css" type="text/css">
<title>影视资讯-<?php echo $mkcms_seoname;?></title>
<meta name="keywords" content="追热剧-最新剧集-好看剧集-最新剧集排行,<?php echo $mkcms_keywords;?>">
<meta name="description" content="<?php echo $mkcms_description;?>">
</head>
<body>
<?php include 'header.php';?>
<div class="container">
	<div class="row">
<div class="col-lg-wide-75 col-xs-1 padding-0">
	<div class="stui-pannel stui-pannel-bg clearfix">
			<div class="stui-pannel-box">
			<div class="stui-pannel_hd">
						<div class="stui-pannel__head active bottom-line clearfix">
						<span class="more text-muted pull-right hidden-xs"></span>
						<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-list"></use></svg>
				影视资讯</h3></div>
					</div>
<?php
$i=0;
while ($i<12){ 
$link1=$list['data'][$i]['link1'];
$link2=$list['data'][$i]['link2'];
$cover=$list['data'][$i]['cover'];
$time=$list['data'][$i]['time'];
$desc=$list['data'][$i]['desc'];
$title=$list['data'][$i]['title'];
echo '<div class="bottom-line clearfix">
     <dl class="fed-list-arti fed-deta-info fed-deta-padding fed-margin fed-part-rows fed-part-over">
      <dt class="fed-deta-images fed-list-info fed-col-xs3">
        <a class="fed-list-pics fed-lazy fed-part-16by9" href="content-',$link1,'-',$link2,'.html" target="_blank" style="background-image: url(&quot;',$cover,'&quot;);"><span class="fed-list-play fed-list-arts fed-hide-xs"></span></a>
      </dt>
      <dd class="fed-deta-content fed-col-xs7 fed-col-sm8 fed-col-lg9">
       <h3 class="fed-visible"><a class="fed-part-etwo fed-visible" href="content-',$link1,'-',$link2,'.html"target="_blank" >',$title,'</a></h3>
       <div class="fed-hide-xs fed-text-muted">
        <p class="fed-part-etwo">',$desc,'</p>
       </div>
       <span class="fed-visible fed-text-muted">',$time,'</span>
      </dd>
     </dl></div>';
$i++;} ?>
<ul class="stui-page text-center cleafix">
<?php $page=$_GET['page'];echo getPageHtmll($page,99,'');?><li><a>共99页</a></li>
</ul>
</div>
</div>
</div>
<div class="col-lg-wide-25 stui-pannel-side hidden-md hidden-sm hidden-xs">
			<div class="stui-pannel stui-pannel-bg clearfix">
				<div class="stui-pannel-box">
					<div class="stui-pannel_hd">
						<div class="stui-pannel__head active bottom-line clearfix">
						<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-bang"></use></svg>影视热度排行榜</h3>
						</div>
					</div>
					<div class="stui-pannel_bd clearfix">
						<ul class="stui-vodlist__text active col-pd clearfix">
						<?php 
					$dybang=$mkcms_domain.'/json/dybang.php';
					$bd=json_decode(fileget3($dybang,0),true);
					$i=0;while ($i<10){
					   echo '<li class="col-xs-1 padding-0"><a class="text-overflow" href="vod/m/',$bd1['data'][$i]['ent_id'],'.html" title="',$bd1['data'][$i]['title'],'"><span class="am-badge am-round pull-left">',$i+1,'</span><span class="text-muted pull-right">',$bd1['data'][$i]['pv'],'</span><em class="text-red"></em>&nbsp;',$bd1['data'][$i]['title'],'</a></li>';
					    $i++;}?>
						</ul>
					</div>
				</div>
			</div>
			<div class="stui-pannel stui-pannel-bg clearfix">
				<div class="stui-pannel-box">
					<div class="stui-pannel_hd">
						<div class="stui-pannel__head active bottom-line clearfix">
						<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-bang"></use></svg>剧集热度排行榜</h3>
						</div>
					</div>
					<div class="stui-pannel_bd clearfix">
						<ul class="stui-vodlist__text active col-pd clearfix">
					<?php 
					$dsbang=$mkcms_domain.'/json/dsbang.php';
					$bd=json_decode(fileget3($dsbang,0),true);
					$i=0;while ($i<10){
					    echo '<li class="col-xs-1 padding-0"><a class="text-overflow" href="/vod/tv/',$bd2['data'][$i]['ent_id'],'.html" title="',$bd2['data'][$i]['title'],'"><span class="am-badge am-round pull-left">',$i+1,'</span><span class="text-muted pull-right">',$bd2['data'][$i]['pv'],'</span><em class="text-red"></em>&nbsp;',$bd2['data'][$i]['title'],'</a></li>';
					    $i++;}?>
						</ul>
					</div>
				</div>
			</div>
			<div class="stui-pannel stui-pannel-bg clearfix">
				<div class="stui-pannel-box">
					<div class="stui-pannel_hd">
						<div class="stui-pannel__head active bottom-line clearfix">
						<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-bang"></use></svg>综艺热度排行榜</h3>
						</div>
					</div>
					<div class="stui-pannel_bd clearfix">
						<ul class="stui-vodlist__text active col-pd clearfix">
					<?php 
					$zybang=$mkcms_domain.'/json/zybang.php';
					$bd=json_decode(fileget3($zybang),true);
					$i=0;while ($i<10){
					     echo '<li class="col-xs-1 padding-0"><a class="text-overflow" href="/vod/tv/',$bd3['data'][$i]['ent_id'],'.html" title="',$bd3['data'][$i]['title'],'"><span class="am-badge am-round pull-left">',$i+1,'</span><span class="text-muted pull-right">',$bd3['data'][$i]['pv'],'</span><em class="text-red"></em>&nbsp;',$bd3['data'][$i]['title'],'</a></li>';
					    $i++;}?>
						</ul>
					</div>
				</div>
			</div>
		</div>
</div>
</div>
<?php  include 'footer.php';?>