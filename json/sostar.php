<?php
include('function.php');
error_reporting(0);
header('content-type:application/json');
ini_set('user_agent','Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.2; SV1; .NET CLR 1.1.4322)');
function decodeUnicode($str){
		return preg_replace_callback('/\\\\u([0-9a-f]{4})/i', function($matches){return iconv("UCS-2BE","UTF-8",pack("H*", $matches[1]));}, $str);
	}
$wangzhi="https://api.so.360kan.com/index?force_v=1&kw=".$_GET['wd']."&from=&pageno=".$_GET['pageno']."&v_ap=1&tab=".$_GET['tab'];
$fcon = fileget2($wangzhi,1);
$text ='#"video":[\s\S]*?"keywordData"#';
preg_match_all($text,$fcon,$arr);
$seach = $arr[0][0];
$mxss1='#"url":"(.*?)"#';//连接
$mxss2='#"cover":"(.*?)","title":"(.*?)"#';//图片标题
$mxss3='#"year":"(.*?)"#';//标签
$mxss4='#"score":"(.*?)"#';//分数
preg_match_all($mxss1,$seach,$sarr1);
preg_match_all($mxss2,$seach,$sarr2);
preg_match_all($mxss3,$seach,$sarr3);
preg_match_all($mxss4,$seach,$sarr4);
$mlink =$sarr1[1];
$mcover =$sarr2[1];
$mtitle =$sarr2[2];
$mtag =$sarr3[1];
$mscore =$sarr4[1];
$array = array();$i=0;
foreach ($mtitle as $k=>$mx1){ 
$array[$k]['num'] = $i;
$array[$k]['title'] = decodeUnicode($mtitle[$k]);
$array[$k]['cover'] = $mcover[$k];
$array[$k]['tag'] = $mtag[$k];
$array[$k]['link'] = $mlink[$k];
$array[$k]['link'] =str_replace("https://www.360kan.com","",$array[$k]['link']);
$array[$k]['link'] =str_replace("http://www.360kan.com","",$array[$k]['link']);
$array[$k]['link'] =str_replace('http:\/\/www.360kan.com\/','',$array[$k]['link']);
$array[$k]['score'] = $mscore[$k];
	$i++;}
echo '{"numcount":{"count":"'.$i.'"},"data":'.json_encode($array,true).'}';?>