<?php
header('content-type:application/json');
include('function.php');
$tab=$_GET['tab'];
$queryURL='https://top.baidu.com/board?tab='.$tab;
$result = fileget2($queryURL,0);
$text ='#<main class="rel container_2VTvm">[\s\S]*?</main>#';
preg_match_all($text,$result,$arr);
$html = $arr[0][0];
$bdinfo='#<div class="c-single-text-ellipsis">  (.*?) </div>#';
preg_match_all($bdinfo,$html,$xarr);
$xtop=$xarr[1];
$array = array();
$i=0;
foreach ($xtop as $k => $name){
$array[$k]['top'] =$xtop[$k];
$i++;}
echo '{"data":'.json_encode($array,true).'}';
?>