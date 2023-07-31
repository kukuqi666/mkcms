<?php
error_reporting(0);
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
?>