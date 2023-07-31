<?php include('system/inc.php');
error_reporting(0);
header('Content-Type:text/html;charset=UTF-8');
if(empty($_GET['page'])){
	$_GET['page']='1';
}
if (empty($_GET['cid'])) {
	$cxurl = $mkcms_cxzy;
    $url = $mkcms_cxzy."?p=".$_GET['page'];
} else {
	$cxurl = $mkcms_cxzy."?cid=".$_GET["cid"];
	$url = $mkcms_cxzy."?p=".$_GET['page']."&cid=".$_GET['cid'];
}
session_start();
$_SESSION['cxurl'] = $cxurl;
$list=json_decode(fileget2($cxurl),true);
$data=json_decode(fileget2($url),true);
$pagecount = $data['page']['pagecount'];
$pagesize = $data['page']['pagesize'];
include('template/'.$mkcms_bdyun.'/cx.php');?>