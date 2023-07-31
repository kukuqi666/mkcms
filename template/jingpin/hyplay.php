<?php
include 'head.php';
$hy='active';
$id=$_GET['id'];
if (!$id){exit();}
$surl = $mkcms_domain.'/json/hyplay.php?id='.$id;
$data=json_decode(fileget2($surl,0),true);
$dd=$data['data'][0]['dd'];
$ee=$data['data'][0]['ee'];
$hh=$data['data'][0]['hh'];
$play='https://liveshare.huya.com/iframe/'.$id;
?>
<title><?php echo $dd;?>-<?php echo $ee;?>-美女跳舞视频-虎牙直播-<?php echo $mkcms_seoname;?></title>
<meta name="keywords" content="<?php echo $dd;?>,<?php echo $ee;?>,<?php echo $mkcms_keywords;?>">
<meta name="description" content="<?php echo $dd;?>-<?php echo $ee;?>,<?php echo $mkcms_description;?>">
<style type="text/css">
#timer{background: rgba(0, 0, 0, 0.59);padding: 5px;text-align: center;width: 30px;position: absolute;top: 5%;right: 2%;color: #fff;font-size: 16px;border-radius: 50%;height: 30px;line-height: 20px}
#xiang{background: rgba(177, 13, 13, 0.87);padding: 5px;text-align: center;width: auto;position: absolute;bottom: 2%;right: 1%;color: #fff;font-size: 16px;border-radius: 10px;height: 20px;line-height: 9px}
#ys,.jkbtn{border: 1px solid #FF9900;background-color: #FF9900;color: #FFFFFF;}
.stui-player__video {margin-bottom: 10px;}
</style>
</head>
<body>
<?php include 'header.php'; ?>
<div class="container">
	<div class="row">
		<div class="col-lg-wide-75 col-xs-1">
			<div class="stui-player__item clearfix">
				<div class="stui-player__video embed-responsive embed-responsive-16by9 clearfix">
					<div id="shiping_box"></div>
				<script type="text/javascript">
					function run(){
					var s = document.getElementById("timer");
					if(!s){
					return false;
					}else{
					s.innerHTML = s.innerHTML * 1 - 1;
					}
					}
					window.setInterval("run();", 1000);
					$('#shiping_box').html('<div style="text-align:center;width:100%;"><?php echo $mkcms_ad1; ?></div><div id="timer"><?php echo $mkcms_miaoshu;?></div>');
					//设置延时函数
					function adsUp(){
					$("#shiping_box").html('<iframe id="video" src="<?php echo $play;?>"  allowfullscreen="true" allowtransparency="true" style="width:100%;border:none"></iframe>');
					}
					//五秒钟后自动收起
					var t = setTimeout(adsUp,<?php echo $mkcms_miaoshu*1000;?>);   
					</script>
				</div>
				<div class="stui-player__detail detail" id="dianshijuid">
				<ul class="more-btn">
				<li><a href="javascript:void(0)" onclick="location.reload()" class="btn btn-sm btn-default">刷新</a></li>
				</ul>
				<h1 class="title" id="xuji"><a title="<?php echo $dd;?><?php echo $ee;?>"><?php echo $dd;?>-<?php echo $ee;?></a><span class="js"></span></h1>
				<span class="text-muted">主播：</span><?php echo $ee;?><span class="split-line"></span>
				<span class="text-muted">人气指数：</span><?php echo $hh;?>
				</div>
			</div><!-- 播放器-->
			<div class="stui-pannel stui-pannel-bg clearfix">
	<div class="stui-pannel-box">
		<div class="stui-pannel_hd">
			<div class="stui-pannel__head bottom-line active clearfix">
				<h3 class="title">
					<svg class="iconm" aria-hidden="true"><use xlink:href="#icon-like"></use></svg>
					猜你喜欢
				</h3>
			</div>
		</div>
		<div class="stui-pannel_bd">
			<ul class="stui-vodlist__bd clearfix">
			<?php
error_reporting(0);
header('Content-Type:text/html;charset=UTF-8');
$surl = 'https://liveapi.huya.com/cache/livelist/getUserLikeList?page=0&pageSize=20&gid=2168';
$list=json_decode(fileget2($surl,0),true);
$i=0;
while ($i<12){
$name =$list['data'][$i]['roomName'];
$id = $list['data'][$i]['profileRoom'];
$ximg = $list['data'][$i]['screenshot'];
$ccb = "hyplay_".$id.".html";
echo '<li class="col-md-6 col-sm-4 col-xs-3">
<div class="stui-vodlist__box stui-vodlist__bg">
<a title="',$vs,'" class="stui-vodlist__thumb1 lazyload" href="',$ccb,'" data-original="',$ximg,'">
<span class="play hidden-xs"></span>
<span class="pic-text text-right"></span>
</a>
<div class="stui-vodlist__detail active">
<h4 class="title text-overflow">
<a title="',$name,'" href="$ccb">',$name,'</a>
</h4>
</div>
</div>
</li>';
$i++;}?>
			</ul>
		</div>
	</div>
</div><!-- 猜你喜欢-->
		</div>
		<div class="col-lg-wide-25 col-xs-1 stui-pannel-side hidden-sm hidden-xs">
			<div class="stui-pannel stui-pannel-bg clearfix">
				<div class="stui-pannel-box">
					<div class="stui-pannel_hd">
						<div class="stui-pannel__head active bottom-line clearfix">
						<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-bang"></use></svg>高清美女排行榜</h3>
						</div>
					</div>
					<div class="stui-pannel_bd clearfix">
						<ul class="stui-vodlist__text active col-pd clearfix">
						<?php
						$surl ='https://www.huya.com/cache.php?m=LiveList&do=getLiveListByPage&gameId=2168&tagAll=0&page=1';
						$data=json_decode(fileget2($surl,0),true);
						$i=0;
						while($i<25){
						$num=$i+1;
						$number=$data['data']['datas'][$i]['totalCount'];
						$length = strlen($number);
						if($length > 4){
							$str = substr_replace(strstr($number,substr($number,-3),' '),'.',-1,0)."万";
							}else{$str = $number;}
						$xvau = $data['data']['datas'][$i]['nick'];
						$do = "hyplay_".$data['data']['datas'][$i]['profileRoom'].".html";
						echo '<li class="col-xs-1 padding-0"><a class="text-overflow" href="',$do,'" title="',$xvau,'"><span class="am-badge am-round pull-left">',$num,'</span><span class="text-muted pull-right">',$str,'</span><em class="text-red"></em>&nbsp;',$xvau,'</a></li>';
						$i++;}?>
						</ul>
					</div>
				</div>
			</div>
		<div class="stui-pannel stui-pannel-bg clearfix">
				<div class="stui-pannel-box clearfix">
					<div class="col-pd text-center">
					<?php echo $mkcms_ad22; ?>
					</div>
				</div>
		</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="template/jingpin/js/history.js"></script>
<script type="text/javascript">var vod_name='<?php echo $dd;?>-<?php echo $ee;?>',vod_url=window.location.href,vod_part='1';</script>
<?php include 'footer.php'; ?>