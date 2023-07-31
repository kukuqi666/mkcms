<?php
$cs0=$_GET['cat'];//类型
$cs1=$_GET['act'];//主演
$cs2=$_GET['area'];//地区
$cs3=$_GET['rank'];//火热
if($cs3=='')$cs3='rankhot';
$cs4=intval($_GET['pageno']);//页数
if($cs4=='')$cs4=1;
if($cs1==''){$ac4='';}else{$ac4='-'.$_GET['act'];}
$getcat4 = isset($_GET['cat']) ? $_GET['cat'] : '';
switch($getcat4){
case '脱口秀':
$type4 = "-脱口秀";
break;
case '真人秀':
$type4 = "-真人秀";
break;
case '选秀':
$type4 = "-选秀";
break;
case '八卦':
$type4 = "-八卦";
break;
case '访谈':
$type4 = "-访谈";
break;
case '情感':
$type4 = "-情感";
break;
case '生活':
$type4 = "-生活";
break;
case '晚会':
$type4 = "-晚会";
break;
case '搞笑':
$type4 = "-搞笑";
break;
case '音乐':
$type4 = "-音乐";
break;
case '时尚':
$type4 = "-时尚";
break;
case '游戏':
$type4 = "-游戏";
break;
case '少儿':
$type4 = "-少儿";
break;
case '体育':
$type4 = "-体育";
break;
case '纪实':
$type4 = "-纪实";
break;
case '科教':
$type4 = "-科教";
break;
case '曲艺':
$type4 = "-曲艺";
break;
case '歌舞':
$type4 = "-歌舞";
break;
case '财经':
$type4 = "-财经";
break;
case '汽车':
$type4 = "-汽车";
break;
case '播报':
$f = "-播报";
}
$getarea4 = isset($_GET['area']) ? $_GET['area'] : '';
switch($getarea4){
case '大陆':
$are4 = "-大陆";
break;
case '台湾':
$are4 = "-台湾";
break;
case '韩国':
$are4 = "-韩国";
break;
case '日本':
$are4 = "-日本";
break;
case '欧美':
$are4 = "-欧美";
break;
case '香港':
$are4 = "-香港";
}?>