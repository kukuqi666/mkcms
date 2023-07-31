<?php
include('inc.php');
$sex2 = isset($_GET['sex']) ? $_GET['sex'] : '';
switch($sex2){
case '男':
$cs1 = "%E7%94%B7";
break;
case '女':
$cs1 = "%E5%A5%B3";
break;
case '':
$cs1 = "";
}
$area2 = isset($_GET['area']) ? $_GET['area'] : '';
switch($area2){
case '内地':
$cs2 = "%E5%86%85%E5%9C%B0";
break;
case '香港':
$cs2 = "%E9%A6%99%E6%B8%AF";
break;
case '台湾':
$cs2 = "%E5%8F%B0%E6%B9%BE";
break;
case '日本':
$cs2 = "%E6%97%A5%E6%9C%AC";
break;
case '韩国':
$cs2 = "%E9%9F%A9%E5%9B%BD";
break;
case '美国':
$cs2 = "%E7%BE%8E%E5%9B%BD";
break;
case '英国':
$cs2 = "%E8%8B%B1%E5%9B%BD";
break;
case '其他':
$cs2 = "%E5%85%B6%E4%BB%96";
case '':
$cs2 = "";
}
$prurl = fileget2("https://dianying.2345.com/mingxing/list/".$cs1."-".$cs2."-".$cs3.".html"); 
$prurl = iconv("gb2312", "utf-8//IGNORE",$prurl);
$fenyema='#<div class="v_page">[\s\S]+?</div>#';
preg_match_all($fenyema, $prurl,$yeshua); 
$yeshu=implode($glue, $yeshua[0]);
$yeshu = str_replace('<div class="v_page">', '', "$yeshu");
$yeshu = str_replace('</div>', '', "$yeshu");
$yeshu = str_replace("<a rel='nofollow'", "<li><a", "$yeshu");
$yeshu = str_replace('//dianying.2345.com/mingxing/list/', 'actor-', "$yeshu");
$yeshu = str_replace("class='cur'", "class='on'", "$yeshu");
$yeshu = str_replace('</a>', '</a></li>', "$yeshu");
$yeshu = str_replace("下一页&nbsp;>", '下一页', "$yeshu");
$yeshu = str_replace("<&nbsp;上一页", '上一页', "$yeshu");
echo $yeshu;
?>