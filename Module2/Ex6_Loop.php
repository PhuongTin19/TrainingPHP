<?php

//1. Tính giai thừa
/*$n = 5;
if($n > 0){
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    echo $n . '! = ' . $result . '<br/>';
}else{
    echo "Không hợp lệ";
}*/

//2. Kiểm tra số nguyên tố
/*
$n = 14;
if($n > 1){
    $check = true;
    for ($i=2; $i < $n-1; $i++) { 
        if($n % $i == 0){
            $check = false;
        }
    }
    if($check == true){
        echo $n . " là số nguyên tố";
    }else{
        echo $n." không là số nguyên tố";
    }
}else{
    echo $n." không là số nguyên tố";
}*/

//3. Bảng cửu chương
/*
for ($i = 1; $i <= 10; $i++) { 
    echo "Bảng Cửu Chương" . $i."<br/>";
    for ($j = 1; $j <= 10; $j++) {
        echo $i . ' x ' . $j . ' = ' . $i * $j.'<br/>';
    }
    echo "---------------------------"."<br/>";
}*/

//4. Vẽ Tam Giác Sao
/*$n = 5;
for ($i = 1; $i <= $n; $i++) { 
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br/>";
}*/

//5. Vẽ Tam Giác Đối Xứng
/*$n = 5;
for ($i = 1; $i <= $n; $i++) { 
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br/>";
}
for ($i = $n; $i >= 1; $i--) { 
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br/>";
}*/

//6. Tam Giác Số
$n = 5;
$count = 0;
for ($i = 1; $i <= $n; $i++) { 
    for ($j = 1; $j <= $i; $j++) {
        $count++;
        echo $count." ";
    }
    echo "<br/>";
}
?>