<?php

$arr = [];

for ($i = 0; $i <= 29; $i++) {
    $arr[] = rand(1, 50);
}
print_r($arr);

$sum = 0;

for ($i = 0; $i < count($arr); $i++) {
    $sum += $arr[$i];
}
print_r($sum);
echo "-Порахувати суму елементів масиву та вивести на екран.";

$fiveCount = 0;
$arrCount = count($arr);

for ($i = 0; $i < $arrCount; $i++) {
    if ($arr[$i] === 5) {
        $fiveCount++;
    }
}
echo "\n";
print_r($fiveCount);
echo '-Перевірте скільки раз число 5 зустрічається у вас в масиві, та виведіть це число на екран.';

$numberDivision = 0;

foreach ($arr as $division) {
    if ($division % 3 === 0) {
        $numberDivision++;
    }
}
echo "\n";
print_r($numberDivision);
echo "-Виведіть на екран тільки числа, які націло діляться на 3.";

$max = $arr[0];

foreach ($arr as $valueMax) {
    if ($valueMax > $max) {
        $max = $valueMax;
    }
}
echo "\n";
print_r($max);
echo "-max";
echo "\n" . max($arr) == $max;

$min = $arr[0];

foreach ($arr as $value) {
    if ($value < $min) {
        $min = $value;
    }
}
echo "\n";
print_r($min);
echo "-min";
echo "\n" . min($arr) == $min;

