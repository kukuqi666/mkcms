<?php
if($totalPage== 1){echo '';}
else{
if($pageno != 1&&$pageno > $totalPage){echo '<p style="text-align: center;"><img class="sosoimg" src="/template/jingpin/img/blank.png" alt="暂无内容"/></p><li class="active"><a href="'.$type.'_'.$cat.'_'.$year.'_'.$area.'_'.$act.$under.$rank,'_1.html">超出页数范围返回首页</a></li>';}
else if($pageno != 1){echo '<li><a href="'.$type.'_'.$cat.'_'.$year.'_'.$area.'_'.$act.$under.$rank,'_1.html">首页</a></li><li><a href="',$type,'_',$cat,'_',$year,'_',$area,'_',$act,$under,$rank,'_' . ($pageno-1) .'.html"><</a></li>';}
else {echo '<li><a href="',$type,'_',$cat,'_',$year,'_',$area,'_',$act,$under,$rank,'_1.html">首页</a></li>';}
if($pageno == 1){echo '<li class="active"><a href="',$type,'_',$cat,'_',$year,'_',$area,'_',$act,$under,$rank,'_',($pageno),'.html">1</a></li><li><a href="',$type,'_',$cat,'_',$year,'_',$area,'_',$act,$under,$rank,'_',($pageno+1),'.html">',($pageno+1),'</a></li>';}
else if($pageno > $totalPage){echo '';}
else{echo '<li><a href="',$type,'_',$cat,'_',$year,'_',$area,'_',$act,$under,$rank,'_',($pageno-1),'.html">',($pageno-1),'</a></li>
<li class="active"><a href="',$type,'_',$cat,'_',$year,'_',$area,'_',$act,$under,$rank,'_',$pageno,'.html">',$pageno,'</a></li>';
if($pageno < $totalPage){echo '<li><a href="',$type,'_',$cat,'_',$year,'_',$area,'_',$act,$under,$rank,'_',($pageno+1),'.html">',($pageno+1),'</a></li>'; }
}
if($pageno == $totalPage){echo '';}
else if(($pageno+1) < $totalPage){echo '<li><a href="',$type,'_',$cat,'_',$year,'_',$area,'_',$act,$under,$rank,'_',($pageno+2),'.html">',($pageno+2),'</a></li>';}
if($pageno < $totalPage){echo '<li ><a href="',$type,'_',$cat,'_',$year,'_',$area,'_',$act,$under,$rank,'_',($pageno+1),'.html">></a></li>
     <li ><a href="',$type,'_',$cat,'_',$year,'_',$area,'_',$act,$under,$rank,'_',$totalPage,'.html">尾页</a></li>';} 
else if($pageno > $totalPage){echo '';}
else {echo '<li class="disabled"><a>尾页</a></li>';{}}
}
?>