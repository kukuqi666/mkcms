<?php include('function.php');
$dz='http://www.1905.com/news'.$_GET['dz'];
$fcon = fileget($dz,0);
$text ='#<ul class="tab-pane[\s\S]*?</ul>#';
preg_match_all($text,$fcon,$arr);
$html = $arr[0][0];
$text2='#<h2>相关电影</h2>[\s\S]*?<!-- 相关电影 end-->#';
preg_match_all($text2,$fcon,$arr2);
$html2 = $arr2[0][0];
$zimg2='#<img src="(.*)" height="160" width="110">#';
$ztitle='#data-hrefexp="fr=wwwfilm_news_xgdy_1_201411" title="(.*)" target="_blank">(.*)</a>#';
$zlink='#<a href="(.*)" class="jump prevue ico_final" target="_blank">预告片</a>#';
$zhuyan='#<div class="director-role"><span>主演：</span><a href="(.*)" target="_blank">(.*)</a>#';
preg_match_all($zimg2,$html2,$sarr3);
preg_match_all($ztitle,$html2,$sarr4);
preg_match_all($zlink,$html2,$sarr5);
preg_match_all($zhuyan,$html2,$sarr6);
$rimg=$sarr3[1][0];//图片
$rtitle=$sarr4[1][0];//标题
$rlink=$sarr5[1][0];//地址
$rzhuyan=$sarr6[2][0];//主演
$zimg='#<img src="(.*)" alt="(.*)"#'; 
$zlist='#href="https://www.1905.com/news/([0-9]+)/([0-9]+).shtml" title="(.*)" target="_blank"#'; 
preg_match_all($zimg,$html,$sarr1);
preg_match_all($zlist,$html,$sarr2);
$ximg=$sarr1[1][0];//图片
$xname=$sarr2[3];//标题
$xlink1=$sarr2[1];//地址
$xlink2=$sarr2[2];//地址
$array = array();
$i=0;
foreach ($xname as $k => $name){
$array[$k]['num'] = $i;
$array[$k]['title'] = $xname[$k];
$array[$k]['link1'] = $xlink1[$k];
$array[$k]['link2'] = $xlink2[$k];
$i++;}
echo '{"num":{"numcount":"'.$i.'"},"relate":{"img":"'.$rimg.'","title":"'.$rtitle.'","link":"'.$rlink.'","zhuyan":"'.$rzhuyan.'"},"cover":{"img":"'.$ximg.'"},"data":'.json_encode($array,true).'}';
?>