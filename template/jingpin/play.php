<?php  include 'head.php';?>
<title><?php echo $timu; ?>-<?php echo $mkcms_seoname;?></title>
<meta name="keywords" content="<?php echo $timu; ?>,<?php echo $mkcms_keywords;?>">
<meta name="description" content="<?php echo $timu; ?>,主要讲述<?php echo mb_substr($jian,0,85,'utf-8').'...'; ?>">
<script type="text/javascript" src="/template/jingpin/js/mytheme-ui.js"></script>
<style type="text/css">
#timer{background: rgba(0, 0, 0, 0.59);padding: 5px;text-align: center;width: 30px;position: absolute;top: 5%;right: 2%;color: #fff;font-size: 16px;border-radius: 50%;height: 30px;line-height: 20px}
#xiang{background: rgba(177, 13, 13, 0.87);padding: 5px;text-align: center;width: auto;position: absolute;bottom: 2%;right: 1%;color: #fff;font-size: 16px;border-radius: 10px;height: 20px;line-height: 9px}
#ys,.jkbtn1{border: 1px solid #FF9900;background-color: #FF9900;color: #FFFFFF;}
.stui-player__video {margin-bottom: 10px;}
.embed-responsive{ padding-bottom: 56.25%;}
</style>
</head>
<body>
<?php include 'header.php'; ?>
<div class="container">
	<div class="row">
		<div class="col-lg-wide-75 col-xs-1">
			<div class="stui-player__item myui-player__item clearfix" style="background-color: #fff;">
				<div id="player-left" class="stui-player__video embed-responsive embed-responsive-16by9 clearfix">
				  <div class="myui-player__box player-fixed"> <a class="player-fixed-off" href="javascript:;" style="display: none;"><i class="icon iconfont icon-close"></i></a>
                   <div class="embed-responsive clearfix">
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
		$("#shiping_box").html('<iframe id="video" src="<?php echo $mjk,$play0;?>" allowfullscreen="true" allowtransparency="true" style="width:100%;border:none"></iframe>');}
//五秒钟后自动收起
var t = setTimeout(adsUp,<?php echo $mkcms_miaoshu*1000;?>);   
</script></div></div></div>
				<div class="stui-player__detail detail" id="dianshijuid">
				<ul class="more-btn">
				<li><a href="javascript:void(0)" onclick="location.reload()" class="btn btn-sm btn-default" title="刷新">刷新</a></li>
				<li><div class="dropdown">
				<a href="javascript:scroll(0,0)" class="dropbtn btn btn-sm btn-default" title="切换线路">线路</a>
				<div class="dropdown-content">
				<span class="text-muted" id="xlus">
				<?php if($mjk!=''){ echo '<a onclick="xldata(this)" data-jk="',$mjk,'" class="btn btn-sm btn-default">推荐</a>'; } ?>
				<?php
				$jkjk=explode("\r\n",$mkcms_jiekou);
				for($k=0;$k<count($jkjk);$k++){
				$jkjk[$k]=explode('$',$jkjk[$k]);
				echo '<a onclick="xldata(this)" data-jk="',$jkjk[$k][1],'" class="btn btn-sm btn-default">',$jkjk[$k][0],'</a>';}?>
				</span>
				</div>
				</div></li>
				<li><a href="/addfav.php?title=<?php echo $timu; ?>&dizhi=<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>" class="btn btn-sm btn-default" title="收藏">收藏</a></li>
				<?php if($mkcmstyle=='m'){ echo '';}else{
				echo '<li><a href="javascript:scroll(0,0)" class="btn btn-default" id="btn-prev" title="上一集"><i class="icon iconfont icon-back hidden-xs"></i> 上一集</a></li>
				<li><a href="javascript:scroll(0,0)" class="btn btn-default" id="btn-next" title="下一集">下一集 <i class="icon iconfont icon-more hidden-xs"></i></a></li>';
                 } ?>
                <li><a href="/jx-<?php echo $timu; ?>.html" class="dropbtn btn btn-sm btn-default" title="换源">换源</a></li>
				</ul>
				<h1 class="title" id="xuji"><a href="/seacher-<?php echo $timu; ?>.html" title="<?php echo $timu; ?>"><?php echo $timu; ?></a><span class="js"></span></h1>
				<span class="text-muted">地区：</span><?php $diqu=0;while($diqu<count($list['data']['area'])) {echo $list['data']['area'][$diqu].' '; $diqu++;}	if($list['data']['area'][0]==''){echo '其他';}?><span class="split-line"></span>
				<span class="text-muted">年份：</span><?php echo $g; ?>
				<span class="split-line"></span><span class="text-muted">状态：</span><?php echo $gx; ?>
				</div>
			</div>
<!-- 播放器-->
	<div class="stui-pannel stui-pannel-bg clearfix">
				<div class="stui-pannel-box b playlist mb">
				<?php
				
				$num=1;
				if ($cat==$dycat) {
				echo '<div class="stui-pannel_hd"><div class="stui-pannel__head bottom-line active clearfix"><span class="more text-muted pull-right">无需安装任何插件，即可快速播放</span><h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-play"></use></svg>播放列表</h3></div></div><div class="stui-pannel_bd col-pd clearfix dianshijua" id="dianshijuid"><ul class="stui-content__playlist column10 clearfix" id="playlist">';
				$yuan=0;while($yuan<count($list['data']['playlink_sites'])) {
				    $dyname=$list['data']['playlink_sites'][$yuan];
				    $murl=0;while($murl<count($list['data']['playlinksdetail'][$dyname]['default_url'][$murl])) {
				        $movieurl=$list['data']['playlinksdetail'][$dyname]['default_url'];
				        if ($dyname=='cntv'){$dyname='央视网';}if ($dyname=='youku'){$dyname='优酷网';}if ($dyname=='leshi'){$dyname='乐视';}if ($dyname=='imgo'){$dyname='芒果';}if ($dyname=='qiyi'){$dyname='爱奇艺';}if ($dyname=='m1905'){$dyname='电影网';}if ($dyname=='pptv'){$dyname='PP视频';}if ($dyname=='qq'){$dyname='QQ视频';}if ($dyname=='sohu'){$dyname='搜狐视频';}if ($dyname=='funshion'){$dyname='风行视频';}if ($dyname=='boosj'){$dyname='播视网';}if ($dyname=='huanxi'){$dyname='欢喜首映';}if ($dyname=='xigua'){$dyname='西瓜视频';}
			 echo '<li class="dyli active"><a href="',$movieurl,'" id="',$murl,'" title="',$dyname,'">',$dyname,'</a></li>';$murl++;}
				 $yuan++;
	    if (empty($dyname)) {echo '<li class="dyli"><a>暂无资源</a></li>';
			    }
	}
				echo '</ul></div>';
				} elseif($cat==$dscat||$cat==$dmcat) {
			       //电视剧和动漫开始      
                    $i=0;
                    while($i<count($list['data']['playlink_sites'])) {
                        $yuanliebiao=$list['data']['playlink_sites'][$i];
                        $yuanname=$list['data']['playlink_sites'][$i];
                        $sum=$list['data']['allupinfo'][$yuanliebiao];
                        if ($yuanname=='cntv'){$yuanname='央视网';}
                        if ($yuanname=='youku'){$yuanname='优酷网';}
                        if ($yuanname=='leshi'){$yuanname='乐视';}
                        if ($yuanname=='imgo'){$yuanname='芒果';}
                        if ($yuanname=='qiyi'){$yuanname='爱奇艺';}
                        if ($yuanname=='m1905'){$yuanname='电影网';}
                        if ($yuanname=='pptv'){$yuanname='PP视频';}
                        if ($yuanname=='qq'){$yuanname='QQ视频';}
                        if ($yuanname=='sohu'){$yuanname='搜狐视频';}
                        if ($yuanname=='funshion'){$yuanname='风行视频';}
                        if ($yuanname=='boosj'){$yuanname='播视网';}
                        if ($yuanname=='huanxi'){$yuanname='欢喜首映';}
                        if ($yuanname=='xigua'){$yuanname='西瓜视频';}
                        echo '<div class="stui-pannel_hd"><div class="stui-pannel__head bottom-line active clearfix"><span class="more text-muted pull-right">无需安装任何插件，即可快速播放</span><h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-play"></use></svg>',$yuanname,'播放列表</h3></div></div>';
                        echo '<div class="stui-pannel_bd col-pd clearfix dianshijua" id="dianshijuid"><ul class="stui-content__playlist column10 clearfix" id="playlist">';
                        $page1=ceil($sum/50);
                        for ($h=1,$j=1;$h<=$page1;$h++){
                            $start=$h*50-50+1;
                            $end=$h*50;
                            $page2=floor($sum/50);
                            if($h==$page1 and !is_int($sum/50)){
                                if ($sum>50){
                                    $ff=$page2*50;
                                    $end=$sum-$ff+$start-1;
                                }
                            }
        $urllist1='https://api.web.360kan.com/v1/detail?cat='.$catid.'&id='.$id.'&start='.$start.'&end='.$end.'&site='.$yuanliebiao.'';
        $listt1=json_decode(fileget2($urllist1),true);    
        for ($jj=1; $jj <=50 ; $jj++,$j++) {
           $tvurl1=$listt1['data']['allepidetail'][$yuanliebiao][$jj-1]['url'];
           if ($j>$sum){continue;}
           echo '<li class="active"><a data-num="',$j,'" href="',$tvurl1,'" class="btn-play-source" title="',$timu.$j,'">第',$j,'集</a></li>';
        }
    }
                echo '</ul></div>';
                $i ++;}
                 //电视剧和动漫结束
				 }else{
				//综艺开始
				if ($cat==$zycat){
				    $i=0;
					while($i<count($list['data']['playlink_sites'])) {
					    $yuanliebiao=$list['data']['playlink_sites'][$i];
					    $urllist1='https://api.web.360kan.com/v1/detail?cat=3&id='.$id.'&year=2022&site='.$yuanliebiao;
					    $urllist2='https://api.web.360kan.com/v1/detail?cat=3&id='.$id.'&year=2021&site='.$yuanliebiao;
					    $urllist3='https://api.web.360kan.com/v1/detail?cat=3&id='.$id.'&year='.$nian.'&site='.$yuanliebiao;
					    if($nian>$g){$urllist4='https://api.web.360kan.com/v1/detail?cat=3&id='.$id.'&year='.$g.'&site='.$yuanliebiao;}
					    $listz1=json_decode(fileget2($urllist1),true);
					    $listz2=json_decode(fileget2($urllist2),true);
					    $listz3=json_decode(fileget2($urllist3),true);
					    $listz4=json_decode(fileget2($urllist4),true);
					    $link1 = $listz1['data']['defaultepisode'][0]['url'];
					    $link2 = $listz2['data']['defaultepisode'][0]['url'];
					    $link3 = $listz3['data']['defaultepisode'][0]['url'];
					    $link4 = $listz4['data']['defaultepisode'][0]['url'];
					    $yuanname=$list['data']['playlink_sites'][$i];
                       if ($yuanname=='cntv'){$yuanname='央视网';}
                        if ($yuanname=='youku'){$yuanname='优酷网';}
                        if ($yuanname=='leshi'){$yuanname='乐视';}
                		if ($yuanname=='imgo'){$yuanname='芒果';}
                		if ($yuanname=='qiyi'){$yuanname='爱奇艺';}
                		if ($yuanname=='m1905'){$yuanname='电影网';}
                		if ($yuanname=='pptv'){$yuanname='PP视频';}
                		if ($yuanname=='qq'){$yuanname='QQ视频';}
                		if ($yuanname=='sohu'){$yuanname='搜狐视频';}
                		if ($yuanname=='funshion'){$yuanname='风行视频';}
                		if ($yuanname=='boosj'){$yuanname='播视网';}
                		if ($yuanname=='huanxi'){$yuanname='欢喜首映';}
                		if ($yuanname=='xigua'){$yuanname='西瓜视频';}
				  echo '<div class="stui-pannel_hd"><div class="stui-pannel__head bottom-line active clearfix"><span class="more text-muted pull-right">无需安装任何插件，即可快速播放</span><h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-play"></use></svg>',$yuanname,'播放列表</h3></div></div><div class="stui-pannel_bd col-pd clearfix dianshijua" id="dianshijuid" id="playlist"><ul class="stui-content__playlist column6 clearfix">';
				  if(!empty($link1)){
				$b1=0;	while($b1<count($listz1['data']['defaultepisode'])) {
					    echo '<li class="zyli active"><a data-num="',$b1,'" href="',$listz1['data']['defaultepisode'][$b1]['url'],'" class="btn btn-danger btn-play-source 1" title="',$listz1['data']['defaultepisode'][$b1]['pubdate'],$listz1['data']['defaultepisode'][$b1]['name'],'">',$listz1['data']['defaultepisode'][$b1]['pubdate'],'<br>',$listz1['data']['defaultepisode'][$b1]['name'],'</a></li>';$b1++;}}
			     if(!empty($link2)){
			         $b2=0;	while($b2<count($listz2['data']['defaultepisode'])) {
					    echo '<li class="zyli active"><a data-num="',$b2,'" href="',$listz2['data']['defaultepisode'][$b2]['url'],'" class="btn btn-danger btn-play-source 1" title="',$listz2['data']['defaultepisode'][$b2]['pubdate'],$listz2['data']['defaultepisode'][$b2]['name'],'">',$listz2['data']['defaultepisode'][$b2]['pubdate'],'<br>',$listz2['data']['defaultepisode'][$b2]['name'],'</a></li>';$b2++;}}
				if(empty($link1)&&empty($link2)&&!empty($link3)){
			         $b3=0;	while($b3<count($listz3['data']['defaultepisode'])) {
					    echo '<li class="zyli active"><a data-num="',$b3,'" href="',$listz3['data']['defaultepisode'][$b3]['url'],'" class="btn btn-danger btn-play-source 1" title="',$listz3['data']['defaultepisode'][$b3]['pubdate'],$listz3['data']['defaultepisode'][$b3]['name'],'">',$listz3['data']['defaultepisode'][$b3]['pubdate'],'<br>',$listz3['data']['defaultepisode'][$b3]['name'],'</a></li>';$b3++;}}
			    if(empty($link1)&&empty($link2)&&!empty($link4)){
			         $b4=0;	while($b4<count($listz4['data']['defaultepisode'])) {
					    echo '<li class="zyli active"><a data-num="',$b4,'" href="',$listz4['data']['defaultepisode'][$b3]['url'],'" class="btn btn-danger btn-play-source 1" title="',$listz4['data']['defaultepisode'][$b4]['pubdate'],$listz4['data']['defaultepisode'][$b3]['name'],'">',$listz4['data']['defaultepisode'][$b4]['pubdate'],'<br>',$listz4['data']['defaultepisode'][$b4]['name'],'</a></li>';$b4++;}}
			echo '</ul></div>';
				 $i++;}
					}//综艺结束
				 }
				?>
					</div>
				</div>
		<!-- 播放地址-->
<div class="stui-pannel stui-pannel-bg clearfix">
	<div class="stui-pannel-box">
		<div class="stui-pannel__head bottom-line active clearfix">
			<div class="stui-pannel__head clearfix">
				<h3 class="title">
					<svg class="iconm" aria-hidden="true"><use xlink:href="#icon-jie"></use></svg>
					剧情简介
				</h3>
			</div>
		</div>
	</div>
	<div class="stui-pannel-box">
		<div class="stui-content__thumb">
			<a class="stui-vodlist__thumb picture v-thumb" href="#" title="<?php echo $timu; ?>">
			<img src="<?php if(!empty($imgs)) {echo $imgs;} ?>" data-original="<?php if(!empty($imgs)) {echo $imgs;} ?>" class="lazyload" alt="<?php echo $timu; ?>" title="<?php echo $timu; ?>" width="100%"/>
			<span class="pic-text text-right"></span>
			</a>
		</div>
	<div class="stui-content__detail">
	<h1 class="title"><a href="/seacher-<?php echo $timu; ?>.html" title="<?php echo $timu; ?>"><?php echo $timu; ?></a></h1>
	<div class="col-md-2 col-sm-2 col-xs-2">地区 ：<?php $diqu=0;while($diqu<count($list['data']['area'])) {echo $list['data']['area'][$diqu].' '; $diqu++;}	if($list['data']['area'][0]==''){echo '其他';}?></div>
	<div class="col-md-2 col-sm-2 col-xs-2">年代 ：<?php echo $g; ?></div>
	<div class="col-md-2 col-sm-2 col-xs-2"><?php if ($gx == ""){ echo $gx; } else{ echo '状态 ：'.$gx.'';}?></div>
	<div class="col-md-2 col-sm-2 col-xs-2">导演 ：<?php if(!empty($f)){echo $f;} ?></div>
	<div class="col-md-1 col-sm-1 col-xs-1">主演 ：<?php $x=0;	while($x<count($list['data']['actor'])) {echo $list['data']['actor'][$x].' '; $x++;}?></div>
	<div class="col-md-1 col-sm-1 col-xs-1">简介：<?php echo $jian; ?></div>
	</div>
	</div>
</div><!-- 剧情简介-->
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
			    <?php include('system/like.php');?>
			</ul>
		</div>
	</div>
</div><!-- 猜你喜欢-->
</div>
<script>
 $(function () {
	 $.each($('.dianshijua'),function () {
		var al = $('.stui-content__playlist a');
		al.attr('class','btn-play-source am-btn am-btn-default lipbtn');
		});
		$.each($('.lipbtn'),function () {
			var url = $(this).attr('href');
			$(this).attr('data-href',url);
			$(this).attr('href','javascript:;');
			$(this).attr('onclick','bofang(this)');
			});
			$('#xlus').children('a:eq(0)').addClass('jkbtn0');
			var autourl = $('.lipbtn:eq(0)').attr('data-href');
			$('.lipbtn:eq(0)').attr('id','ys');
			var text = $('.lipbtn:eq(0)').text();
			$('.js').text('-'+text+'');
			var jiekou = $('#xlus').children('a:eq(0)').attr('data-jk');
			if(autourl!=''||autourl!=null){
				setTimeout(function () {
					$('#video').attr('src', jiekou + autourl);
					},0)
					}
		// 上一集
		$("#btn-pre").click(function() {
			$("#ys.btn-play-source").prev().click();
			});
		// 下一集
		$("#btn-next").click(function() {
		$("#ys.btn-play-source").next().click();
		});
		// 上一集
		$("#btn-pre1").click(function() {
		$("#ys.btn-play-source").prev().click();
		});
	// 下一集
	$("#btn-next1").click(function() {
		$("#ys.btn-play-source").next().click();
		});})
</script>
<script>
function bofang(obj) {
var href = $(obj).attr('data-href');
var text = $(obj).text();
$('.js').text('-' + text+'');
$.each($('.lipbtn'), function () {
$(this).attr('id','');
});
$(obj).attr('id','ys');
var jiekou = $('.jkbtn0').attr('data-jk');
if (href != '' || href != null) {
setTimeout(function () {
$('#video').attr('src', jiekou + href);
},0)}}
function xldata(obj) {
	var url = $(obj).attr('data-jk');
	$.each($('.jkbtn0'), function () {
		$(this).removeClass('jkbtn0');});
		$(obj).addClass('jkbtn0');
		var src = $('#ys').attr('data-href');
		$('#video').attr('src', url + src);}
		</script>
			<script>
                $(function () {
                    $('#btn-prev').click(function () {
                        $('#ys').parent().prev().children('a:eq(0)').click();
                    })//上一集
                    $('#btn-next').click(function () {
                        $('#ys').parent().next().children('a:eq(0)').click();
                    })//上一集
                })
            </script>
			<div class="col-lg-wide-25 col-xs-1 stui-pannel-side hidden-sm hidden-xs">
				<div class="stui-pannel stui-pannel-bg clearfix">
				<div class="stui-pannel-box clearfix">
				<div class="col-pd text-center" style="border: 1px solid #eee; border-radius: 5px;">
				<p style="padding: 30px; margin: 0;"><img src="<?php echo $mkcms_appbt;?>"></p><p><?php echo $mkcms_apppic;?></p>
				</div>
				</div>
				</div><!-- 扫码-->
				<div class="stui-pannel stui-pannel-bg clearfix">
					<div class="stui-pannel-box">
						<div class="stui-pannel_hd">
						<div class="stui-pannel__head active clearfix">
						<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-bang"></use></svg>影视热度排行榜</h3>
						</div>
						<div class="stui-pannel__head bottom-line clearfix">
							<ul class="hot-cate-title"><li data-index="dy" class="activee">电影</li></ul>
							<ul class="hot-cate-title"><li data-index="tv" class="">电视剧</li></ul>
							<ul class="hot-cate-title"><li data-index="zy" class="">综艺</li></ul>
							<ul class="hot-cate-title"><li data-index="dm" class="">动漫</li></ul>
						</div>
						</div>
						<div class="stui-pannel_bd clearfix">
						<?php
						echo '<ul class="hot-cate-list stui-vodlist__text active activee col-pd clearfix" data-pid="dy">';
						$i=0;while ($i<10){
							echo '<li class="col-xs-1 padding-0"><a class="text-overflow" href="/vod/m/',$bd1['data'][$i]['ent_id'],'.html" title="',$bd1['data'][$i]['title'],'"><span class="am-badge am-round pull-left">',$i+1,'</span><span class="text-muted pull-right">',$bd1['data'][$i]['pv'],'</span><em class="text-red"></em>&nbsp;',$bd1['data'][$i]['title'],'</a></li>';$i++;}
						echo '</ul>
						<ul class="hot-cate-list stui-vodlist__text active col-pd clearfix" data-pid="tv">';
						$i=0;while ($i<10){
							echo '<li class="col-xs-1 padding-0"><a class="text-overflow" href="/vod/tv/',$bd2['data'][$i]['ent_id'],'.html" title="',$bd2['data'][$i]['title'],'"><span class="am-badge am-round pull-left">',$i+1,'</span><span class="text-muted pull-right">',$bd2['data'][$i]['pv'],'</span><em class="text-red"></em>&nbsp;',$bd2['data'][$i]['title'],'</a></li>';$i++;}
						echo '</ul>
						<ul class="hot-cate-list stui-vodlist__text active col-pd clearfix" data-pid="zy">';
						$i=0;while ($i<10){
							echo '<li class="col-xs-1 padding-0"><a class="text-overflow" href="/vod/va/',$bd3['data'][$i]['ent_id'],'.html" title="',$bd3['data'][$i]['title'],'"><span class="am-badge am-round pull-left">',$i+1,'</span><span class="text-muted pull-right">',$bd3['data'][$i]['pv'],'</span><em class="text-red"></em>&nbsp;',$bd3['data'][$i]['title'],'</a></li>';$i++;}
						echo '</ul>
						<ul class="hot-cate-list stui-vodlist__text active col-pd clearfix" data-pid="dm">';
						$i=0;while ($i<10){
							echo '<li class="col-xs-1 padding-0"><a class="text-overflow" href="/vod/ct/',$bd4['data'][$i]['ent_id'],'.html" title="',$bd4['data'][$i]['title'],'"><span class="am-badge am-round pull-left">',$i+1,'</span><span class="text-muted pull-right">',$bd4['data'][$i]['pv'],'</span><em class="text-red"></em>&nbsp;',$bd4['data'][$i]['title'],'</a></li>';$i++;}
						echo '</ul>';
						?>
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
<script type="text/javascript" src="/template/jingpin/js/history.js"></script>
<script type="text/javascript">var vod_name='<?php echo $timu; ?>',vod_url=window.location.href,vod_part='1';</script>
<?php include 'footer.php'; ?>