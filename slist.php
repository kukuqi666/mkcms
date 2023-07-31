<?php
header('content-type:application/json');
include('system/inc.php');
error_reporting(0);
ini_set('user_agent','Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.2; SV1; .NET CLR 1.1.4322)');
function decodeUnicode($str){
		return preg_replace_callback('/\\\\u([0-9a-f]{4})/i', function($matches){return iconv("UCS-2BE","UTF-8",pack("H*", $matches[1]));}, $str);
	}
if(empty($_GET['page'])){
	$_GET['page']='1';
}
$x=$_GET['page'];
$durl=$mkcms_domain."shoplist.php?pageId=".$x."&pageSize=100";
$fcon=fileget2($durl,0);
$text ='#string[\s\S]*?"pageId"#';
preg_match_all($text,$fcon,$arr);
$hurl = $arr[0][0];
$tid ='#"id":(.*?),"#';
$tpic ='#"mainPic":"(.*?)"#';
$ttitle ='#d_title":"(.*?)"#';
$tyuanjia = '#"originalPrice":(.*?),"#';
$tjiage = '#"actualPrice":(.*?),"#';
$quan_jine = '#"couponPrice":(.*?),"#';
preg_match_all($tid,$hurl, $xarr1);
preg_match_all($tpic,$hurl, $xarr2);
preg_match_all($ttitle,$hurl, $xarr3);
preg_match_all($tyuanjia,$hurl, $xarr4);
preg_match_all($tjiage,$hurl, $xarr5);
preg_match_all($quan_jine,$hurl, $xarr6);
$xtid = $xarr1[1];
$xtpic = $xarr2[1];
$xtpic= str_replace('\\','',$xtpic);
$xttitle = $xarr3[1];
$xyuanjia = $xarr4[1];
$xjiage = $xarr5[1];
$xquan = $xarr6[1];
$array = array();
$i=0;
foreach ($xtid as $k => $id){
$array[$k]['num'] = $i;
$array[$k]['tid'] = $xtid[$k];
$array[$k]['cover'] = $xtpic[$k];
$xttitle[$k]=decodeUnicode($xttitle[$k]);
$array[$k]['title'] = $xttitle[$k];
$array[$k]['yuanjia'] = $xyuanjia[$k];
$array[$k]['quan'] = $xquan[$k];
$array[$k]['jiage'] = $xjiage[$k];
$i++;}
echo '{"num":{"numcount":"'.$i.'"},"data":'.json_encode($array,true).'}';
?>