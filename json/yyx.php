<?php
include('function.php');
$jmfang= 'http://www.yy.com/shenqu/play/id_' .$_GET['post']. '.html';
$fcon=fileget2($jmfang,0);
$text ="#hostlist[\s\S]*?\"tags\"#";
preg_match_all($text,$fcon,$arr);
$html = $arr[0][0];
$likename='#worksName":"(.*?)"#';
$likeanchor='#anchorName":"(.*?)"#';
$likeurl='#"link":"(.*?)"#';
$likeimg='#"snapshot":"(.*?)"#';
preg_match_all($likename, $html,$xarr1); 
preg_match_all($likeurl, $html,$xarr2); 
preg_match_all($likeimg, $html,$xarr3); 
preg_match_all($likeanchor, $html,$xarr4); 
$xname=$xarr1[1];
$xurl=$xarr2[1];
$ximg=$xarr3[1];
$xanchor=$xarr4[1];
$array = array();
$i=0;
foreach ($xname as $k => $name){
$array[$k]['num'] = $i;
$array[$k]['title'] = $xname[$k];
$array[$k]['anchor'] = $xanchor[$k];
$array[$k]['cover'] = $ximg[$k];
$array[$k]['link'] = $xurl[$k];
$array[$k]['link'] = str_replace('/shenqu/play/id_','/yplay/',$array[$k]['link']);
$i++;}
echo '{"count":{"mumcount":"'.$i.'"},"data":'.json_encode($array,true).'}';
?>