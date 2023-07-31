<?php  include 'head.php';$hy='active';?>
<title>虎牙直播-<?php echo $mkcms_seoname;?></title>
<meta name="keywords" content="美女直播,游戏直播,一起看电影,<?php echo $mkcms_keywords;?>">
<meta name="description" content="<?php echo $mkcms_description;?>">
<meta name="referrer" content="same-origin">
</head>
<body >
<?php include 'header.php'; ?>
<div class="container">
<div class="row">
<?php echo $mkcms_ad21;?>
<div class="stui-pannel stui-pannel-bg clearfix">
<div class="stui-pannel-box">
<div class="stui-pannel_hd">
<div class="stui-pannel__head active bottom-line clearfix">
<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-list"></use></svg>虎牙直播</h3></div>
</div>
<!-- 筛选 -->
<ul class="stui-screen__list type-slide bottom-line-dot clearfix up-ul2"><li><span class="text-muted">娱乐天地</span></li><li><a href="hy_1663_1.html">星秀</a></li><li><a href="hy_2165_1.html">户外</a></li><li><a href="hy_2633_1.html">二次元</a></li><li><a href="hy_2135_1.html">一起看</a></li><li><a href="hy_2752_1.html">美食</a></li><li><a href="hy_2168_1.html">颜值</a></li><li><a href="hy_4079_1.html">交友</a></li><li><a href="hy_3793_1.html">音乐</a></li><li><a href="hy_2356_1.html">体育</a></li></ul>
<ul class="stui-screen__list type-slide bottom-line-dot clearfix up-ul1"><li><span class="text-muted">网游竞技</span></li><li><a href="hy_lol_1.html">英雄联盟</a></li><li><a href="hy_5485_1.html">LOL云顶之弈</a></li><li><a href="hy_4_1.html">穿越火线</a></li><li><a href="hy_2_1.html">DNF</a></li><li><a href="hy_8_1.html">魔兽世界</a></li><li><a href="hy_393_1.html">炉石传说</a></li><li><a href="hy_7_1.html">DOTA2</a></li><li><a href="hy_802_1.html">坦克世界</a></li><li><a href="hy_862_1.html">CS:GO</a></li><li><a href="hy_4615_1.html">魔兽争霸3</a></li><li><a href="hy_107_1.html">问道</a></li><li><a href="hy_100137_1.html">使命召唤</a></li></ul>
<ul class="stui-screen__list type-slide bottom-line-dot clearfix up-ul2"><li><span class="text-muted">单机热游</span></li><li><a href="hy_2793_1.html">绝地求生</a></li><li><a href="hy_100032_1.html">主机游戏</a></li><li><a href="hy_1732_1.html">我的世界</a></li><li><a href="hy_1997_1.html">方舟</a></li><li><a href="hy_3519_1.html">怪物猎人</a></li><li><a href="hy_3493_1.html">逃离塔科夫</a></li><li><a href="hy_100125_1.html">怀旧游戏</a></li><li><a href="hy_4783_1.html">骑马与砍杀</a></li><li><a href="hy_4913_1.html">拾遗记</a></li></ul>
<ul class="stui-screen__list type-slide bottom-line-dot clearfix up-ul2"><li><span class="text-muted">手游休闲</span></li><li><a href="hy_2336_1.html">王者荣耀</a></li><li><a href="hy_3203_1.html">和平精英</a></li><li><a href="hy_100029_1.html">综合手游</a></li><li><a href="hy_100049_1.html">狼人杀</a></li><li><a href="hy_2928_1.html">QQ飞车</a></li><li><a href="hy_2413_1.html">CF手游</a></li><li><a href="hy_2620_1.html">跑跑手游</a></li><li><a href="hy_2439_1.html">皇室战争</a></li><li><a href="hy_2429_1.html">火影手游</a></li></ul>
<!-- end 筛选 -->
</div>
<div class="stui-pannel_bd">
<ul class="stui-vodlist clearfix">
<?php
$i=0;
while($i<120){
$number=$data['data']['datas'][$i]['totalCount'];$length = strlen($number);if($length > 4){$str = substr_replace(strstr($number,substr($number,-3),' '),'.',-1,0)."万";}else{$str = $number;}
            $ccb="./hyplay_".$data['data']['datas'][$i]['profileRoom'].".html";
            if ($row['d_jifen']>0){
            $ok="onclick=\"return confirm('此视频为收费视频，观看需要支付".$row['d_jifen']."积分，您是否观看？')\"";}
                else{$ok="";}
if(empty($data['data']['datas'][$i]['nick'])) {echo '';} else{
echo '<li class="col-md-6 col-sm-4 col-xs-3">
<div class="stui-vodlist__box stui-vodlist__bg">
<a class="stui-vodlist__thumb1 lazyload" ',$ok,' href="',$ccb,'" title="',$data['data']['datas'][$i]['introduction'],'" data-original="',$data['data']['datas'][$i]['screenshot'],'">
<span class="play hidden-xs"></span>';
if(empty($data['data']['datas'][$i]['recommendTagName'])) {echo '';} else{
echo '<span class="pic-tag pic-tag-h">',$data["data"]["datas"][$i]["recommendTagName"],'</span>';}
echo '<span class="pic-tag pic-tag-b">',$str,'</span>
<span class="pic-text text-right"></span></a>
<div class="stui-vodlist__detail active">
<h4 class="title text-overflow"><a href="',$ccb,'" title="',$data['data']['datas'][$i]['introduction'],'">',$data['data']['datas'][$i]['introduction'],'</a></h4>
<p class="text text-overflow text-muted hidden-xs">主播：',$data['data']['datas'][$i]['nick'],'</p>
</div>
</div>
</li>';
}$i++;}?> 
</ul>
</div>
</div>
</div>
</div>
<ul class="stui-page text-center cleafix">
<?php
if(!empty($_GET['cid'])){$cid=$_GET['cid'];}
    else{$cid="";}
if($_GET['page'] != 1){
     echo '<li><a href="hy_',$cid,'_1.html">首页</a></li>
     <li><a href="hy_',$cid,'_' . ($_GET['page']-1) .'.html"><</a></li>';
     } else {
echo '<li><a href="hy_',$cid,'_1,html">首页</a></li>';
}
if($_GET['page'] == 1){
    echo '<li class="active"><a href="hy_',$cid,'_',($_GET['page']),'.html">1</a></li>
    <li><a href="hy_',$cid,'_',($_GET['page']+1),'.html">',($_GET['page']+1),'</a></li>';
}else{
echo '<li><a href="hy_',$cid,'_',($_GET['page']-1),'.html">',($_GET['page']-1),'</a></li>
<li class="active"><a href="hy_',$cid,'_',$_GET['page'],'.html">',$_GET['page'],'</a></li>';
if($_GET['page'] < $totalPage){echo '<li><a href="hy_',$cid,'_',($_GET['page']+1),'.html">',($_GET['page']+1),'</a></li>'; }}
if($_GET['page'] == $totalPage){
    echo '';
}else if(($_GET['page']+1) < $totalPage){
echo '<li><a href="hy_',$cid,'_',($_GET['page']+2),'.html">',($_GET['page']+2),'</a></li>';}
if($_GET['page'] < $totalPage){
    if($_GET['page'] == 1){echo '<li><a href="hy_',$cid,'_4.html">4</a></li>';}
     echo '<li ><a href="hy_',$cid,'_',($_GET['page']+1),'.html">></a></li>
     <li ><a href="hy_',$cid,'_',$totalPage,'.html">尾页</a></li>';
     } else {
echo '<li class="disabled"><a>尾页</a></li>';
}
?>
</ul>
<?php  include 'footer.php';?>