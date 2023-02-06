<?php

//Tham số ko giới hạn
//Cách 1:Dùng hàm func_get_args()
function getMessage(){
    $params = func_get_args();
    print_r($params);
}
getMessage(1,2,3);
echo "<br/>";
//Cách 2:
function getMessage2($str,...$params){
    echo 'str = ' . $str;
    print_r($params);
    // echo func_get_arg(1);
}
getMessage2('Unicode',1,2,3,4);
echo "<br/>";

//Đệ quy
function fibonacci($n){
    if($n == 0 || $n == 1){
        return $n;
    }
    return fibonacci($n - 1) + fibonacci($n - 2);
}
echo fibonacci(5);