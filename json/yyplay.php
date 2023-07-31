<?php
include('function.php');
$jmfang= 'http://www.yy.com/shenqu/show/info.do?resid=' .$_GET['post'];
$fcon=fileget2($jmfang,0);
$text ='#resid[\s\S]*?code#';
preg_match_all($text,$fcon,$arr);
$html = $arr[0][0];
$ysong ='#"songName":"(.*?)"#';
$yanchor ='#"anchorName":"(.*?)"#';
$ywatch ='#"watchCount":"(.*?)"#';
$yres = '#"resurl":"(.*?)"#';
preg_match_all($ysong, $html,$xarr1); 
preg_match_all($yanchor, $html,$xarr2); 
preg_match_all($ywatch, $html,$xarr3); 
preg_match_all($yres, $html,$xarr4); 
$xsong=$xarr1[1];
$xanchor=$xarr2[1];
$xwatch=$xarr3[1];
$xres=$xarr4[1];
$array = array();
$i=0;
foreach ($xsong as $k => $name){
$array[$k]['num'] = $i;
$array[$k]['title'] = $xsong[$k];
$array[$k]['anchor'] = $xanchor[$k];
$array[$k]['hot'] = $xwatch[$k];
$array[$k]['link'] = $xres[$k];
$i++;}
echo '{"count":{"mumcount":"'.$i.'"},"data":'.json_encode($array,true).'}';
?>