<?php

//Biến toàn cục
$data = 1;
//Biến tĩnh
static $number = 0;
//return
function makeTotal($a,$b){
    //Muốn sử dụng biến toàn cục trong hàm phải khai báo global
    global $data;
    echo $data;
    $total = $a + $b;
    // echo $total;
    return $total;
}

$total = makeTotal(1,2);
echo $total;
echo "<br/>";

//demo biến tĩnh
echo $number;
echo "<br/>";
$number++;
echo $number;
echo "<br/>";
echo $number;
echo "<br/>";
//Tham Chiếu
function &hello(){
    static $hello = 'Unicode';
    return $hello;
}

$h = &hello();
$h = 'Học PHP';
echo $h . '<br/>';
echo hello();