<?php
echo "<h1>Cú pháp thay thế for</h1>";
//for
for ($i = 1; $i <= 10; $i++) {
    echo $i."<br/>";
}
//Thay thế for
echo "<h3>Cú pháp thay thế </h3>";
for ($i = 1; $i <= 10; $i++):
    echo $i."<br/>";
endfor;
//while
$i = 1;
echo "<h1>Cú pháp thay thế while</h1>";
while($i<=10){
    echo $i."<br/>";
    $i++;
}
//Thay thế while
echo "<h3>Cú pháp thay thế </h3>";
$i = 1;
while($i<=10):
echo $i."<br/>";
$i++;
endwhile;   
//foreach
echo "<h1>Cú pháp thay thế foreach</h1>";
$dataArr = [
    'item 1',
    'item 2'
];
foreach ($dataArr as $item) {
    echo $item."<br/>";
}
//Thay thế foreach
echo "<h3>Cú pháp thay thế </h3>";
foreach ($dataArr as $item):
echo $item."<br/>";
endforeach;
?>