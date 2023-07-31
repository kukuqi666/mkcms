<?php include('function.php');
$page=$_GET['page'];
if (empty($page)){$page=1;}//页数 
$seach='http://www.1905.com/list-p-catid-220.html?page='.$page;
//$seach='https://www.1905.com/news/zixun/'.$page.'.shtml';
$fcon = fileget2($seach,1);
$text ='#<ul class="public-news-list">[\s\S]*?<div class="layout-r">#';
preg_match_all($text,$fcon,$arr);
$html = $arr[0][0];
$vimg='#data-original="(.*)" alt=#'; 
$vlist='#<a href="https://www.1905.com/news/([0-9]+)/([0-9]+).shtml" title="(.*?)"#';
$sj='#<span class="timer fl">(.*)</span>#';
$des='#<p class="des">(.*)</p>#';
preg_match_all($vimg,$html,$sarr1);
preg_match_all($vlist,$html,$sarr2);
preg_match_all($sj,$html,$sarr3);
preg_match_all($des,$html,$sarr4);
$xname=$sarr2[3];//标题
$xlink1=$sarr2[1];//地址
$xlink2=$sarr2[2];//地址
$ximg=$sarr1[1];//图片
$xdes=$sarr4[1];//内容
$xtime=$sarr3[1];//时间
$array = array();
$i=0;
foreach ($xname as $k => $name){
$array[$k]['num'] = $i;
$array[$k]['title'] = $xname[$k];
$array[$k]['cover'] = $ximg[$k];
$array[$k]['desc'] = $xdes[$k];
$array[$k]['link1'] = $xlink1[$k];
$array[$k]['link2'] = $xlink2[$k];
$array[$k]['time'] = $xtime[$k];
$i++;}
echo '{"num":{"numcount":"'.$i.'"},"data":'.json_encode($array,true).'}';
?>