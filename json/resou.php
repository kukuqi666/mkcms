<?php
include('function.php');
header('content-type:application/json');
$queryURL='https://top.baidu.com/board?tab=realtime';
$useragent = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)";
			$header = array("Accept-Language: zh-cn", "Connection: Keep-Alive", "Cache-Control: no-cache");
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_REFERER, $queryURL);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
			curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
			curl_setopt($ch, CURLOPT_URL, $queryURL);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 6);
			$result = curl_exec($ch);
			$text ='#<main class="rel container_2VTvm">[\s\S]*?</main>#';
preg_match_all($text,$result,$arr);
$html = $arr[0][0];
$bdinfo='#<div class="content_1YWBm"> <a href="(.*?)" class="title_dIF3B " target="_blank"> <div class="c-single-text-ellipsis">  (.*?) </div>#';
$himg='#<div class="index_1Ew5p c-index-bg(.*?)</div> <img src="(.*?)" alt=""> <div class="border_3WfEn"></div>#';
preg_match_all($bdinfo,$html,$xarr1);
preg_match_all($himg,$html,$xarr2);
$xtop=$xarr1[2];
$xlink=$xarr1[1];
$ximg=$xarr2[2];
$array = array();
$i=0;
foreach ($xtop as $k => $name){
$array[$k]['top'] =$xtop[$k];
$array[$k]['link'] =$xlink[$k];
$array[$k]['img'] =$ximg[$k];
$i++;}
echo '{"data":'.json_encode($array,true).'}';
?>