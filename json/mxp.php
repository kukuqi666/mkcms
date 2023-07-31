<?php
error_reporting(0);
header('Content-Type:text/html;charset=UTF-8');
include('function.php');
$fenyeurl = "https://api.so.360kan.com/index?force_v=1&kw=".$_GET['wd']."&from=&pageno=".$_GET['pageno']."&v_ap=1&tab=".$_GET['tab'];
$data = json_decode(fileget2($fenyeurl,0),true);
$total=$data['data']['page']['total'];
$page=$_GET['page'];
function getPage($_var_78, $_var_79, $_var_80)
{   $mxq=$_GET['wd'];
    $leixing=$_GET['tab'];
    $_var_81 = 5;
    $_var_78 = $_var_78 < 1 ? 1 : $_var_78;
    $_var_78 = $_var_78 > $_var_79 ? $_var_79 : $_var_78;
    $_var_79 = $_var_79 < $_var_78 ? $_var_78 : $_var_79;
    $_var_82 = $_var_78 - floor($_var_81 / 2);
    $_var_82 = $_var_82 < 1 ? 1 : $_var_82;
    $_var_83 = $_var_78 + floor($_var_81 / 2);
    $_var_83 = $_var_83 > $_var_79 ? $_var_79 : $_var_83;
    $_var_84 = $_var_83 - $_var_82 + 1;
    if ($_var_84 < $_var_81 && $_var_82 > 1) {
        $_var_82 = $_var_82 - ($_var_81 - $_var_84);
        $_var_82 = $_var_82 < 1 ? 1 : $_var_82;
        $_var_84 = $_var_83 - $_var_82 + 1;
    }
    if ($_var_84 < $_var_81 && $_var_83 < $_var_79) {
        $_var_83 = $_var_83 + ($_var_81 - $_var_84);
        $_var_83 = $_var_83 > $_var_79 ? $_var_79 : $_var_83;
    }
    if ($_var_78 > 1) {
        $_var_85 .= '<li><a  title="上一页" href="mxstar_'.$mxq.'_'.$leixing.'_' . ($_var_78 - 1) . '.html"">上一页</a></li>';
    }
    for ($_var_86 = $_var_82; $_var_86 <= $_var_83; $_var_86++) {
        if ($_var_86 == $_var_78) {
            $_var_85 .= '<li class="active"><a target="_self" class="on">' . $_var_78 . '</a></li>';
        } else {
            $_var_85 .= '<li><a href="mxstar_'.$mxq.'_'.$leixing.'_' . $_var_80 .'' . $_var_86 . '.html">' . $_var_86 . '</a></li>';
        }
    }
    if ($_var_78 < $_var_83) {
        $_var_85 .= '<li><a  title="下一页" href="mxstar_'.$mxq.'_'.$leixing.'_' . ($_var_78 + 1) . '.html">下一页</a></li>';
    }
    return $_var_85;
}
echo getPage($page,$total,'');
echo '<li><a>共'.$total.'页</a></li>';
?>