<?php
//Hàm define dùng nháy đơn hay kép đều hoạt động bình thường
define('_WEB_HOST_ROOT','http://hoangan.net');

echo _WEB_HOST_ROOT;

echo '<br/>';

const _WEB_PATH_ROOT = 'C:/laragon';
echo _WEB_PATH_ROOT;

echo '<br/>';

$checkDefined = defined('_WEB_HOST_ROOT');
var_dump($checkDefined);

?>