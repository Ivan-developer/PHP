<?php

// Условные операторы
$x = 10;
$y = 11;

if ($x == $y && $x != 12 && $y == 5 && ($x + 5) == 15) {
    echo "all is ok";
} else {
    echo "all false ";
    echo "this is else works";
}

echo "</br>";

// запись в одну строку
if ($x != $y) echo "all is ok";

echo "</br>";

// Можно записать без {} в отличии в js 
if ($x == $y)
    echo "all is ok";
else
    echo "this is cut else2";

echo "</br>";

// else if()

if ($x == $y)
    echo "all is ok";
else if ($x < $y)
    echo "all else if";
else
    echo "this is cut else2";

// Тернарный оператор
// условие ? true : false

$x == $y ? $string = "Yes" : $string = "No";

echo "</br>";

echo "$string"

?>