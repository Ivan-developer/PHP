<?php

// Циклы For, While и Do While

for ($i = 0; $i <= 10; $i++) {
    echo "$i";
}

echo "</br>";

for ($b = 0; $b <= 10; $b += 2) {
    echo "$b";
}

echo "</br>";

for ($f = 0; $f <= 10; $f++) {
    if ($f % 5 === 0) {
        echo "$f";
    }
}


echo "<hr>";

for ($h = 0; $h <= 10; $h++) {
    if ($h % 5 === 0) continue;
    if ($h <= 20) break;
    echo "$h";
}

// while

echo "<hr>";

$x = 0;

while ($x <= 10) {
    echo "$x";
    $x++;
}

// вложенный

echo "<hr>";

$p = 1;

while ($p <= 10) {
    if ($p === 5) {
        for ($l = 0; $l <= 10; $l++) {
            echo "+$l+";
        }
    }
    echo "$p ";
    $p++;
}

// do while

echo "<hr>";

$v = 1;
do {
    echo "$v";
    $v++;
} while ($v <= 10);


?>