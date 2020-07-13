<?php

// Оператор Switch () case

$x = 12;

switch($x) {
    case "Hello" : echo "This is Hello"; break;
    case 5 : echo "This is 5"; break;
    case 7 : echo "This is 7"; break;
    case 12 : echo "This is 12"; break;
}

echo "</br>";

$y = 12;

// с оператором else === default

switch($y) {
    case (5 > $y) : echo "This is Hello"; break;
    case 15 > $y : echo "This is 15"; break;
    default :  echo "We dont know this variable";
}

?>