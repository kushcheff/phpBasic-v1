<?php
//1) Створити змінну, яка буде в собі мати значення 'ua' або 'en'. Перевірити, яке значення має змінна, якщо ua, вивести на екран ваше ім'я українською, якщо en англійською.
$language = 'en';
$name = 'Mykyta';


if ($language === 'en') {
    echo "$name \n";}
else {
    echo 'Микита';
    }

//2) Якщо змінна $var більше 0 та менше 6 то виведіть "true"(string), інакше "false"(string). Перевірте роботу скрипта для значень 5,0,-3,2.
$var_1 = 5;
$var_2 = 0;
$var_3 = -3;
$var_4 = 2;

if ($var_1 > 0 && $var_1 < 6)
{
    echo "var_1=true \n";}
if ($var_2 > 0 && $var_2 < 6)
{
    echo "var_2=true \n";}
if ($var_3 > 0 && $var_3 < 6)
{
    echo "var_3=true \n";}
else {
    echo "var_3=false \n";
}
if ($var_4 > 0 && $var_4 < 6)
{
    echo 'var_4=true';}

