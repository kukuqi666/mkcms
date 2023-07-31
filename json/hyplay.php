<?php
include('function.php');
error_reporting(0);
header('content-type:application/json');
$id = $_GET['id'];
$surl='https://www.huya.com/'.$id;
$fcon=fileget2($surl,0);
$text ='#<div class="host-info">[\s\S]*?<div class="room-hd-r"#';
preg_match_all($text,$fcon,$arr);
$html = $arr[0][0];
$lname ='#<h1 id="J_roomTitle" class="host-title" title="(.*?)">(.*?)</h1>#';
$aname ='#<h3 class="host-name" title="(.*?)">(.*?)</h3>#';
$cname ='#<em id="live-count" title="人气值">(.*?)</em>#';
preg_match_all($lname,$html,$xarr1);
preg_match_all($aname,$html,$xarr2);
preg_match_all($cname,$html,$xarr3);
$xname = $xarr1[1];
$bname = $xarr2[1];
$rname = $xarr3[1];
$array = array();
$i=0;
foreach ($xname as $k => $name){
$array[$k]['num'] = $i;
$array[$k]['dd'] = $xname[$k];
$array[$k]['ee'] = $bname[$k];
$array[$k]['hh'] = $rname[$k];
$i++;}
echo "{\"data\":".json_encode($array,true)."}";
?>