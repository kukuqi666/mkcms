<?php
include('function.php');
if (empty($_GET['list'])) {
$arta0= 'https://www.yy.com/shenqu/clist/t10025_p1.html';} else {
$arta0= 'https://www.yy.com/shenqu/clist/t100'.$_GET['list'].'.html';}
$fcon=fileget($arta0,0);
$text ='#<div class="section-content">[\s\S]*?<div id="page" class="page">#';
preg_match_all($text,$fcon,$arr);
$html = $arr[0][0];
$yimg = '#<img  src="(.*?)"   alt="(.*?)">#';
$ytitle = '#<p class="title">(.*?)</p>#';
$yhot = '#<p class="pcount"><i class="play-ico"></i><span>(.*?)</span></p>#';
$ylink = '#<a href="/shenqu/play/id_(.*?)" title="(.*?)" class="target-link"   >#';
$ytext = '#<p class="text">(.*?)</p>#';
preg_match_all($ytitle, $html,$xarr1);
preg_match_all($ylink, $html,$xarr2);
preg_match_all($yimg, $html,$xarr3); 
preg_match_all($yhot, $html,$xarr4); 
preg_match_all($ytext, $html,$xarr5); 
$xname=$xarr1[1];
$xurl=$xarr2[1];
$ximg=$xarr3[1];
$xhot=$xarr4[1];
$xtext=$xarr5[1];
$array = array();
$i=0;
foreach ($xname as $k => $name){
$array[$k]['num'] = $i;
$array[$k]['title'] = $xname[$k];
$array[$k]['cover'] = $ximg[$k];
$array[$k]['link'] = $xurl[$k];
$array[$k]['hot'] = $xhot[$k];
$array[$k]['text'] = $xtext[$k];
$i++;}
echo '{"count":{"numcount":"'.$i.'"},"data":'.json_encode($array,true).'}';
?>