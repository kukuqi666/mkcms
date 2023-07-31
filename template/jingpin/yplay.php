<?php
include 'head.php';
$yy='active';
$surl = $mkcms_domain.'/json/yyplay.php?post='.$_GET['post'];
$data = json_decode(fileget3($surl,0),true);
$dd = $data['data'][0]['title'];
$ee = $data['data'][0]['anchor'];
$hh = $data['data'][0]['hot'];
$bf = $data['data'][0]['link'];
?>
<title><?php echo $dd;?>-<?php echo $ee;?>-美女跳舞视频-YY舞曲-<?php echo $mkcms_seoname;?></title>
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
					$("#shiping_box").html('<iframe id="video" src="/ck/index.php?url=<?php echo $bf;?>"  allowfullscreen="true" allowtransparency="true" style="width:100%;border:none"></iframe>');
					}
					//五秒钟后自动收起
					var t = setTimeout(adsUp,<?php echo $mkcms_miaoshu*1000;?>);   
					</script>
				</div>
				<div class="stui-player__detail detail" id="dianshijuid">
				<ul class="more-btn">
				<li><a href="javascript:void(0)" onclick="location.reload()" class="btn btn-sm btn-default">刷新</a></li>
				</ul>
				<h1 class="title" id="xuji"><a href="<?php echo $links;?>" title="<?php echo $dd;?><?php echo $ee;?>"><?php echo $dd;?>-<?php echo $ee;?></a><span class="js"></span></h1>
				<span class="text-muted">主播：</span><?php echo $ee;?><span class="split-line"></span>
				<span class="text-muted">人气指数：</span><?php echo $hh;?>
				</div>
			</div><!-- 播放器-->
			<div class="stui-pannel stui-pannel-bg clearfix">
				<div class="stui-pannel-box b playlist mb">
					<div class="stui-pannel_hd">
						<div class="stui-pannel__head bottom-line active clearfix">
						<span class="more text-muted pull-right">无需安装任何插件，即可快速播放</span>
						<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-play"></use></svg>相关视频</h3>
						</div>
					</div>
					<div class="stui-pannel_bd col-pd clearfix dianshijua" id="dianshijuid">
						<ul class="stui-content__playlist column6 clearfix">
						<?php
						$surl = $mkcms_domain.'json/yyx.php?post='.$_GET['post'];
						$data=json_decode(fileget2($surl,0),true);
						$num=$data['count']['mumcount'];
						$stitle= $data['data'][0]['title'];
						if(!empty($stitle)){
						for ($i=0;$i<$num;$i++) {
						$xvau= $data['data'][$i]['title'];
						$ximg = $data['data'][$i]['cover'];
						$anchor = $data['data'][$i]['anchor'];
						$do = $data['data'][$i]['link'];
						?>
						<li class='zyli'><a href='<?php echo $do;?>' class='btn btn-play-source 1' title='<?php echo $xvau,"-",$anchor;?>'><img src='<?php echo $ximg;?>' class='lazyload' height='70px' alt='<?php echo $xvau,"-",$anchor;?>'><br><?php echo $xvau,"-",$anchor;?></a></li>
						<?php }}else{ ?>
						<p style="text-align: center;"><img class="sosoimg" src="/template/jingpin/img/blank.png" alt="暂无内容"></p><?php }?>
						</ul>
					</div>
				</div>
			</div><!-- 播放地址-->
		</div>
		<div class="col-lg-wide-25 col-xs-1 stui-pannel-side hidden-sm hidden-xs">
			<div class="stui-pannel stui-pannel-bg clearfix">
				<div class="stui-pannel-box">
					<div class="stui-pannel_hd">
						<div class="stui-pannel__head active bottom-line clearfix">
						<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-bang"></use></svg>神曲风云榜</h3>
						</div>
					</div>
					<div class="stui-pannel_bd clearfix">
						<ul class="stui-vodlist__text active col-pd clearfix">
						<?php
						$surl = $mkcms_domain.'json/yyhot.php';
						$yyhot=json_decode(fileget3($surl,0),true);
						for($i=0;$i<20;$i++){
						$hot = $yyhot['data'][$i]['hot'];
						$link = $yyhot['data'][$i]['link'];
						$title = $yyhot['data'][$i]['title'];
						$num=$i+1;
						$do='/yplay/'.$link;
						echo '<li class="col-xs-1 padding-0"><a class="text-overflow" href="',$do,'" title="',$title,'"><span class="am-badge am-round pull-left">',$num,'</span><span class="text-muted pull-right">',$hot,'</span><em class="text-red"></em>&nbsp;',$title,'</a></li>';
						}?>
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
<script type="text/javascript" src="/template/jingpin/js/history.js"></script>
<script type="text/javascript">var vod_name='<?php echo $dd;?>-<?php echo $ee;?>',vod_url=window.location.href,vod_part='1';</script>
<?php include 'footer.php'; ?>