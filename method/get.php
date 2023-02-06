<?php

//Phương thức gửi,nhận dữ liệu
//GET
print("<pre>".print_r($_GET,true)."<pre/>");

if(isset($_GET['username'])){
    $username = $_GET['username'];
}
if(isset($_GET['age']) && is_numeric($_GET['age'])){
    $age = $_GET['age'];
}
echo 'Username: ' . $username . "<br/>";
echo 'Age: ' . $age . "<br/>";
echo "<br/>";
//
$data = [
    'Tin tức',
    'Sản phẩm'
];
foreach ($data as $item) {
    $url = $item;
    $url = '?module='.urlencode($url);
    echo '<a href=" ' . $url . ' ">' . $item . '</a><br/>';
}
echo "<br/>";
//
print("<pre>".print_r($_SERVER,true)."<pre/>");
echo 'Query String: ' . $_SERVER['QUERY_STRING'].'<br/>';
echo 'Domain: '.$_SERVER['HTTP_HOST'].'<br/>';
?>