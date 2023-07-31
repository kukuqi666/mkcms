<?php
error_reporting(0);
header('Content-Type:text/html;charset=UTF-8');
include('function.php');
$wangzhi="https://api.so.360kan.com/index?force_v=1&kw=".$_GET['wd']."&from=&pageno=1&v_ap=1&tab=all";
$data = json_decode(fileget2($wangzhi,0),true);
$bk =$data['data']['artist']['url'];//百科链接
$tp =$data['data']['artist']['cover'];//图片
$xm =$data['data']['artist']['title'];//姓名
$bm =$data['data']['artist']['alias'];//别名
$di =$data['data']['artist']['area'];//地区
$sr =$data['data']['artist']['birth'];//生日
$xz =$data['data']['artist']['xingzuo'];//星座
$xx =$data['data']['artist']['blood'];//血型
$sg =$data['data']['artist']['height'];//身高
$tz =$data['data']['artist']['weight'];//体重
$js =$data['data']['artist']['desc'];//介绍
?>