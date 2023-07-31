<?php 
error_reporting(0); 
$act=isset($_GET['act'])?$_GET['act']:null;
$url=isset($_GET['url'])?$_GET['url']:null;
	switch($act){
		case 'dy':
            $json = file_get_contents('https://tenapi.cn/douyin/?url='.$url);
			$xname = '#"title": "(.*?)"#';//名
			$ximg = '#"cover": "(.*?)"#';//图
			$xmusic = '#"music": "(.*?)"#';//音乐
			$xvideo = '#"url": "(.*?)"#';//无水印视频
            preg_match_all($xname,$json, $xarr1);
        preg_match_all($ximg,$json, $xarr2);
        preg_match_all($xmusic,$json, $xarr3);
        preg_match_all($xvideo,$json, $xarr4);
        $name =$xarr1[1][0];
        $img =$xarr2[1][0];
        $music =$xarr3[1][0];
        $video =$xarr4[1][0];
			if(!empty($url)){
				echo '{"code":1,"msg":"解析成功","name":"'.$name.'","url":"'.$video.'","img":"'.$img.'","music":"'.$music.'"}';
			}else{
				echo '{"code":-1,"msg":"未知错误"}';
			}
		break;
	default:
		exit('{"code":0,"msg":"No Act"}');
	break;
}

		function getrealurl($url){
			$header = get_headers($url,1);
			return $header['location'];	
		}	
 ?>