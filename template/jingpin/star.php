<?php 
include 'head.php';
$mx='active';
$mxq=$_GET['wd'];
$leixing=$_GET['tab'];
$pageno=intval($_GET['pageno']);
if($pageno==''){$pageno=1;}//页数
?>
<title><?php if (!empty($mxq)) {echo '《'.$mxq.'》';} else{echo $mxq;}?>最新电影-最新电视剧-明星个人资料剧情综艺节目-VIP高清影院视频抢先片免费在线观看-<?php echo $mkcms_seoname;?></title>
<meta name="keywords" content="<?php echo $mxq?>,影视资源,影片资源搜索,最新剧集,好看剧集,最新剧集排行,<?php echo $mkcms_keywords;?>">
<meta name="description" content="<?php echo $mkcms_description;?>">
<script type="text/javascript">
function submit(){var str=document.getElementById("wd").value;if(str==""||str==null){alert("请输入影片关键词")}else{var s=$("#wd").val();s=s.replace(/\s/g,"");window.location.href="/seacher-"+s+".html"}};
</script>
</head>
<body>
<?php  include 'header.php';?>
	<div class="container">
		<div class="row">
<div class="stui-pannel_bd">
<div class="hy-video-head" style=" text-align: center;">
                        <h4 class="margin-t0"><span style="color:#F05D2E;">请在下方输入<span style="color:red">【明星名称】</span>进行搜索</span></h4>
                            <div class="row" style="padding-left: 5px; padding-right: 5px;">
<div class="col-md-3"></div>
<div class=" col-md-3">
<div class="input-group">
<div class="input-group-addon">明星名称：</div>
<input tabindex="2" class="form-control searchall" id="searchs" name="sousuo" type="text" placeholder="在这里输入明星关键词" value="<?php echo $mxq?>" required="required" onkeydown='if(event.keyCode==13){cu.click()}' />
<span class="input-group-btn "> 
<button id="cu" class="btnn btn-danger" onclick="sub3()"> &nbsp; 搜 &nbsp; 索 &nbsp; </button>
</span>
</div>
<div style="display:none;">
<div class="input-group">
<select style="color:#999999;" name="mode" id="mode" class="form-control">
<option value="mxstar">请输入明星名称搜索</option>
</select></div>
</div>
</div>  
<div class="col-md-3"></div>
</div>
<p style="text-align: center; margin: 15px 0 10px 0;"><span style="color:#d9534f; padding: 5px;">温馨提示：如没有您想要的搜索结果，请通过邮箱反馈给我们，我们将尽快更新相关影片！</span></p>
</div>
<ul class="stui-vodlist clearfix">
<?php
$wangzhi="https://api.so.360kan.com/index?force_v=1&kw=".$_GET['wd']."&from=&pageno=1&v_ap=1&tab=all";
$data = json_decode(fileget2($wangzhi,0),true);
$bk =$data['data']['artist']['url'];//百科链接
$tp =$data['data']['artist']['cover'];//图片
$tp = str_replace('p0', 'p1', $tp);
$xm =$data['data']['artist']['title'];//姓名
$bm =$data['data']['artist']['alias'];//别名
$di =$data['data']['artist']['area'];//地区
$sr =$data['data']['artist']['birth'];//生日
$xz =$data['data']['artist']['xingzuo'];//星座
$xx =$data['data']['artist']['blood'];//血型
$sg =$data['data']['artist']['height'];//身高
$tz =$data['data']['artist']['weight'];//体重
$js =$data['data']['artist']['desc'];//介绍
					if (!empty($xm)){
					echo '<div class="stui-pannel-box">
		<div class="stui-content__thumb">
			<a class="stui-vodlist__thumb picture v-thumb" href="',$bk,'" data-original="',$tp,'" target="_blank" title="',$xm,'">
			<img src="',$tp,'" data-original="',$tp,'" alt="',$xm,'" title="',$xm,'" width="100%"/>
			<span class="pic-text text-right"></span>
			</a>
		</div>
	<div class="stui-content__detail">
	<div class="col-md-1"><h1 class="title"><a href="',$bk,'" target="_blank" title="',$xm,'">',$xm,'(百科资料)</a></h1></div>
	<div class="col-md-3 col-sm-2 col-xs-2">别名：',$bm,'</div>
	<div class="col-md-3 col-sm-2 col-xs-2">地区：',$di,'</div>
	<div class="col-md-3 col-sm-2 col-xs-2">生日：',$sr,'</div>
	<div class="col-md-3 col-sm-2 col-xs-2">星座：',$xz,'</div>
	<div class="col-md-3 col-sm-2 col-xs-2">血型：',$xx,'</div>
	<div class="col-md-3 col-sm-2 col-xs-2">身高：',$sg,'</div>
	<div class="col-md-3 col-sm-2 col-xs-2">体重：',$tz,'</div>
	<div class="col-md-1 col-sm-1 col-xs-1">介绍：',$js,'</div>
	</div>
	</div>';}?>
				</ul>
</div>
<div class="col-lg-wide-75 col-xs-1 padding-0">
<div class="stui-pannel stui-pannel-bg clearfix">
<?php
$leixing = $_GET['tab'];
if (!empty($mxq)){?>
			<div class="stui-pannel_hd">
				<div class="stui-pannel__head active bottom-line clearfix">
					<span class="more text-muted pull-right hidden-xs">最近更新<a href="mxstar_<?php echo $mxq;?>_dy_1.html"><?php if (!empty($mxq)) {echo '《'.$mxq.'》';} else{echo $mxq;}?></a>的影片</span>
					<ul class="nav nav-head">
					<li <?php if ($leixing=="dy"){echo 'class="active"';}?>><a href="mxstar_<?php echo $mxq;?>_dy_1.html">电影</a></li>
					<li <?php if ($leixing=="ds"){echo 'class="active"';}else{};?>><a href="mxstar_<?php echo $mxq;?>_ds_1.html">电视剧</a></li>
					<li <?php if ($leixing=="zy"){echo 'class="active"';}else{};?>><a href="mxstar_<?php echo $mxq;?>_zy_1.html">综艺</a></li>
					<li <?php if ($leixing=="dm"){echo 'class="active"';}else{};?>><a href="mxstar_<?php echo $mxq;?>_dm_1.html">动漫</a></li>
					</ul>
				</div>
			</div>
			<div class="stui-pannel_bd">
				<ul class="stui-vodlist clearfix">
					<?php
					$leixing=$_GET['tab'];
					$pageno=$_GET['pageno'];
					if ($leixing==""){
						$leixing='dy';
					}
$surl = $mkcms_domain.'/json/sostar.php?wd='.$mxq."&tab=".$leixing."&pageno=".$pageno;
$data=json_decode(fileget2($surl,0),true);
$num=$data['numcount']['count'];
$i=0;while($i<$num){
$link=$data['data'][$i]['link'];
$link=$data['data'][$i]['link'];
$cover=$data['data'][$i]['cover'];
$title=$data['data'][$i]['title'];
$tag=$data['data'][$i]['tag'];
$chuandi='../../vod'.$link;
echo '<li class="col-md-5 col-sm-4 col-xs-3"><div class="stui-vodlist__box stui-vodlist__bg">
<a class="stui-vodlist__thumb lazyload" href="',$chuandi,'" title="',$title,'" data-original="',$cover,'">
<span class="play hidden-xs"></span>
<span class="pic-tag pic-tag-b">',$tag,'</span></a>
<div class="stui-vodlist__detail active">
<h4 class="title text-overflow"><a href="',$chuandi,'" title="',$title,'">',$title,'</a></h4>
</div>
</div>
</li>'; 
$i++;}?>
				</ul>
				<ul class="stui-page text-center cleafix">
				<?php if (!empty($link)){
				$fyurl=$mkcms_domain.'/json/mxp.php?wd='.$mxq.'&tab='.$leixing.'&from=&pageno='.$pageno;
				$data=fileget2($fyurl,0);
				echo $data;
			}
				else{?>
				<p style="text-align: center;"><img class="sosoimg" src="template/jingpin/img/blank.png" alt="暂无内容"/></p>
				<?php }?>
				</ul>
			</div>
 <?php } else{echo "";}?>
 </div>
 <div class="stui-pannel stui-pannel-bg clearfix">
	<div class="stui-pannel-box">
	<div class="stui-pannel_hd">
	<div class="stui-pannel__head active bottom-line clearfix">
	<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-list"></use></svg>百度热搜榜</h3></div>
	</div>
	</div>
			<div class="stui-pannel_hd">
			    <ul class="stui-vodlist clearfix">
				<?php
				    $surl = $mkcms_domain.'/json/resou.php';
				    $data=json_decode(fileget2($surl,0),true);
					$i=0;while($i<30){
					$sotitle=$data['data'][$i]['top'];
					$solink=$data['data'][$i]['link'];
					$soimg=$data['data'][$i]['img'];
					echo '<li class="col-md-6 col-sm-3 col-xs-3">
							<div class="stui-vodlist__box">
							<a class="stui-vodlist__thumb1 lazyload" href="',$solink,'" target="_blank" title="',$sotitle,'" data-original="',$soimg,'"><span class="play hidden-xs"></span></a>
							</div>
							<div class="stui-vodlist__detail">
							<h4 class="title text-overflow"><a href="',$solink,'">',$sotitle,'</a></h4>
							</div>
							</li>';
					$i++;}?>
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