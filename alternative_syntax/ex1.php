<?php
/**
 * 1. Toán tử 3 ngôi
 * 2. Cú pháp thay thế if
 * 3. Cú pháp thay thế for
 * 4. Cú pháp thay thế while
 * 5. Cú pháp thy thế foreach
 */
echo "<h1>TOÁN TỬ 3 NGÔI</h1>";
$number = 10;
/*if ($number == 10){
    echo 'Bạn đủ tuổi';
}else{
    echo 'Bạn không đủ tuổi';
}*/
echo $number==10 ? 'Bạn đủ tuổi':'Bạn không đủ tuổi';
echo "<br/>";
if ($number == 10):
    echo "success";
else:
    echo "error";
endif
?>