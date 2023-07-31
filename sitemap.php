<?php
include('system/inc.php');
header('Content-Type: text/xml;');
echo '<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';
$site=$mkcms_domain.'json/newl.php';
$list =json_decode(fileget2($site),true);
$i = 0;
while ($i < 12) {
    $one1 = $list['data'][$i]['link1']; //地址
    $one2 = $list['data'][$i]['link2']; //地址
    $sj = $list['data'][$i]['time']; 
    $url= 'content-'.$one1.'-'.$one2.'.html';
echo '<url>
    <loc>http://'.$_SERVER['HTTP_HOST'].'/'.$url.'</loc>
    <priority>0.6</priority>
    <lastmod>'. $sj .'</lastmod>
    <changefreq>Daily</changefreq>
    </url>';$i++;}
    if ($mkcms_qianxian == 1){
$data = json_decode(fileget($mkcms_cxzy),true);
    $i=0;
    while($i<32){
$ccb = 'http://'.$_SERVER['HTTP_HOST'].'/cxplay/'. $data['data'][$i]['vod_id'].'.html';
echo '<url>
    <loc>'.$ccb.'</loc>
    <priority>0.6</priority>
    <lastmod>'. date("Y-m-d") .'</lastmod>
    <changefreq>Daily</changefreq>
    </url>';$i++;}}
$wangzhi1 = 'https://api.web.360kan.com/v1/filter/list?catid=1&rank=ranklatest&size=32';
$list1=json_decode(fileget2($wangzhi1,0),true);
$wangzhi2 = 'https://api.web.360kan.com/v1/filter/list?catid=2&rank=rankhot&size=32';
$list2=json_decode(fileget2($wangzhi2,0),true);
$wangzhi3 = 'https://api.web.360kan.com/v1/filter/list?catid=4&rank=rankhot&size=32';
$list3=json_decode(fileget2($wangzhi3,0),true);
$wangzhi4 = 'https://api.web.360kan.com/v1/filter/list?catid=3&rank=ranklatest&size=32';
$list4=json_decode(fileget2($wangzhi4,0),true);
    $i = 0;
    while ($i < 32) {
    $playurl1 = 'vod/m/'.$list1['data']['movies'][$i]['id'].'.html';
    echo '<url>
    <loc>http://'.$_SERVER['HTTP_HOST'].'/'.$playurl1.'</loc>
    <priority>0.6</priority>
    <lastmod>'. date("Y-m-d") .'</lastmod>
    <changefreq>Daily</changefreq>
    </url>';$i++;}
    $i = 0;
    while ($i < 32) {
    $playurl2 = 'vod/tv/'.$list2['data']['movies'][$i]['id'].'.html';
    echo '<url>
    <loc>http://'.$_SERVER['HTTP_HOST'].'/'.$playurl2.'</loc>
    <priority>0.6</priority>
    <lastmod>'. date("Y-m-d") .'</lastmod>
    <changefreq>Daily</changefreq>
    </url>';$i++;}
    $i = 0;
    while ($i < 32) {
    $playurl3 = 'vod/va/'.$list3['data']['movies'][$i]['id'].'.html';
    echo '<url>
    <loc>http://'.$_SERVER['HTTP_HOST'].'/'.$playurl3.'</loc>
    <priority>0.6</priority>
    <lastmod>'. date("Y-m-d") .'</lastmod>
    <changefreq>Daily</changefreq>
    </url>';$i++;}
    $i = 0;
    while ($i < 32) {
    $playurl4 = 'vod/ct/'.$list4['data']['movies'][$i]['id'].'.html';
    echo '<url>
    <loc>http://'.$_SERVER['HTTP_HOST'].'/'.$playurl4.'</loc>
    <priority>0.6</priority>
    <lastmod>'. date("Y-m-d") .'</lastmod>
    <changefreq>Daily</changefreq>
    </url>';$i++;}
    echo '</urlset>';
?>