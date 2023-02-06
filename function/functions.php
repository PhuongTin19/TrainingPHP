<?php 

if(!function_exists('getMessage')){
    function getMessage(){
        echo "Đây là thông báo<br/>";
    }
}

if(!function_exists('getMessage')){
    function getMessage(){
       
    }
}

if(!function_exists('getNumber')){
    function getNumber($number,$text=null){
       if($text != null){
            echo $text . ':' . $number;
       }else{
            echo $number;
       }
    }
}


?>