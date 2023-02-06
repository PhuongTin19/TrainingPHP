<?php
//1. Kiểu số nguyên (Int)
//Khai báo
$age = 30;

//Ép kiểu
$age = (int) $age;

//Kiểm tra kiểu số nguyên
//$check = is_int($age);
$check = is_integer($age);

//2. Kiểu boolean (Logic)
$check = 1;
$check = (bool) $check;
$checkBool = is_bool($check);

//3. Kiểu số thực (float)
$fee = 10.5;
$fee = (float) $fee;

//4. Kiểu chuỗi (string)
$message = 11;
$message = (string) $message;
$checkString = is_string($message);

//5. Kiểu mảng (array)
$carArray = [2,3,5,4,2];
$carArray = (array) $carArray;
$checkArr = is_array($carArray);
//6. Kiểu rỗng (null)
$total = NULL;
$total = (int) $total;
$checkNull = is_null($total);

//7. Kiểu Resource
$curl = curl_init();
//$checkType = get_resource_type($curl);

//8. Kiểu đối tượng (Object)
$dataCustomer = [
    'Hoàng An'
];
$dataCustomer = (object) $dataCustomer;
$checkObject = is_object($dataCustomer);

$customerObject = new stdClass();
$customerObject->age = 30;

/**
 * Phân biệt empty và null
 * 
 */
$message1 =  null;//Rỗng
$message2 = '';//Trống 
var_dump($message1);
echo "<br/>";
var_dump($message2);
?>