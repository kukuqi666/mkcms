<?php
include('function.php');
$jmfang= 'https://www.yy.com/shenqu/hot/recommend.html';
$fcon=fileget2($jmfang,0);
$text ='#<ul class="fade">[\s\S]*?</ul>#';
preg_match_all($text,$fcon,$arr);
$html = $arr[0][0];
$likename='#<span class="item-title">(.*?)</span>#';
$likeurl='#<a href="/shenqu/play/id_(.*?)" class="target-link" title="(.*?)"></a>#';
$likeimg='#background-image: url\((.*?)\)"#';
$likehot='#<i>(.*?)</i>#';
preg_match_all($likename, $html,$xarr1); 
preg_match_all($likeurl, $html,$xarr2); 
preg_match_all($likeimg, $html,$xarr3); 
preg_match_all($likehot, $html,$xarr4); 
$xname=$xarr1[1];
$xurl=$xarr2[1];
$ximg=$xarr3[1];
$xhot=$xarr4[1];
$array = array();
$i=0;
foreach ($xname as $k => $name){
$array[$k]['num'] = $i;
$array[$k]['title'] = $xname[$k];
$array[$k]['cover'] = $ximg[$k];
$array[$k]['link'] = $xurl[$k];
$array[$k]['hot'] = $xhot[$k];
$i++;}
echo '{"count":{"mumcount":"'.$i.'"},"data":'.json_encode($array,true).'}';
?>