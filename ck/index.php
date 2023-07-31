<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta charset="UTF-8">
<title>播放器</title>
<link rel="stylesheet" href="css/yzmplayer.css">
<style> 
.yzmplayer-full-icon span svg,.yzmplayer-fulloff-icon span svg{display: none;}
.yzmplayer-full-icon span,.yzmplayer-fulloff-icon span{background-size:contain!important;float: left;width: 22px;height: 22px;}
.yzmplayer-full-icon span{background: url(./img/full.png) center no-repeat;}
.yzmplayer-fulloff-icon span{background: url(./img/fulloff.webp) center no-repeat;}
#loading-box {background: #fff!important;}
#vod-title{overflow: unset;width: 285px;white-space: normal;color: #fb7299;}
#vod-title e{padding: 2px;}
.layui-layer-dialog{text-align: center;font-size: 16px;padding-bottom: 10px;}
.layui-layer-btn.layui-layer-btn-{padding: 15px 5px !important;text-align: center;}
.layui-layer-btn a{font-size: 12px;padding: 0 11px !important;}
.layui-layer-btn a:hover{border-color: #00a1d6 !important;background-color:#00a1d6 !important;color: #fff !important;}

</style>
<script src="js/mplayer.js"></script>
<script src="js/md5.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/cdnbye@latest"></script>
<!----><script src="js/hls.min.js"></script>
<script src="js/layer.js"></script>
<script>
var css ='<style type="text/css">';
var d, s ;
d = new Date();
s = d.getHours();
if(s<17 || s>23){ 
css+='#loading-box{background: #fff;}';//白天
}else{
css+='#loading-box{background: #000;}';//晚上
}
css+='</style>';
//$('head').append(css).addClass("");
</script>

</head>
<body>
<div id="player"></div>
<script>
    // 播放器基本设置
    var playlink ="",urlpar ='DiandianTV';  
    var dmapi = 'https://danmu.izhuolin.cn/3.0/',vodurl = '<?php echo $_GET['url']; ?>',vodid="",vodsid="",vodpic="./img/H222eb1400c714319a40e62c742cc834bv.jpg",vodname="",next = "";
    var pic="./img/H222eb1400c714319a40e62c742cc834bv.jpg";
    var playnext = "https://mk99.net/"+next ;
    var user = '',group = "",color = '#00a1d6',logo ='',autoplay = false;
    var danmuon = 1,laoding = 1,diyvodid = 0,pause_ad = 0,usernum = "4";;
	var pbgjz = ['草','操','妈','逼','滚','网址','网站','支付宝','企','关注','wx','微信','q','n','o','c','m','e'];
    if(playlink!=''){ }else {var diyvodid = 1;};
    var dmrule = "https://mk99.net/"
    diyid = md5(vodurl),diysid = 1;
    function video_end() {alert("播放结束啦=。=")};
</script>
<script src="js/setting.js"></script>
<script>
</script>
</body>
</html>