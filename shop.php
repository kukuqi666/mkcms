<?php 
include('system/inc.php');
if(empty($_GET['page'])){
	$_GET['page']='1';
}
$surl = $mkcms_domain.'slist.php?page='.$_GET['page'];
$list=json_decode(fileget2($surl,0),true);
include('template/'.$mkcms_bdyun.'/shop.php');?>