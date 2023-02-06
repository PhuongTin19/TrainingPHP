<?php
$str = 'Trung tâm đào tạo lập trình "Unicode"';

//1. Thêm ký tự escape vào phía trước các kí tự mong muốn
$str = addcslashes($str,'l"');

echo $str;

echo '<br/>';

$str = 'Trung tâm đào tạo lập trình "Unicode"';

//2. Thêm ký tự escape vào phía trước dấu nháy đơn,nháy kép
$str = addslashes($str);

echo $str;

echo '<br/>';

$str = 'Trung tâm đào tạo lập trình "Unicode"';

//3. Loại bỏ tất cả ký tự escape có trong chuỗi
$str = stripcslashes($str);
echo $str.'<br/>';

//4. Chuyển chuổi thành mảng
$str = 'Trung tâm Unicode';

$arr = explode(' ',$str);

print_r($arr);

echo '<br/>';

//5. Chuyển mảng thành chuỗi
$str = implode(' - ',$arr);
echo $str;
echo '<br/>';

//6. Lấy độ dài của chuỗi
$str = 'Trung tâm đào tạo lập trình "Unicode"';
$length = strlen($str);
echo 'Độ dài là: '.$length;
echo '<br/>';
 
//7. Lấy số chữ trong chuỗi
$str = "Xin chào Unicode";
$wordCount = str_word_count($str,0,'à');
echo 'Số chữ là: '.$wordCount;
echo '<br/>';

//8. Lặp chuỗi theo số lần xác định
$str = 'Unicode';
$str = str_repeat($str, 1);
echo $str;
echo '<br/>';

//9. Tìm kiếm và thay thế chuỗi
$str =  'Trung tâm đào tạo lập trình "Unicode"';
$str = 'C:\laragon\www';
// $str = str_replace('Unicode','',$str);
$str = str_replace('\\','/',$str);
echo $str;
echo '<br/>';

//10. Hàm mã hóa 1 chiều 32 kí tự
$str = '123456';
$str = md5($str);
echo $str.'<br/>';

//11. Hàm mã hóa 1 chiều 40 kí tự
$str = '123456';
$str = sha1($str);
echo $str.'<br/>';

//12. Chuyển chuỗi html thành dạng thực thể
$str = '<p>Đào tạo PHP</p>';
$str = htmlentities($str);
//$str = htmlspecialchars($str); /**Hàm tương tự */
echo $str;

//13. Chuyển từ dạng thực thể sang chuỗi html
$str = html_entity_decode($str);
echo $str.'<br/>';

//14. Loại bỏ thẻ html
$str = '<p>Trung tâm đào tạo <a href="">Lập trình <strong>Unicode</strong></a></p>';
$str = strip_tags($str,'<a>');//Loại bỏ thẻ
echo $str.'<br/>';
//15. Lấy chuỗi con từ chuỗi cha
$str = 'Trung tâm đào tạo Unicode';
$str = substr($str,0,5);
echo $str.'<br/>';

//16. Tách chuỗi từ kí tự cho trước cho đến hết chuỗi
$str = 'tin63711@gmail.com';
$subStr = strstr($str,'@');
echo $subStr.'<br/>';

//17. Tìm chuỗi con có trong chuỗi cha hay ko
$str = 'tin63711@gmail.com';
$position = strpos($str,'tr');
var_dump($position).'<br/>';
echo '<br/>';

//18. Cắt bỏ và thay thế 
/** 
 * @ Tham số cuối cùng
 *  0 -> Chèn
 *  Other -> Đè
 */
$str = 'tin63711@gmail.com';
$str = substr_replace($str,'@',0,1);
echo $str.'<br/>';

//19. Chuyển kí tự sang viết thường
$str = 'Tin63711@gmail.comÂ';
$str = strtolower($str);//Hàm này ko hỗ trợ tiếng việt
$str = mb_strtolower($str,'UTF-8');//Chuỗi có tiếng việt thì dùng hàm này
echo $str.'<br/>';

//20.Chuyển kí tự sang viết hoa
$str = 'Tin63711@gmail.comâ';
$str = strtoupper($str);//Hàm này ko hỗ trợ tiếng việt
$str = mb_strtoupper($str, 'UTF-8');//Chuỗi có tiếng việt thì dùng hàm này
echo $str.'<br/>';

//21. Chuyển chữ cái đầu tiên thành chữ hoa
$str = 'tin63711@gmail.com';
$str = ucfirst($str);
echo $str.'<br/>';

//22. Chuyển chữ cái đầu tiên thành chữ thường
$str = 'Tin63711@gmail.com';
$str = lcfirst($str);
echo $str.'<br/>';

//23. Chuyển kí tự đầu tiên thuộc chữ trong chuỗi sang hoa
$str = 'tin63711@gmail.com';
$str = ucwords($str);
echo $str.'<br/>';

//24. Xóa kí tự đầu cuối 
$str = ' Trung tam Unicode    ';
$str = trim($str,'T ');
var_dump($str);
echo '<br/>';

$url = 'https://unicode.vn/khoa-hoc/khoa-hoc-php/';
$url = trim($url, '/');
echo $url;
echo '<br/>';

//25. Xóa ký tự bên trái
$str = ' Trung tam Unicode    ';
$str = ltrim($str);
var_dump($str);
echo '<br/>';

//26. Xóa ký tự bên phải
$str = ' Trung tam Unicode    ';
$str = rtrim($str);
var_dump($str);
echo '<br/>';

//27. Tách chuỗi lớn thành nhỏ
$str = '121212';
$str = chunk_split($str, 2, ':');
$str = rtrim($str,':');
echo $str.'<br/>';

//28. Chuyển kí tự xuống dòng(\n) thành thẻ <br/>
//Không đc dùng nháy đơn cho \n
$str = "Trung tam dao tao \n Unicode";
$str = nl2br($str);
echo $str.'<br/>';

//29. Chuyển chuỗi JSON thành mảng/Object
$strJson = '{"item1":"Value1","item2":"Value2"}';
echo $strJson.'<br/>';
$jsonArr = json_decode($strJson,false);
print_r($jsonArr);
echo '<br/>';
$jsonArr = json_decode($strJson,true);//Chuyển thành mảng thêm true
print_r($jsonArr);
echo '<br/>';

//30. Chuyển từ mảng/Object thành Json
$strJson = json_encode($jsonArr);
echo $strJson;

?>