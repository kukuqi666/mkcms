<?php
error_reporting(0); 
$result = mysqli_query($conn,'select * from mkcms_system where id = 1');
$row = mysqli_fetch_array($result);
$mkcms_domain = $row['s_domain'];
$mkcms_name = $row['s_name'];
$mkcms_seoname = $row['s_seoname'];
$mkcms_keywords = $row['s_keywords'];
$mkcms_description = $row['s_description'];
$mkcms_copyright = $row['s_copyright'];
$mkcms_cache = $row['s_cache'];
$mkcms_wei = $row['s_wei'];
$mkcms_user = $row['s_user'];
$mkcms_logo = $row['s_logo'];
$mkcms_mjk = $row['s_mjk'];
$mkcms_jiekou = $row['s_jiekou'];
$mkcms_qqun = $row['s_qqun'];
$mkcms_token= $row['s_token'];
$mkcms_bdyun= $row['s_bdyun'];
$mkcms_tongji= $row['s_tongji'];
$mkcms_qianxian= $row['s_qianxian'];
$mkcms_dianying= $row['s_dianying'];
$mkcms_dianshi= $row['s_dianshi'];
$mkcms_zongyi= $row['s_zongyi'];
$mkcms_dongman= $row['s_dongman'];
$mkcms_tuiguang= $row['s_tuiguang'];
$mkcms_shoufei= $row['s_shoufei'];
$mkcms_cishu= $row['s_cishu'];
$mkcms_gx= $row['s_gx'];
$mkcms_hong= $row['s_hong'];
$mkcms_bofang= $row['s_bofang'];
$mkcms_fengmian= $row['s_fengmian'];
$mkcms_mail= $row['s_mail'];
$mkcms_smtp= $row['s_smtp'];
$mkcms_muser= $row['s_muser'];
$mkcms_mpwd= $row['s_mpwd'];
$mkcms_wappid= $row['s_wappid'];
$mkcms_wkey= $row['s_wkey'];
$mkcms_alipay= $row['s_alipay'];
$mkcms_appid= $row['s_appid'];
$mkcms_appkey= $row['s_appkey'];
$mkcms_appewm= $row['s_appewm'];
$mkcms_appbt= $row['s_appbt'];
$mkcms_apppic= $row['s_apppic'];
$mkcms_appurl= $row['s_appurl'];
$mkcms_hctime= $row['s_hctime'];
$mkcms_beijing= $row['s_beijing'];
$mkcms_dianyingnew= $row['s_dianyingnew'];
$mkcms_dongmannew= $row['s_dongmannew'];
$mkcms_zongyinew= $row['s_zongyinew'];
$mkcms_zhifu= $row['s_zhifu'];
$mkcms_guanzhu= $row['s_guanzhu'];
$mkcms_miaoshu= $row['s_miaoshu'];
$mkcms_hz= $row['s_hz'];
$mkcms_yq= $row['s_yq'];
$mkcms_cxzy= $row['s_cxzy'];
$mkcms_mv= $row['s_mv'];
$mkcms_zixun= $row['s_zixun'];
$mkcms_yy= $row['s_yy'];
$mkcms_slow= $row['s_slow'];
$mkcms_dataoke= $row['s_dataoke'];
$mkcms_dataokeid= $row['s_dataokeid'];
$mkcms_gg= $row['s_gg'];
$mkcms_gonggao= $row['s_gonggao'];
$mkcms_tk= $row['s_tk'];
$mkcms_tancgonggao= $row['s_tancgonggao'];
$mkcms_tancurl= $row['s_tancurl'];
$mkcms_tanchuangfenzhong= $row['s_tanchuangfenzhong'];
$mkcms_order= $row['s_order'];
$cresult = mysqli_query($conn,'select * from mkcms_diy where id = 1');
$crow = mysqli_fetch_array($cresult);
$mkcms_zbcode = $crow['s_zbcode'];
$mkcms_hallcode = $crow['s_hallcode'];
$mkcms_fulicode = $crow['s_fulicode'];
//广告获取
$result1 = mysqli_query($conn,'select * from mkcms_ad where catid = 1');
$row1 = mysqli_fetch_array($result1);
$mkcms_ad1 =$row1['pic'];
$result2 = mysqli_query($conn,'select * from mkcms_ad where catid = 2');
$row2 = mysqli_fetch_array($result2);
$mkcms_ad2 =$row2['pic'];
$result3 = mysqli_query($conn,'select * from mkcms_ad where catid = 3');
$row3 = mysqli_fetch_array($result3);
$mkcms_ad3 =$row3['pic'];
$result4 = mysqli_query($conn,'select * from mkcms_ad where catid = 4');
$row4 = mysqli_fetch_array($result4);
$mkcms_ad4 =$row4['pic'];
$result5 = mysqli_query($conn,'select * from mkcms_ad where catid = 5');
$row5 = mysqli_fetch_array($result5);
$mkcms_ad5 =$row5['pic'];
$result6 = mysqli_query($conn,'select * from mkcms_ad where catid = 6');
$row6 = mysqli_fetch_array($result6);
$mkcms_ad6 =$row6['pic'];
$result7 = mysqli_query($conn,'select * from mkcms_ad where catid = 7');
$row7 = mysqli_fetch_array($result7);
$mkcms_ad7 =$row7['pic'];
$result8 = mysqli_query($conn,'select * from mkcms_ad where catid = 8');
$row8 = mysqli_fetch_array($result8);
$mkcms_ad8 =$row8['pic'];
$result9 = mysqli_query($conn,'select * from mkcms_ad where catid = 9');
$row9 = mysqli_fetch_array($result9);
$mkcms_ad9 =$row9['pic'];
$result10 = mysqli_query($conn,'select * from mkcms_ad where catid = 10');
$row10 = mysqli_fetch_array($result10);
$mkcms_ad10 =$row10['pic'];
$result11 = mysqli_query($conn,'select * from mkcms_ad where catid = 11');
$row11 = mysqli_fetch_array($result11);
$mkcms_ad11 =$row11['pic'];
$result12 = mysqli_query($conn,'select * from mkcms_ad where catid = 12');
$row12 = mysqli_fetch_array($result12);
$mkcms_ad12 =$row12['pic'];
$result13 = mysqli_query($conn,'select * from mkcms_ad where catid = 13');
$row13 = mysqli_fetch_array($result13);
$mkcms_ad13 =$row13['pic'];
$result14 = mysqli_query($conn,'select * from mkcms_ad where catid = 14');
$row14 = mysqli_fetch_array($result14);
$mkcms_ad14 =$row14['pic'];
$result15 = mysqli_query($conn,'select * from mkcms_ad where catid = 15');
$row15 = mysqli_fetch_array($result15);
$mkcms_ad15 =$row15['pic'];
$result16 = mysqli_query($conn,'select * from mkcms_ad where catid = 16');
$row16 = mysqli_fetch_array($result16);
$mkcms_ad16 =$row16['pic'];
$result17 = mysqli_query($conn,'select * from mkcms_ad where catid = 17');
$row17 = mysqli_fetch_array($result17);
$mkcms_ad17 =$row17['pic'];
$result18 = mysqli_query($conn,'select * from mkcms_ad where catid = 18');
$row18 = mysqli_fetch_array($result18);
$mkcms_ad18 =$row18['pic'];
$result19 = mysqli_query($conn,'select * from mkcms_ad where catid = 19');
$row19 = mysqli_fetch_array($result19);
$mkcms_ad19 =$row19['pic'];
$result20 = mysqli_query($conn,'select * from mkcms_ad where catid = 20');
$row20 = mysqli_fetch_array($result20);
$mkcms_ad20 =$row20['pic'];
$result21 = mysqli_query($conn,'select * from mkcms_ad where catid = 21');
$row21 = mysqli_fetch_array($result21);
$mkcms_ad21 =$row21['pic'];
$result22 = mysqli_query($conn,'select * from mkcms_ad where catid = 22');
$row22 = mysqli_fetch_array($result22);
$mkcms_ad22 =$row22['pic'];
$result23 = mysqli_query($conn,'select * from mkcms_ad where catid = 23');
$row23 = mysqli_fetch_array($result23);
$mkcms_ad23 =$row23['pic'];
$result24 = mysqli_query($conn,'select * from mkcms_ad where catid = 24');
$row24 = mysqli_fetch_array($result24);
$mkcms_ad24 =$row24['pic'];
$result25 = mysqli_query($conn,'select * from mkcms_ad where catid = 25');
$row25 = mysqli_fetch_array($result25);
$mkcms_ad25 =$row25['pic'];
function fileget($url,$timeout = 5) {
    $user_agent = "Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
    $curl = curl_init(); 
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_USERAGENT,$user_agent);
    curl_setopt($curl, CURLOPT_REFERER,$url) ;
    curl_setopt($curl, CURLOPT_AUTOREFERER, 1);
    curl_setopt($curl, CURLOPT_TIMEOUT, $timeout);
    curl_setopt($curl, CURLOPT_HEADER, 0); 
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION,1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, '0');
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, '0');
    curl_setopt($curl, CURLOPT_ENCODING, '');
    return curl_exec($curl);
    curl_close($curl);
}
function fileget2($_url, $_red = 1, $_time = 10)
{
    $user_agent = "Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Safari/537.36"; //UA
    $ch = curl_init(); //启动会话
    curl_setopt($ch, CURLOPT_HEADER, 0); //不返回 header 部分
    curl_setopt($ch, CURLOPT_URL, $_url); //访问地址
    curl_setopt($ch, CURLOPT_USERAGENT, $user_agent); // 伪造ua
    curl_setopt($ch, CURLOPT_REFERER, $_url); //伪装请求来源 URL
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //参数为1表示传输数据，为0表示直接输出显示
    $ip = mt_rand(48, 140) . "." . mt_rand(10, 240) . "." . mt_rand(10, 240) . "." . mt_rand(10, 240); //随机 ip
    $httpheader[] = 'CLIENT-IP:' . $ip;
    $httpheader[] = 'X-FORWARDED-FOR:' . $ip;
    curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader); //附加协议头
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, $_red); //支持重定向
    curl_setopt($ch, CURLOPT_AUTOREFERER, $_red); //重定向时，自动设置header的Referer信息           
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); // https请求 不验证证书和hosts
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); // 从证书中检查SSL加密算法是否存在
    curl_setopt($ch, CURLOPT_TIMEOUT, $_time); //设置curl允许执行的最长秒数
    curl_setopt($ch, CURLOPT_ENCODING, ''); //解决网页乱码问题
    $content = trim(curl_exec($ch)); //移除两边空白或其他字符
    curl_close($ch); //关闭会话
    return $content; //返回数据
}
function LoadOne($url) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; U; Android 4.4.1; zh-cn; R815T Build/JOP40D) AppleWebKit/533.1 (KHTML, like Gecko)Version/4.0 MQQBrowser/4.5 Mobile Safari/533.1');
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $content = curl_exec($ch);
    curl_close($ch);
    return ($content);
}
function fileget3($_url, $_red = 1, $_time = 10)
{
    $gxpd=time()-filemtime('./cache/runtime/'.md5($_url));
    if($gxpd>2*60*60){
    set_time_limit(0);  
    $user_agent = "Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Safari/537.36"; //UA
    $ch = curl_init(); //启动会话
    curl_setopt($ch, CURLOPT_HEADER, 0); //不返回 header 部分
    curl_setopt($ch, CURLOPT_URL, $_url); //访问地址
    curl_setopt($ch, CURLOPT_USERAGENT, $user_agent); // 伪造ua
    curl_setopt($ch, CURLOPT_REFERER, $_url); //伪装请求来源 URL
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //参数为1表示传输数据，为0表示直接输出显示
    $ip = mt_rand(48, 140) . "." . mt_rand(10, 240) . "." . mt_rand(10, 240) . "." . mt_rand(10, 240); //随机 ip
    $httpheader[] = 'CLIENT-IP:' . $ip;
    $httpheader[] = 'X-FORWARDED-FOR:' . $ip;
    curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader); //附加协议头
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, $_red); //支持重定向
    curl_setopt($ch, CURLOPT_AUTOREFERER, $_red); //重定向时，自动设置header的Referer信息           
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); // https请求 不验证证书和hosts
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); // 从证书中检查SSL加密算法是否存在
    curl_setopt($ch, CURLOPT_TIMEOUT, $_time); //设置curl允许执行的最长秒数
    curl_setopt($ch, CURLOPT_ENCODING, ''); //解决网页乱码问题
    $content = trim(curl_exec($ch)); //移除两边空白或其他字符
    curl_close($ch); //关闭会话
file_put_contents('./cache/runtime/'.md5($_url),gzdeflate($content));
}
$fcon=gzinflate(file_get_contents('./cache/runtime/'.md5($_url)));
return $fcon;}
function get_usergroup_name($_var_44)
{
    $_var_45 = mysqli_query($conn,'select * from mkcms_user_group where ug_id=' . $_var_44 . '');
    if (!!($_var_46 = mysqli_fetch_array($_var_45))) {
        return $_var_46['ug_name'];
    } else {
        return '';
    }
}
function getPageHtml($_var_60, $_var_61, $_var_62)
{
    $_var_63 = 5;
    $_var_60 = $_var_60 < 1 ? 1 : $_var_60;
    $_var_60 = $_var_60 > $_var_61 ? $_var_61 : $_var_60;
    $_var_61 = $_var_61 < $_var_60 ? $_var_60 : $_var_61;
    $_var_64 = $_var_60 - floor($_var_63 / 2);
    $_var_64 = $_var_64 < 1 ? 1 : $_var_64;
    $_var_65 = $_var_60 + floor($_var_63 / 2);
    $_var_65 = $_var_65 > $_var_61 ? $_var_61 : $_var_65;
    $_var_66 = $_var_65 - $_var_64 + 1;
    if ($_var_66 < $_var_63 && $_var_64 > 1) {
        $_var_64 = $_var_64 - ($_var_63 - $_var_66);
        $_var_64 = $_var_64 < 1 ? 1 : $_var_64;
        $_var_66 = $_var_65 - $_var_64 + 1;
    }
    if ($_var_66 < $_var_63 && $_var_65 < $_var_61) {
        $_var_65 = $_var_65 + ($_var_63 - $_var_66);
        $_var_65 = $_var_65 > $_var_61 ? $_var_61 : $_var_65;
    }
    if ($_var_60 > 1) {
        $_var_67 .= '<li><a  title="上一页" href="' .$_var_62 . ($_var_60 - 1) . '&page=' . ($_var_60 - 1) . '"">上一页</a></li>';
    }
    for ($_var_68 = $_var_64; $_var_68 <= $_var_65; $_var_68++) {
        if ($_var_68 == $_var_60) {
            $_var_67 .= '<li><a style="background:#1a9cd6;"><font color="#fff">' . $_var_68 . '</font></a></li>';
        } else {
            $_var_67 .= '<li><a href="' . $_var_62 . $_var_68 . '&page=' . $_var_68 . '">' . $_var_68 . '</a></li>';
        }
    }
    if ($_var_60 < $_var_65) {
        $_var_67 .= '<li><a  title="下一页" href="' . $_var_62 . ($_var_60 + 1) . '&page=' . ($_var_60 + 1) . '"">下一页</a></li>';
    }
    return $_var_67;
}

function getPageHtmll($_var_69, $_var_70, $_var_71)
{
    $_var_72 = 5;
    $_var_69 = $_var_69 < 1 ? 1 : $_var_69;
    $_var_69 = $_var_69 > $_var_70 ? $_var_70 : $_var_69;
    $_var_70 = $_var_70 < $_var_69 ? $_var_69 : $_var_70;
    $_var_73 = $_var_69 - floor($_var_72 / 2);
    $_var_73 = $_var_73 < 1 ? 1 : $_var_73;
    $_var_74 = $_var_69 + floor($_var_72 / 2);
    $_var_74 = $_var_74 > $_var_70 ? $_var_70 : $_var_74;
    $_var_75 = $_var_74 - $_var_73 + 1;
    if ($_var_75 < $_var_72 && $_var_73 > 1) {
        $_var_73 = $_var_73 - ($_var_72 - $_var_75);
        $_var_73 = $_var_73 < 1 ? 1 : $_var_73;
        $_var_75 = $_var_74 - $_var_73 + 1;
    }
    if ($_var_75 < $_var_72 && $_var_74 < $_var_70) {
        $_var_74 = $_var_74 + ($_var_72 - $_var_75);
        $_var_74 = $_var_74 > $_var_70 ? $_var_70 : $_var_74;
    }
    if ($_var_69 > 1) {
        $_var_76 .= '<li><a  title="上一页" href="news_' . ($_var_69 - 1) . '.html"">上一页</a></li>';
    }
    for ($_var_77 = $_var_73; $_var_77 <= $_var_74; $_var_77++) {
        if ($_var_77 == $_var_69) {
            $_var_76 .= '<li class="active"><a target="_self" class="on">' . $_var_69 . '</a></li>';
        } else {
            $_var_76 .= '<li><a href="news_' . $_var_71 .'' . $_var_77 . '.html">' . $_var_77 . '</a></li>';
        }
    }
    if ($_var_69 < $_var_74) {
        $_var_76 .= '<li><a  title="下一页" href="news_' . ($_var_69 + 1) . '.html">下一页</a></li>';
    }
    return $_var_76;
}
function getshop($_var_78, $_var_79, $_var_80)
{
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
        $_var_85 .= '<li><a  title="上一页" href="shop_' . ($_var_78 - 1) . '.html"">上一页</a></li>';
    }
    for ($_var_86 = $_var_82; $_var_86 <= $_var_83; $_var_86++) {
        if ($_var_86 == $_var_78) {
            $_var_85 .= '<li class="active"><a target="_self" class="on">' . $_var_78 . '</a></li>';
        } else {
            $_var_85 .= '<li><a href="shop_' . $_var_80 .'' . $_var_86 . '.html">' . $_var_86 . '</a></li>';
        }
    }
    if ($_var_78 < $_var_83) {
        $_var_85 .= '<li><a  title="下一页" href="shop_' . ($_var_78 + 1) . '.html">下一页</a></li>';
    }
    return $_var_85;
}