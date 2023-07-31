<?php 
include 'head.php';
$c_scontent=explode(',',$mkcms_shoufei);
$c=0;while($c<count($c_scontent))
{if($data["data"][$i]["vod_name"]==$c_scontent[$c]){$cxianshi='style="display:none"';}$c++;}
if ($row['d_jifen']>0){$ok="onclick=\"return confirm('此视频为收费视频，观看需要支付".$row['d_jifen']."积分，您是否观看？')\"";}
else{$ok="";}
?>
<title>《<?php echo $q?>》在线观看-全网免费VIP影视搜索-<?php echo $mkcms_seoname;?></title>
<meta name="keywords" content="<?php echo $q?>,<?php echo $mkcms_keywords;?>">
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
						<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-list"></use></svg><span style="color: #FF00FF;">全网影视：</span>搜索到与《<a href="/seacher-<?php echo $q?>.html" title="<?php echo $q?>"><?php echo $q?></a>》相关的影片</h3>
						</div>
					</div>
					<div class="stui-pannel_bd">
<?php
$url='https://api.so.360kan.com/index?force_v=1&kw='.$q.'&from=&pageno=1&v_ap=1&tab=all';
$fcon = json_decode(fileget2($url,0),true);
$ttitle=$fcon['data']['longData']['rows'][0]['title']; 
$tnum=count($fcon['data']['longData']['rows']) ;
$stitle=$starsearch['data'][0]['title'];
$snum=$starsearch['numcount']['count'];
if (!empty($ttitle)){
echo '<ul class="stui-vodlist__media col-pd clearfix">';
$i=0;while($i<$tnum){
$mvsrc1 = $fcon['data']['longData']['rows'][$i]['en_id']; 
$jianjie= $fcon['data']['longData']['rows'][$i]['description']; 
$tupian=  $fcon['data']['longData']['rows'][$i]['cover']; 
$ttitle1=$fcon['data']['longData']['rows'][$i]['title'];
$ttype=$fcon['data']['longData']['rows'][$i]['cat_name'];
$cat=$fcon['data']['longData']['rows'][$i]['cat_id'];
if($cat=='4'){$vod="ct/";$lx='dongman.html';}
if($cat=='1'){$vod="m/";$lx='dianying.html';}
if($cat=='2'){$vod="tv/";$lx='dianshiju.html';}
if($cat=='3'){$vod="va/";$lx='zongyi.html';}
$chuandi='../../vod/'.$vod.$mvsrc1.'.html';
echo '<li class ="activeclearfix" ',$xianshi,'>
<div class="thumb">
<a class="v-thumb stui-vodlist__thumb lazyload" href="',$chuandi,'" title="',$ttitle1,'" ',$ok,' data-original="',$tupian,'"><span class="play hidden-xs"></span></a>
</div>
<div class="detail">
<h3 class="title"><a href="',$chuandi,'" ',$ok,'>',$ttitle1,$ttype,'</a></h3><br>
<p class="margin-0 hidden-smss hidden-xss"><div class="m-description">',$jianjie,'</div></p>
<p class="margin-0 hidden-smss hidden-xss"><a ',$ok,' class="text-muted" href="',$chuandi,'" title="',$ttitle1,'">查看详情</a></p>
</div>
</li>';$i++;}
echo '</ul>';}
else if(!empty($stitle)){
echo '<ul class="stui-vodlist clearfix">';
$i=0;while($i<$snum){
$mvsrc1 = $starsearch['data'][$i]['link'];
$tupian=$starsearch['data'][$i]['cover'];
$title=$starsearch['data'][$i]['title'];
$jishu=$starsearch['data'][$i]['tag'];
$fenshu1=$starsearch['data'][$i]['score'];
$chuandi='../../vod'.$mvsrc1;
echo '<li class="col-md-5 col-sm-4 col-xs-3">
<div class="stui-vodlist__box stui-vodlist__bg">
<a class="v-thumb stui-vodlist__thumb lazyload" href="',$chuandi,'" title="',$title,'" ',$ok,' data-original="',$tupian,'">
<span class="play hidden-xs"></span>';
if (!($fenshu1 == "")){ echo '<span class="pic-tag pic-tag-h">',$fenshu1,'</span>';}
echo '<span class="pic-tag pic-tag-b">',$jishu,'</span>
</a>
<div class="stui-vodlist__detail  active">
<h4 class="title text-overflow"><a href="',$chuandi,'" ',$ok,' title="',$title,'">',$title,'</a></h4>
</div>
</div>
</li>';
$i++;}
echo '</ul><p style="text-align: center;height: 50px;background: #eee;line-height: 50px;font-size: 16px;cursor: pointer;"><a href="/mxstar_'.$q.'_dy_1.html" title="更多 ',$q,' 的影片">点击查看 ',$q,' 更多影片&gt;&gt;</a></p>';}
else {echo '<p style="text-align: center;"><img class="sosoimg" src="/template/jingpin/img/blank.png" alt="暂无内容"/></p>';}?>
</div>
<?php if ($mkcms_qianxian == 1){?>
<div class="stui-pannel_hd">
			<div class="stui-pannel__head active bottom-line clearfix">
				<span class="more text-muted pull-right hidden-xs"></span>
					<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-list"></use></svg><span style="color: #FF00FF;">抢先资源：</span>搜索到与《<a href="/seacher-<?php echo $q?>.html" title="<?php echo $q?>"><?php echo $q?></a>》相关的影片
					</h3>
			</div>
		</div>
		<div class="stui-pannel_hd">
		<ul class="stui-vodlist__media col-pd clearfix">
		<?php 
						foreach($data["data"] as $i =>$name){
						$ccb="./cxplay/".$data['data'][$i]['vod_id'].".html";?>
							<li class ="activeclearfix" <?php echo $xianshi?>>
							<div class="thumb">
							<a class="v-thumb stui-vodlist__thumb lazyload" href="<?php echo $ccb;?>" title="<?php echo $data["data"][$i]["vod_name"]; ?>" <?php echo $ok;?> data-original="<?php echo $data["data"][$i]["vod_pic"]; ?>"><span class="play hidden-xs"></span>
							<span class="pic-text text-right"></span></a>
							</div>
							<div class="detail">
							<h3 class="title"><a href="<?php echo $ccb;?>" <?php echo $ok;?>><?php echo $data["data"][$i]["vod_name"]; ?></a></h3>
							<p class="data"><span class="text-muted hide">主演：<?php echo $data["data"][$i]["vod_actor"]; ?></span></p>
							<p class="margin-0 hidden-smss hidden-xss"><div class="m-description"><span class="text-muted">简介：</span><?php echo $data["data"][$i]["vod_content"]; ?></div></p><p class="margin-0 hidden-smss hidden-xss"><a <?php echo $ok;?> class="text-muted" href="<?php echo $ccb;?>" title="<?php echo $data["data"][$i]["vod_name"]; ?>">查看详情</a></p>
							</div>
							</li>
						<?php } ?>
						<?php $cxsearch=$data["data"][0]["vod_name"]; if (empty($cxsearch)||$data['data'][$i]['vod_cid']==16 ){?> <p style="text-align: center;"><img class="sosoimg" src="/template/jingpin/img/blank.png" alt="暂无内容"/></p><?php }?>
						</ul>
<p style="text-align: center;height: 50px;background: #eee;line-height: 50px;font-size: 16px;cursor: pointer;"><a href="/jx-<?php echo $q;?>.html" title="更多 <?php echo $q;?> 的影片">点击查看关于 <span style="color: #FF00FF;">“<?php echo $q?>”</span> 的更多影片&gt;&gt;</a></p>
					</div>
<?php }?>
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
		</div>
	</div>
</div>
<?php  include 'footer.php';?>