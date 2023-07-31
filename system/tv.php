<?php
$cs0=$_GET['cat'];//类型
$cs1=$_GET['year'];//年份
$cs2=$_GET['area'];//地区
$cs3=$_GET['act'];//主演
$cs4=$_GET['rank'];//火热
if($cs4=='')$cs4='rankhot';
$cs5=intval($_GET['pageno']);//页数
if($cs5=='')$cs5=1;
if($cs3==''){$ac2='';}else{$ac2='-'.$_GET['act'];}
if($cs1==''){$yea2='';}else{$yea2='-'.$_GET['year'].'年';}
$getcat2 = isset($_GET['cat']) ? $_GET['cat'] : '';
switch($getcat2){
case '言情片':
$type2 = "-言情片";
break;
case '伦理片':
$type2 = "-伦理片";
break;
case '喜剧片':
$type2 = "-喜剧片";
break;
case '悬疑片':
$type2 = "-悬疑片";
break;
case '都市片':
$type2 = "-都市片";
break;
case '偶像片':
$type2 = "-偶像片";
break;
case '古装片':
$type2 = "-古装片";
break;
case '军事片':
$type2 = "-军事片";
break;
case '警匪片':
$type2 = "-警匪片";
break;
case '历史片':
$type2 = "-历史片";
break;
case '武侠片':
$type2 = "-武侠片";
break;
case '科幻片':
$type2 = "-科幻片";
break;
case '宫廷片':
$type2 = "-宫廷片";
break;
case '情景片':
$type2 = "-情景片";
break;
case '动作片':
$type2 = "-动作片";
break;
case '励志片':
$type2 = "-励志片";
break;
case '神话片':
$type2 = "-神话片";
break;
case '谍战片':
$type2 = "-谍战片";
break;
case '粤语片':
$type2 = "-粤语片";}
$getarea2 = isset($_GET['area']) ? $_GET['area'] : '';
switch($getarea2){
case '大陆':
$are2 = "-大陆";
break;
case '香港':
$are2 = "-香港";
break;
case '台湾':
$are2 = "-台湾";
break;
case '韩国':
$are2 = "-韩国";
break;
case '泰国':
$are2 = "-泰国";
break;
case '日本':
$are2 = "-日本";
break;
case '美国':
$are2 = "-美国";
break;
case '英国':
$are2 = "-英国";
break;
case '新加坡':
$are2 = "-新加坡";}
?>