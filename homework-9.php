<?php
function allArray(array $numbers, callable $callback): array {
    $allArray = [];
    foreach ($numbers as $number) {
        if ($callback($number)) {
            $allArray[] = $number;
        }
    }
    return $allArray;
}

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$alledNumbers = allArray($numbers, function($number) {
    return $number % 2 === 0;
});

print_r($alledNumbers);

//2

$second = fn($num1, $num2) => $num1 - $num2;

echo $second (50, 5);


//3

$sum = function($arr) {
    $result = 0;
    foreach($arr as $num) {
        if($num > 10) {
            $result += $num;
        }
    }
    return $result;
};

$numbers = [1, 6, 10, 15, 20];
echo $sum($numbers);

//4

$array = ["apple", "banana", "orange"];
$upperFirst = fn($str) => ucfirst($str);
$result = array_map($upperFirst, $array);
print_r($result);

//5

$numbers = array(1, 2, 3, 4, 5);
multiply($numbers, 2);
print_r($numbers);


function multiply(array &$arr, $multiplier) {
    for ($i = 0; $i < count($arr); $i++) {
        $arr[$i] *= $multiplier;
    }
}

//6

function filter_words_by_length(&$words, $max_length) {
    $words = array_filter($words, function($word) use ($max_length) {
        return strlen($word) < $max_length;
    });
}

$words = array('Mykyta', 'Kushchov', 'Hillel', 'IT');
filter_words_by_length($words, 6);
print_r($words);
