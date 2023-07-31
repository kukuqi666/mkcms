<?php
include('function.php');
error_reporting(0);
header('content-type:application/json');
$sex2 = isset($_GET['sex']) ? $_GET['sex'] : '';
switch($sex2){
case '男':
$sex3 = "%E7%94%B7";
break;
case '女':
$sex3 = "%E5%A5%B3";
break;
case '':
$sex3 = "";
}
$area2 = isset($_GET['area']) ? $_GET['area'] : '';
switch($area2){
case '内地':
$area3 = "%E5%86%85%E5%9C%B0";
break;
case '香港':
$area3 = "%E9%A6%99%E6%B8%AF";
break;
case '台湾':
$area3 = "%E5%8F%B0%E6%B9%BE";
break;
case '日本':
$area3 = "%E6%97%A5%E6%9C%AC";
break;
case '韩国':
$area3 = "%E9%9F%A9%E5%9B%BD";
break;
case '美国':
$area3 = "%E7%BE%8E%E5%9B%BD";
break;
case '英国':
$area3 = "%E8%8B%B1%E5%9B%BD";
break;
case '其他':
$area3 = "其他";
case '':
$area3 = "";
}
$page = $_GET['page'];
if(empty($page)){$page=1;}
$url="https://dianying.2345.com/mingxing/list/".$sex3."-".$area3."-".$page.".html";
$fcon = fileget2($url); 
$fcon = iconv("gb2312", "utf-8//IGNORE",$fcon);
$text ='#id="contentList">[\s\S]*?<div class="v_page">#';
preg_match_all($text,$fcon,$arr);
$html = $arr[0][0];
$vname='#data-src="(.*?)" onerror="javascript:this.src=\'(.*?)\';" alt="(.*?)">#';
preg_match_all($vname,$html,$xarr); 
$xname=$xarr[3];
$ximg=$xarr[1];
$array = array();
$i=0;
foreach ($xname as $k => $name){
$array[$k]['num'] = $i;
$array[$k]['star'] = $xname[$k];
$array[$k]['pic'] = $ximg[$k];
$i++;}
echo '{"num":{"numcount":"'.$i.'"},"data":'.json_encode($array,true).'}';
?>