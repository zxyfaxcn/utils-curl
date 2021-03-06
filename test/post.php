<?php
// +----------------------------------------------------------------------
// | index.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------

require_once 'vendor/autoload.php';

use limx\curl\Application;

$curl = new Application();
$url = 'https://demo.phalcon.lmx0536.cn/test/api/api?get=simpleGet';
$params = [
    'get1' => 1,
    'get2' => 2,
];
$headers = [
    'Header-Test' => '1',
];

// Content-Type=application/x-www-form-urlencoded
$result = $curl->client->setHeaders($headers)->post($url, $params)->getJsonContent();
print_r($result);

// Content-Type=json
$result = $curl->client->setHeaders($headers)->format('json')->post($url, $params)->getJsonContent();
print_r($result);

// Content-Type=application/x-www-form-urlencoded
$result = $curl->client->setHeaders($headers)->post($url)->getJsonContent();
print_r($result);

// Content-Type=json
$result = $curl->client->setHeaders($headers)->format('json')->post($url)->getJsonContent();
print_r($result);


