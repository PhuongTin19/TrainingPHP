<?php

// Vấn đề khi duyệt mảng
$customerArr = [];

foreach ($customerArr as $key => $value) {
    echo $value . "<br/>";
}

// $item1 = [
//     'name' => 'Hoàng An',
//     'email' => 'tin63711@gmail.com',
//     'phone' => '0901301277',
//     'address' => 'TPHCM'
// ];
// $item2 = [
//     'name' => 'Hoàng An 2',
//     'email' => 'tin63712@gmail.com',
//     'phone' => '0901301288',
//     'address' => 'TPHCM2'
// ];

//Mảng đa chiều
$customerArr = [
    // $item1,
    // $item2
    [
        'name' => 'Hoàng An',
        'email' => 'tin63711@gmail.com',
        'phone' => '0901301277',
        'address' => 'TPHCM'
    ],
    [
        'name' => 'Hoàng An 2',
        'email' => 'tin63712@gmail.com',
        'phone' => '0901301288',
        'address' => 'TPHCM2'
    ],
    'status' => 'success',
    '30'
];

$customerArr[1]['age'] = '21';
print("<pre>".print_r($customerArr,true)."</pre>");