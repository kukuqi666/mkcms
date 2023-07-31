<?php include('system/inc.php');
error_reporting(0);
header('Content-Type:text/html;charset=UTF-8');
$cat=$_GET['cat'];//类型
$year=intval($_GET['year']);//年份
if($year==0)$year='';
$area=$_GET['area'];//地区
$act=$_GET['act'];//主演
$rank=$_GET['rank'];//火热
$pageno=intval($_GET['pageno']);
if($pageno==''){$pageno=1;}//页数
switch ($leixing) {
    case "dianying":
    $catid="1";
    $type="movie";
    $under='_';
    break;
    case "dianshi":
    $catid="2";
    $type="tv";
    $under='_';
    break;
    case "zongyi":
    $catid="3";
    $type="zongyi";
    $under='';
    break;
    default:
    $catid="4";
    $type="dongman";
    $under='';
}
$wangzhi="https://api.web.360kan.com/v1/filter/list?catid=$catid&rank=$rank&cat=$cat&year=$year&area=$area&act=$act&size=35&pageno=$pageno";
$list=json_decode(fileget2($wangzhi,0),true);
$pagecount = count($list['data']['movies']);
$linkcount=$list['data']['total'];
$totalPage=ceil($linkcount/35);
if ($totalPage>20){$totalPage=20;}
if ($pagecount>35){$pagecount=35;}
?>