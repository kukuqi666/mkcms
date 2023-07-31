<?php
include('system/inc.php');
/**参数加密

 * @param $data

 * @param $appSecret

 * @return string

 */

function makeSign($data, $appSecret)
{
    ksort($data);
    $str = '';
    foreach ($data as $k => $v) {

        $str .= '&' . $k . '=' . $v;
    }
    $str = trim($str, '&');
    $sign = strtoupper(md5($str . '&key=' . $appSecret));
    return $sign;
}

//接口地址

$host = 'https://openapi.dataoke.com/api/goods/get-goods-list';

$appKey = $mkcms_dataokekey;//应用的key

$appSecret = $mkcms_dataokesecret;

;//应用的Secret

//默认必传参数

$data = [

    'appKey' => $appKey,

    'version' => '1',

];

//加密的参数

$data['sign'] = makeSign($data,$appSecret);

//拼接请求地址

$url = $host .'?'. http_build_query($data);

var_dump($url);

//执行请求获取数据

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch,CURLOPT_TIMEOUT,10);

curl_setopt($ch, CURLOPT_HEADER, 0);

$output = curl_exec($ch);

curl_close($ch);

var_dump($output);

