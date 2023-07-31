<!DOCTYPE html>
<html lang="zh-cmn-Hans">
    <head>  
        <title>P2P播放</title>
        <meta name="keywords" content="m3u8视频解析,m3u8视频在线解析,m3u8解析,万能m3u8视频解析,m3u8视频全能解析,m3u8视频,手机m3u8视频解析,手机在线解析m3u8视频,优酷m3u8解析,爱奇艺m3u8解析,腾讯m3u8解析,乐视m3u8解析,芒果m3u8解析">
        <meta name="description" content="全民解析m3u8视频免费看，在线解析，m3u8视频解析，优酷m3u8解析，爱奇艺m3u8解析，腾讯m3u8解析，乐视m3u8解析，芒果m3u8解析方便广大用户m3u8视频服务，最新电影最新电视剧在线免费观看">   
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><!-- IE内核 强制使用最新的引擎渲染网页 -->
        <meta name="renderer" content="webkit">  <!-- 启用360浏览器的极速模式(webkit) -->
        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0 ,maximum-scale=1.0, user-scalable=no"><!-- 手机H5兼容模式 -->
        <meta name="x5-fullscreen" content="true" ><meta name="x5-page-mode" content="app" > <!-- X5  全屏处理 -->
        <meta name="full-screen" content="yes"><meta name="browsermode" content="application">  <!-- UC 全屏应用模式 -->
        <meta name=”apple-mobile-web-app-capable” content=”yes”>
		<meta name=”apple-mobile-web-app-status-bar-style” content=”black-translucent” /> <!--  苹果全屏应用模式 -->
        <!--必要样式--> 
        <script type="text/javascript"  src="js/dplayer.js" ></script>
        <script type="text/javascript"  src="js/jquery.min.js" ></script>
        <script type="text/javascript"  src="js/class.main.js" ></script>
        <script type="text/javascript"  src="js/p2p.hls.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/cdnbye@latest"></script> 
        <link rel="stylesheet" href="css/dplayer.min.css"> 
		<script>document.write('<script type="text/javascript" src="js/dplayer'+_GET('ver')+'.min.js" ><\/script> ');</script>
        <style type="text/css">
            html,body{
                background-color:#000;
                padding: 0;
                margin: 0;
                height:100%;
                width:100%;
                color:#999;
                overflow:hidden;
            }
            #video{
                height:100%!important;
                width:100%!important;
            }
           
            #stats{ display:none;position:fixed;top:20px;left:20px;font-size:12px;color:#F2F2F2;z-index:2147483647;text-shadow:1px 1px 1px #000, 1px 1px 1px #000}
        </style>
	    
    </head>

    <body oncontextmenu=self.event.returnValue=ture onselectstart="return ture">
        <div id="video"></div>	
		<div id="stats"></div>
     <script type="text/javascript"> 
            var yqplay = ("undefined" !== typeof parent.yqplay) ? parent.yqplay : parent.parent.yqplay;
            var videoUrl = decodeURIComponent(_GET('url'));
			console.log("URL:"+videoUrl);
            var headtime= Number(getCookie("time_"+ videoUrl)|| _GET('headtime'));
            var autoplay= _GET('autoplay')==="1" ? 0 : 1;
            var seektime=_GET('seektime')==="0" ? 0 : 1;
	        var live =_GET('live')==="1" ? 1 : 0;
	        var danmaku=_GET('danmaku')==="0" ? 0 : 1;
            var logo_off=_GET('logo_off')==="1" ? 1 : 0;
            var _peerId = '', _peerNum = 0, _totalP2PDownloaded = 0, _totalP2PUploaded = 0;
            var videoObject = {
                      container: document.getElementById('video'),
                      autoplay:autoplay,
                      live:live,
					  preload:"auto",
					  logo: '',
                      video: {
						       pic: 'images/suxia.png',
                               url: videoUrl,
		      hlsjsConfig: {
                    //   debug: false,
                  // Other hlsjsConfig options provided by hls.js
                p2pConfig: {
                 logLevel: true,
                 live: live        // 如果是直播设为true
                // Other p2pConfig options provided by CDNBye
                // https://docs.cdnbye.com/#/API
            }
        }
    }  
};  

         //LOGO
           if(logo_off===1){ videoObject["logo"]="logo.png";}
        
          //弹幕
          if(danmaku){ videoObject["danmaku"]={
			   id:videoUrl,
			   token:"299b6a5543616b5508c1ce8616ed530b",
                           api: "https://dplayer.moerats.com/",
                          // addition:['https://dplayer.moerats.com/v3/bilibili?aid=7100521'],
		     };
		  
		  }
      
            //智能显示图片及控件
            if (is_mobile()) {
                videoObject["video"]["pic"] = "images/jiazai.png";
            }
            if ("undefined" !== typeof yqplay && "undefined" !== typeof yqplay.list_array) {
                if (yqplay.list_array && yqplay.list_array.length > 0 && live === 0) {
                    videoObject["next"] = "video_next";
                    videoObject["list"] = "yqplay.onlist";
                   if (!is_mobile()) {  videoObject["front"] = "video_front";}
                }
            }
            // 调用dplayer, api参考 ：https://dplayer.js.org/#/zh-Hans/?id=api
            player = new DPlayer(videoObject);
            
            //p2p信息
           if(_GET('p2pinfo')!=="0" ){
                  $("#stats").show();
                    player.on('stats', function (stats) {
                        _totalP2PDownloaded = stats.totalP2PDownloaded;
                        _totalP2PUploaded = stats.totalP2PUploaded;
                        updateStats();
                    });
                    player.on('peerId', function (peerId) {
                        _peerId = peerId;
                    });
                   player.on('peers', function (peers) {
                        _peerNum = peers.length;
                        updateStats();
                    });  

            }
            
            //绑定准备就绪回调
            player.on("loadedmetadata", function () {loadedmetadataHandler();});
            //绑定播放结束回调
            player.on("ended", function () {endedHandler();});
            //绑定错误回调
            player.on("error", function () {"undefined" !== typeof yqplay && yqplay.errorHandler();});
           //全屏play
            player.on("fullscreen", function () {$("#stats").hide();});
            //退出全屏
            player.on("fullscreen_cancel", function (){$("#stats").show();});
            
            //视频就绪回调,用来监控播放开始 
            function loadedmetadataHandler() {
                if ( seektime===1 && !live && headtime > 0 && player.video.currentTime < headtime) {
                        player.seek(headtime);
                        player.notice("继续上次播放");
 
                } else {
                       player.notice("视频已就绪");
            
                }
                   player.on("timeupdate", function () {
                        timeupdateHandler();
                    });
           
            }
            //播放进度回调  	
            function timeupdateHandler() {
               setCookie("time_"+ videoUrl,player.video.currentTime,24);
           }

            //播放结束回调		
           function endedHandler() {
                setCookie("time_"+ videoUrl,"",-1);
                 if(parent.MacPlayer.PlayLinkNext!=''){
            top.location.href = parent.MacPlayer.PlayLinkNext;
        }else {
                    player.notice("视频播放已结束");
                }
            }
            //播放下集
            function video_next() {
                if ("undefined" !== typeof yqplay && "undefined" !== typeof yqplay.playlist_array)
                    if (Number(yqplay.part) + 1 >= yqplay.playlist_array.length) {
                        return true;
                    }
                yqplay.part++;
                myplay(yqplay.playlist_array[yqplay.part]);
            }
            //播放上集	
            function video_front() {
                if ("undefined" !== typeof yqplay && "undefined" !== typeof yqplay.playlist_array)
                    if (Number(yqplay.part) <= 0) {
                        return true;
                    }
                yqplay.part--;
                myplay(yqplay.playlist_array[yqplay.part]);

            }
			
            //调用播放
            function myplay(url) { 
                videoUrl=url; headtime= Number(getCookie("time_"+ videoUrl));
                player.switchVideo({url: url});
                player.play();
                if ("undefined" !== typeof yqplay) {
                    if (yqplay.title && !live) {
                        parent.document.title = "正在播放:【" + yqplay.title + "】part " + (Number(yqplay.part) + 1) + "-- " + yqplay.mytitle;
                    }

                }

            } 
      
      function updateStats() {
           var text = 'P2P已加速 ' + (_totalP2PDownloaded/1024).toFixed(2)
            + ' MB 已分享 ' + (_totalP2PUploaded/1024).toFixed(2) + ' MB' + '  此片有 ' + (_peerNum+1) + ' 位影迷正在观看';
            document.getElementById('stats').innerText = text;
            
          }  
       $("#stats").css("color",random_rgb(0,100));
       $("#stats").mousemove(function(){ $("#stats").css("color",random_rgb());});

        </script>

    </body></html>