<?php

$i = 1;
while ($i <= 10) {
    echo $i++;
    echo "\n";
};

function f($x) {
    $y=$x;
    while(--$x) $y *= $x;
    return $y;
}
echo 'факториал числа 5 равен '. f(5) ."\n";


$p=1;
while ($p++ <= 20 ){
    if($p%2==0) {
        echo $p . "\n";
    }
}
?>