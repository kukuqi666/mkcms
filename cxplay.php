<?php include('system/inc.php');
error_reporting(0);
include('system/cxplayurl.php');
header('Content-Type:text/html;charset=UTF-8');
$url = $mkcms_cxzy."?vodids=".$_GET['id'];
$data=json_decode(fileget2($url),true);
$surl1 = 'https://api.web.360kan.com/v1/rank?cat=2&size=10';
$bd1=json_decode(fileget3($surl1,1),true);
$surl2 = 'https://api.web.360kan.com/v1/rank?cat=3&size=10';
$bd2=json_decode(fileget3($surl2,1),true);
$surl3 = 'https://api.web.360kan.com/v1/rank?cat=4&size=10';
$bd3=json_decode(fileget3($surl3,1),true);
$surl4 = 'https://api.web.360kan.com/v1/rank?cat=5&size=10';
$bd4=json_decode(fileget3($surl4,1),true);
include('template/'.$mkcms_bdyun.'/cxplay.php');?>