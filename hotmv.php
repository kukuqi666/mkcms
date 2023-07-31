<?php
include('system/inc.php');
$mvurl = "https://www.kugou.com/mvweb/html/";
$data = fileget3($mvurl,0);
preg_match('/class="mvlist">(.*?)<\/div>/is',$data,$mvlist);
preg_match_all("/<span>(.*)<\/span>/", $mvlist[1], $name);
preg_match_all('/_src="(.*)"/', $mvlist[1], $img);
echo "start";
for($i = 0; $i < 6; $i++){
			$gq = $name[1][$i];
			$mpic = $img[1][$i];
			$mpic=str_replace('" width="140" height="78','',$mpic);
			$mpic=str_replace('"  width="140" height="78','',$mpic);
			$hash = substr(strrchr($mpic,"/"),1,32);
			$href = "mvplay/".substr($hash,10)."V".substr($hash,0,10);
echo '"title":"'.$gq.'","cover":"'.$mpic.'","link":"'.$href.'.html",';
}
echo "end";
?>