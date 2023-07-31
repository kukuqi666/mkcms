<?php
$cs0=$_GET['cat'];//类型
$cs1=$_GET['year'];//年份
$cs2=$_GET['area'];//地区
$cs3=$_GET['act'];//主演
$cs4=$_GET['rank'];//火热
if($cs4=='')$cs4='rankhot';
$cs5=intval($_GET['pageno']);//页数
if($cs5==''){$cs5=1;}
if($cs3==''){$ac1='';}else{$ac1='-'.$_GET['act'];}
if($cs1==''){$yea1='';}else{$yea1='-'.$_GET['year'].'年';}
$getarea1 = isset($_GET['area']) ? $_GET['area'] : '';
switch($getarea1){
case '美国':
$are1 = "-美国";
break;
case '大陆':
$are1 = "-大陆";
break;
case '香港':
$are1 = "-香港";
break;
case '韩国':
$are1 = "-韩国";
break;
case '日本':
$are1 = "-日本";
break;
case '法国':
$are1 = "-法国";
break;
case '英国':
$are1 = "-英国";
break;
case '德国':
$are1 = "-德国";
break;
case '台湾':
$are1 = "-台湾";
break;
case '泰国':
$are1 = "-泰国";
break;
case '印度':
$are1 = "-印度";}
$getcat1 = isset($_GET['cat']) ? $_GET['cat'] : '';
switch($getcat1){
	case '喜剧片':
	$type1 = "-喜剧片";
	break;
	case '爱情片':
	$type1 = "-爱情片";
	break;
	case '动作片':
	$type1 = "-动作片";
	break;
	case '恐怖片':
	$type1 = "-恐怖片";
	break;
	case '科幻片':
	$type1 = "-科幻片";
	break;
	case '剧情片':
	$type1 = "-剧情片";
	break;
	case '犯罪片':
	$type1 = "-犯罪片";
	break;
	case '奇幻片':
	$type1 = "-奇幻片";
	break;
	case '战争片':
	$type1 = "-战争片";
	break;
	case '悬疑片':
	$type1 = "-悬疑片";
	break;
	case '动画片':
	$type1 = "-动画片";
	break;
	case '文艺片':
	$type1 = "-文艺片";
	break;
	case '纪录片':
	$type1 = "-纪录片";
	break;
	case '传记片':
	$type1 = "-传记片";
	break;
	case '歌舞片':
	$type1 = "-歌舞片";
	break;
	case '古装片':
	$type1 = "-古装片";
	break;
	case '历史片':
	$type1 = "-历史片";
	break;
	case '惊悚片':
	$type1 = "-惊悚片";}?>