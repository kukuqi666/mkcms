<?php
include('system/inc.php');
header('content-type:application/json');
$wangzhi=$mkcms_domain.'hotmv.php';
$fcon=fileget2($wangzhi,0);
$text ='#start[\s\S]*?,end#';
preg_match_all($text,$fcon,$arr);
$html = $arr[0][0];
$vname='#"title":"(.*?)"#';
$vimg='#"cover":"(.*?)"#'; 
$vlink='#"link":"(.*?)"#'; 
preg_match_all($vname,$html,$xarr1); 
preg_match_all($vlink,$html,$xarr2);
preg_match_all($vimg,$html,$xarr3); 
$xname=$xarr1[1];
$xlink=$xarr2[1];
$ximg=$xarr3[1];
$array = array();
$i=0;
foreach ($xname as $k => $name){
$array[$k]['title'] = $xname[$k];
$array[$k]['cover'] = $ximg[$k];
$array[$k]['link'] = $xlink[$k];
$i++;}
echo '{"data":'.json_encode($array,true).'}';
?>