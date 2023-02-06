<?php
require_once('functions.php');
function makeTotal($a, $b){
    $total = $a + $b;
    echo 'Total '.$a.' + '.$b.' = '.$total."<br/>";
}

//Gọi hàm
makeTotal(3,4);
//Kiểm tra hàm tồn tại hay ko
if(function_exists('getMessage')){
    getMessage();
}
//Gọi hàm
getNumber(3,'Number');

?>