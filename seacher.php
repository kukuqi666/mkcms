<?php
include('system/inc.php');
$q=$_GET['wd'];
$surl = $mkcms_domain.'/json/sostar.php?wd='.$q."&tab=dy&pageno=1";
$starsearch = json_decode(fileget2($surl,0),true);
$data = json_decode(fileget2($mkcms_cxzy.'?wd='.$q,5), true);
$surl1 = 'https://api.web.360kan.com/v1/rank?cat=2&size=10';
$bd1=json_decode(fileget3($surl1,1),true);
$surl2 = 'https://api.web.360kan.com/v1/rank?cat=3&size=10';
$bd2=json_decode(fileget3($surl2,1),true);
include('template/'.$mkcms_bdyun.'/seacher.php');
?>