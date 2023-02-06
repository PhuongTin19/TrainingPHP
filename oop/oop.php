<?php
    //Tạo class
    class khachhang {
        var $hoten;
        var $namsinh;

        //Hàm tạo
        function __construct() {
            print "Construct:In BaseClass constructor"."<br/>";
        }
        // function __destruct() {
        //     print "In BaseClass constructor"."<br/>";
        // }
        function xungho() {
            echo "Hello ".$this->hoten."<br/>";
        }

        static function demo() {
            $model = new khachhang;
            // $model = new static; //Static trong trường hợp này là tên class
            $model->xungho();
        }
    }
    khachhang::demo();
    $kh1 = new khachhang;
    $kh1->hoten = "Mai Thanh Toán";
    $kh1->namsinh = 1970;
    $kh1->xungho();
    echo "<p>Họ tên: ", $kh1->hoten , "</p>";
    echo "<p>Năm sinh: ", $kh1->namsinh , "</p>";
    //
  
?>