<?php
include('system/inc.php');
$url='https://api.web.360kan.com/v1/block?blockid=503';
$listc = json_decode(fileget2($url,0),true);
include('template/'.$mkcms_bdyun.'/tv.php');?>