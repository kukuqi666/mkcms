<?php
$jmfang= 'https://api.web.360kan.com/v1/filter/list?catid='.$catid.'&cat='.$leixing.'&size=20';
$list=json_decode(fileget($jmfang),true);
$i=1;
while($i<count($list['data']['movies'])){
if ($i<13){
$chuandi=$list['data']['movies'][$i]['id'].'.html';
$vs=$list['data']['movies'][$i]['title'];
$img=$list['data']['movies'][$i]['cdncover'];
echo "<li class='col-md-6 col-sm-4 col-xs-3";
if ($i>=7){
echo ' hidden-lg hidden-md';
}
echo "'>
<div class='stui-vodlist__box stui-vodlist__bg'>
<a title='$vs' class='stui-vodlist__thumb lazyload' href='$chuandi' data-original='$img'>
<span class='play hidden-xs'></span>
</a>
<div class='stui-vodlist__detail active'>
<h4 class='title text-overflow'>
<a title='$vs' href='$chuandi'>$vs</a>
</h4>
</div>
</div>
</li>";
}
$i++;
}?>