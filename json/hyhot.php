<?php
include('function.php');
error_reporting(0);
header('content-type:application/json');
$surl="https://www.huya.com/cache.php?m=LiveList&do=getLiveListByPage&gameId=2168&tagAll=0&callback=getLiveListJsonpCallback&page=1";
$data=fileget2($surl,0);
$data=str_replace('getLiveListJsonpCallback(', '', "$data");
$data=str_replace(')', '', "$data");
echo $data;
?>