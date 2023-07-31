<?php
error_reporting(0);
header('Content-type:text/html;charset=utf-8'); 
function GetCurUrl() 
{if(!empty($_SERVER["REQUEST_URI"])) {
    $scriptName = $_SERVER["REQUEST_URI"];
    $nowurl = $scriptName;} else {
    $scriptName = $_SERVER["PHP_SELF"];
    if(empty($_SERVER["QUERY_STRING"])) {
        $nowurl = $scriptName;} else {
            $nowurl = $scriptName."?".$_SERVER["QUERY_STRING"];}}
  return $nowurl;}
if(strpos(GetCurUrl(),'vod/m') !== false){$catid='1'; }
if(strpos(GetCurUrl(),'vod/tv') !== false){$catid='2'; }
if(strpos(GetCurUrl(),'vod/va') !== false){$catid='3'; }
if(strpos(GetCurUrl(),'vod/ct') !== false){$catid='4'; }
$id=basename($_GET['play'],".html");
$urllist='https://api.web.360kan.com/v1/detail?cat='.$catid.'&id='.$id; 
$list=json_decode(fileget2($urllist),true);
$timu = $list['data']['title'];
$h=$list['data']['area'];
if($h=''){$h='其他';}
$g=$list['data']['pubdate'];
$g=date("Y", strtotime($g));
$play0=$list['data']['defaultepisode'][0]['url'];
$nian=$list['data']['defaultepisode'][0]['period'];
$nian=str_replace("期", "", "$nian");
$nian=date("Y", strtotime($nian));
$upinfo=$list['data']['upinfo'];
$total=$list['data']['total'];
if($upinfo==$total){$jishu='全集'.$total;}else{$jishu='更新至'.$upinfo.'集';}
if($total=='0'){$jishu='';$gx='更新至'.$list['data']['defaultepisode'][0]['period'];}
else{$gx=$jishu;}
$f=$list['data']['director'][0];
$imgs = $list['data']['cdncover'];
$jian = $list['data']['description'];
preg_match('#/(.*?)/(.*?).html#', $_GET['play'], $address);
$dycat="m";$dscat="tv";$zycat="va";$dmcat="ct";
$cat=$address[1];
$str=$_GET['play'];
$arr = explode('/', $str);
$mkcmsid=str_replace('.html', '', "$arr[2]");
$mkcmstyle=$arr[1];
$mjk=$mkcms_mjk;
$d_scontent=explode(',',$mkcms_shoufei);
if($mkcms_user==1){//开启收费模式
//判定会员是否登录
if(!isset($_SESSION['user_name'])){
		alert_href('请注册会员登录后观看',''.$mkcms_domain.'ucenter/login.html');
	};
//获取会员信息
 $result = mysqli_query($conn,'select * from mkcms_user where u_name="'.$_SESSION['user_name'].'"');//查询会员积分
if($row = mysqli_fetch_array($result)){
	$u_points=$row['u_points'];//会员积分
	$u_plays=$row['u_plays'];//会员观看记录
	$u_end=$row['u_end'];//到期时间
	$u_group=$row['u_group'];//会员组
	}
//判断会员组
if ($u_group==2||$u_group==3){
$endtime = date('Y-m-d H:i:s',$row['u_end']);
$dqsj = date('Y-m-d H:i:s');
	if ($dqsj > $endtime) {
		$sql = 'update mkcms_user set u_group="1" where u_name="'.$_SESSION['user_name'].'"';
		alert_href('对不起,您的会员已到期,请充值续费！',''.$mkcms_domain.'ucenter/mingxi.html');
}}		
if ($u_group==1){
$d_cishu=explode(',',$u_plays);
for($i=0;$i<count($d_cishu);$i++)
{
$cishu=$i;
}
if ($cishu>=$mkcms_cishu){
	//大于免费观看次数出现此信息
	 alert_href('对不起,您的观看次数已经用完，请推荐本站给您的好友、赚取更多积分',''.$mkcms_domain.'ucenter/yaoqing.html');	
}
else
//写入观看记录
{
$uplays = $u_plays.",".$mkcmsid;
$uplays = str_replace(",,",",",$uplays);
$_data['u_plays'] =$uplays;
$sql = 'update mkcms_user set '.arrtoupdate($_data).' where u_name="'.$_SESSION['user_name'].'"';
if (mysqli_query($conn,$sql)) {
}
} 
}
//视频收费
}
?>