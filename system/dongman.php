<?php
$cs0=$_GET['cat'];//类型
$cs1=$_GET['year'];//年份
$cs2=$_GET['area'];//地区
$cs3=$_GET['rank'];//火热
if($cs3=='')$cs3='rankhot';
$cs4=intval($_GET['pageno']);//页数
if($cs4==''){$cs4=1;}
if($cs1==''){$yea3='';}else{$yea3='-'.$_GET['year'].'年';}
$getcat3 = isset($_GET['cat']) ? $_GET['cat'] : '';
switch($getcat3){
case '热血':
$type3 = "-热血";
break;
case '恋爱':
$type3 = "-恋爱";
break;
case '美少女':
$type3 = "-美少女";
break;
case '运动':
$type3 = "-运动";
break;
case '校园':
$type3 = "-校园";
break;
case '搞笑':
$type3 = "-搞笑";
break;
case '幻想':
$type3 = "-幻想";
break;
case '冒险':
$type3 = "-冒险";
break;
case '悬疑':
$type3 = "-悬疑";
break;
case '魔幻':
$type3 = "-魔幻";
break;
case '动物':
$type3 = "-动物";
break;
case '少儿':
$type3 = "-少儿";
break;
case '亲子':
$type3 = "-亲子";
break;
case '机战':
$type3 = "-机战";
break;
case '怪物':
$type3 = "-怪物";
break;
case '益智':
$type3 = "-益智";
break;
case '战争':
$type3 = "-战争";
break;
case '社会':
$type3 = "-社会";
break;
case '友情':
$type3 = "-友情";
break;
case '成人':
$type3 = "-成人";
break;
case '竞技':
$type3 = "-竞技";
break;
case '耽美':
$type3 = "-耽美";
break;
case '童话':
$type3 = "-童话";
break;
case '萝莉':
$type3 = "-LOLI";
break;
case '青春':
$type3 = "-青春";
break;
case '男性向':
$type3 = "-男性向";
break;
case '女性向':
$type3 = "-女性向";
break;
case '动作':
$type3 = "-动作";
break;
case '真人版':
$type3 = "-真人版";
break;
case 'OVA版':
$type3 = "-OVA版";
break;
case 'TV版':
$type3 = "-TV版";
break;
case '电影版':
$type3 = "-电影版";
break;
case '新番动画':
$type3 = "-新番动画";
break;
case '完结动画':
$type3 = "-完结动画";}
$getarea3 = isset($_GET['area']) ? $_GET['area'] : '';
switch($getarea3){
case '日本':
$are3 = "-日本";
break;
case '美国':
$are3 = "-美国";
break;
case '大陆':
$are3 = "-大陆";
}
?>