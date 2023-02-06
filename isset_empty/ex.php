<?php
//Hàm isset() - Kiểm tra biến có tồn tại hay ko
//            - Không kiểm tra dữ liệu của biến
//            - Null ko kiểm tra đc

$number = 'Unicode'; 
if(isset($number) && $number){
    var_dump($number);
}
echo "<br/>";
//Hàm empty()
/**
 * - Chỉ trả về kiểu dữ liệu boolean
 * - Trả về true nếu:
 * + Không tồn tại => !isset($variable)
 * Hoặc
 * + Rỗng, =0, trống, nill, array không có phần tử, object rỗng, false
 * 
 * Ứng dụng:Kiểm tra biến tồn tại và có dữ liệu
 */

$str = 'Unicode';

$check = empty($str);
var_dump($check);