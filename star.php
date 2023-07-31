<?php 
include('system/inc.php');
$surl1 = 'https://api.web.360kan.com/v1/rank?cat=2&size=10';
$bd1=json_decode(fileget3($surl1,1),true);
$surl2 = 'https://api.web.360kan.com/v1/rank?cat=3&size=10';
$bd2=json_decode(fileget3($surl2,1),true);
include('template/'.$mkcms_bdyun.'/star.php');?>