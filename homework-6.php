<?php

$arr = [];

for ($i = 0; $i <= 30; $i++) {
        $arr[] = rand(1,50);
}
print_r($arr);


$sum = 0;

for ($i = 0; $i < count($arr); $i++) {
    $sum += $arr[$i];
}
print_r($sum);


$fiveCount = 0;

foreach($arr as $item) {
    if($item === 5) {
        $fiveCount++;}
}
echo "\n";
print_r($fiveCount);




