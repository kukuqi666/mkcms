<?php  include 'head.php';$top='active';?>
<title>影视排行榜-百度风云榜-搜狗影视榜-<?php echo $mkcms_seoname;?></title>
<meta name="keywords" content="影视排行榜,<?php echo $mkcms_keywords;?>">
<meta name="description" content="影视排行榜,<?php echo $mkcms_description;?>">
<meta name="referrer" content="same-origin">
<style type="text/css">.stui-vodlist__thumb{padding-top: 60%}.stui-vodlist__text li a{padding: 5px 0 5px}</style>
<body>
<?php include 'header.php';?>
<div class="container">
  <div class="row">
    <div class="stui-pannel stui-pannel-bg clearfix">
	<div class="stui-pannel-box">
	    <div class="stui-pannel_hd">
	        <div class="stui-pannel__head active bottom-line clearfix">
	        <h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-remen"></use></svg>影视风云榜</h3>
		    </div>
	</div>
	</div>
   <div class="col-lg-4 col-md-3 col-sm-2 col-xs-2">
            <div class="stui-pannel__head active bottom-line clearfix">
			<a class="more text-muted pull-right" href="movie.html">更多 <i class="icon iconfont icon-more"></i></a>
            <h3 class="title">电影</h3>
            </div>
			<div class="stui-pannel_bd clearfix">
			<ul class="stui-vodlist__text active col-pd clearfix" style="box-shadow: 0 2px 10px rgba(0,0,0,.05);">
<?php
$surl = 'https://api.web.360kan.com/v1/rank?cat=2&size=16';
$list=json_decode(fileget3($surl,0),true);
$i=0;while($i<16){
$bdurl=$list['data'][$i]['ent_id'];
$bdnum=$i;
$title=$list['data'][$i]['title'];
$topimg=$list['data'][0]['cover'];
$topnum=$list['data'][$i]['pv'];
$chuandi='/vod/m/'.$bdurl.'.html';
if($i<1){echo '<li class="padding-0"><div class="stui-vodlist__box">
<a class="stui-vodlist__thumb lazyload img-shadow" href="',$chuandi,'" title="',$title,'" alt="',$title,'" data-original="',$topimg,'" style="padding-top:60%;">
<span class="play hidden-xs"></span>
<span class="pic-text text-center">',$title,'</span>
<span class="pic-tag pic-tag-h">Top</span>
<span class="pic-tag pic-tag-k">',$topnum,'℃</span>
</a></div></li>';}
else{
echo '<li class="col-xs-1 padding-0">
	<a class="text-overflow" href="',$chuandi,'" title="',$title,'">
	<span class="am-badge am-round pull-left">',$bdnum,'</span><span class="text-muted pull-right">',$topnum,' ℃</span><em class="text-red"></em>&nbsp;',$title,'
</a></li>';}$i++;}?>
				 </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-3 col-sm-2 col-xs-2">
          <div class="stui-pannel__head active bottom-line clearfix">
			<a class="more text-muted pull-right" href="tv.html">更多 <i class="icon iconfont icon-more"></i></a>
            <h3 class="title">电视</h3>
            </div>
			<div class="stui-pannel_bd clearfix">
			<ul class="stui-vodlist__text active col-pd clearfix" style="box-shadow: 0 2px 10px rgba(0,0,0,.05);">
<?php
$surl = 'https://api.web.360kan.com/v1/rank?cat=3&size=16';
$list=json_decode(fileget3($surl,0),true);
$i=0;while($i<16){
$bdurl=$list['data'][$i]['ent_id'];
$bdnum=$i;
$topimg=$list['data'][0]['cover'];
$title=$list['data'][$i]['title'];
$topnum=$list['data'][$i]['pv'];
$chuandi='/vod/tv/'.$bdurl.'.html';
if($i<1){echo '<li class="padding-0"><div class="stui-vodlist__box">
<a class="stui-vodlist__thumb lazyload img-shadow" href="',$chuandi,'" title="',$title,'" alt="',$title,'" data-original="',$topimg,'" style="padding-top:60%;">
<span class="play hidden-xs"></span>
<span class="pic-text text-center">',$title,'</span>
<span class="pic-tag pic-tag-h">Top</span>
<span class="pic-tag pic-tag-k">',$topnum,'℃</span>
</a></div></li>';}
else{
echo '<li class="col-xs-1 padding-0">
	<a class="text-overflow" href="',$chuandi,'" title="',$title,'">
	<span class="am-badge am-round pull-left">',$bdnum,'</span><span class="text-muted pull-right">',$topnum,' ℃</span><em class="text-red"></em>&nbsp;',$title,'
</a></li>';}$i++;}?>
				 </ul>
          </div>
        </div>
<div class="col-lg-4 col-md-3 col-sm-2 col-xs-2">
            <div class="stui-pannel__head active bottom-line clearfix">
			<a class="more text-muted pull-right" href="zongyi.html">更多 <i class="icon iconfont icon-more"></i></a>
            <h3 class="title">综艺</h3>
            </div>
			<div class="stui-pannel_bd clearfix">
			<ul class="stui-vodlist__text active col-pd clearfix" style="box-shadow: 0 2px 10px rgba(0,0,0,.05);">
<?php
$surl ='https://api.web.360kan.com/v1/rank?cat=4&size=16';
$list=json_decode(fileget3($surl,0),true);
$i=0;while($i<16){
$bdurl=$list['data'][$i]['ent_id'];
$bdnum=$i;
$topimg=$list['data'][0]['cover'];
$title=$list['data'][$i]['title'];
$topnum=$list['data'][$i]['pv'];
$chuandi='/vod/va/'.$bdurl.'.html';
if($i<1){echo '<li class="padding-0"><div class="stui-vodlist__box">
<a class="stui-vodlist__thumb lazyload img-shadow" href="',$chuandi,'" title="',$title,'" alt="',$title,'" data-original="',$topimg,'" style="padding-top:60%;">
<span class="play hidden-xs"></span>
<span class="pic-text text-center">',$title,'</span>
<span class="pic-tag pic-tag-h">Top</span>
<span class="pic-tag pic-tag-k">',$topnum,'℃</span>
</a></div></li>';}
else{
echo '<li class="col-xs-1 padding-0">
	<a class="text-overflow" href="',$chuandi,'" title="',$title,'">
	<span class="am-badge am-round pull-left">',$bdnum,'</span><span class="text-muted pull-right">',$topnum,' ℃</span><em class="text-red"></em>&nbsp;',$title,'
</a></li>';}$i++;}?>
				 </ul>
          </div>
        </div>
<div class="col-lg-4 col-md-3 col-sm-2 col-xs-2">
            <div class="stui-pannel__head active bottom-line clearfix">
			<a class="more text-muted pull-right" href="dongman.html">更多 <i class="icon iconfont icon-more"></i></a>
            <h3 class="title">动漫</h3>
            </div>
			<div class="stui-pannel_bd clearfix">
			<ul class="stui-vodlist__text active col-pd clearfix" style="box-shadow: 0 2px 10px rgba(0,0,0,.05);">
<?php
$surl = 'https://api.web.360kan.com/v1/rank?cat=5&size=16';
$list=json_decode(fileget3($surl,0),true);
$i=0;while($i<16){
$bdurl=$list['data'][$i]['ent_id'];
$bdnum=$i;
$topimg=$list['data'][0]['cover'];
$title=$list['data'][$i]['title'];
$topnum=$list['data'][$i]['pv'];
$chuandi='/vod/ct/'.$bdurl.'.html';
if($i<1){echo '<li class="padding-0"><div class="stui-vodlist__box">
<a class="stui-vodlist__thumb lazyload img-shadow" href="',$chuandi,'" title="',$title,'" alt="',$title,'" data-original="',$topimg,'" style="padding-top:60%;">
<span class="play hidden-xs"></span>
<span class="pic-text text-center">',$title,'</span>
<span class="pic-tag pic-tag-h">Top</span>
<span class="pic-tag pic-tag-k">',$topnum,'℃</span>
</a></div></li>';}
else{
echo '<li class="col-xs-1 padding-0">
	<a class="text-overflow" href="',$chuandi,'" title="',$title,'">
	<span class="am-badge am-round pull-left">',$bdnum,'</span><span class="text-muted pull-right">',$topnum,' ℃</span><em class="text-red"></em>&nbsp;',$title,'
</a></li>';}$i++;}?>
				 </ul>
          </div>
        </div>
      </div>
<div class="stui-pannel stui-pannel-bg clearfix">
	<div class="stui-pannel-box">
	<div class="stui-pannel_hd">
	<div class="stui-pannel__head active bottom-line clearfix">
	<h3 class="title">今日电影热搜排行榜</h3></div>
	</div>
	</div>
	    <ul class="wprm">
			<b>
			<?php
			$surl = $mkcms_domain.'json/sohot.php?tab=movie';
			$data=json_decode(fileget3($surl),true);
				$i=0;while($i<30){
					$sotitle=$data['data'][$i]['top'];
					echo '<li><a href="seacher-',$sotitle,'.html" title="',$sotitle,'">',$sotitle,'</a></li>';$i++;}?>
		</b>
	</ul>
</div>
<div class="stui-pannel stui-pannel-bg clearfix">
	<div class="stui-pannel-box">
	<div class="stui-pannel_hd">
	<div class="stui-pannel__head active bottom-line clearfix">
	<h3 class="title">今日电视剧热搜排行榜</h3></div>
	</div>
	</div>
	    <ul class="wprm">
			<b>
			<?php
			$surl = $mkcms_domain.'json/sohot.php?tab=teleplay';
			$data=json_decode(fileget3($surl,0),true);
				$i=0;while($i<30){
					$sotitle=$data['data'][$i]['top'];
					echo '<li><a href="seacher-',$sotitle,'.html" title="',$sotitle,'">',$sotitle,'</a></li>';$i++;}?>
		</b>
	</ul>
</div>
<div class="stui-pannel stui-pannel-bg clearfix">
	<div class="stui-pannel-box">
	<div class="stui-pannel_hd">
	<div class="stui-pannel__head active bottom-line clearfix">
	<h3 class="title">今日综艺热搜排行榜</h3></div>
	</div>
	</div>
	<ul class="wprm">
		<b>
			<?php
			$surl = $mkcms_domain.'json/sohot.php?tab=teleplay';
			$data=json_decode(fileget3($surl,0),true);
				$i=0;while($i<30){
					$sotitle=$data['data'][$i]['top'];
					echo '<li><a href="seacher-',$sotitle,'.html" title="',$sotitle,'">',$sotitle,'</a></li>';$i++;}?>
		</b>
	</ul>
</div>
	</div>
</div>
<?php  include 'footer.php';?>