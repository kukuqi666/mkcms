<?php include('system/inc.php');
$dz='http://www.1905.com/news'.$_GET['dz'];
$seachh = fileget($dz,0);
$zz_sxx='#<h1 class="title">(.*)</h1>#';
$zz_nr='#插入关联图集结束-->(.*)<!-- 分页 start-->#';
$ke='#<meta content="(.*)" name="keywords" />#';
$des='#<meta content="(.*)" name="description" />#';
preg_match_all($zz_sxx,$seachh,$sarr1);
preg_match_all($zz_nr,$seachh,$sarr2);
preg_match_all($ke,$seachh,$sarr3);
preg_match_all($des,$seachh,$sarr4);
$onee=$sarr1[1];
$onebt=$sarr2[1];
$ks=$sarr3[1];
$des=$sarr4[1];
$seachh2=$seachh;
if ($x=strpos($seachh2,'<div class="pic-base clear">')) $seachh2=substr($seachh2,$x);
if ($x=strpos($seachh2,'<span class="share clear hidden-xs hidden-sm">')) $seachh2=substr($seachh2,0,$x);
$from = str_replace('<div class="pic-base clear">', '', $seachh2);
//删除 <!--插入关联图集结束-->之前的内容
if ($x=strpos($seachh,'<!--插入关联图集结束-->')) $seachh=substr($seachh,$x);
//删除 <!-- 分页 start-->之后的内容
if ($x=strpos($seachh,'<!-- 分页 start-->')) $seachh=substr($seachh,0,$x);
//输出结果
$replace = array('1905电影网讯','href=','href=',);
$string = str_replace($replace, '', $seachh);
$url = $mkcms_domain.'/json/content.php?dz='.$_GET['dz'];
$list=json_decode(fileget($url,0),true);
include('template/'.$mkcms_bdyun.'/content.php');?>