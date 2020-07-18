<?php

 // function , мы записываем один раз функцию и потом сылаемся на нее

  function getNumber () {
      echo "Hello";
  }

  getNumber();

  echo "<hr>";

 $x = 12;
 $y = 35;
 $sum = $x + $y;

 echo "$sum";

 echo "<hr>";

 getNumber();

 echo "<hr>";

 // Работа с аргументами

 function getCity ($city) {
    echo $city;
}

$london = 'London!';

getCity($london);

// Функция которая будет возвращать

echo "<hr>";

$a = 5;
$b = "5";

function math ($first, $second) {
    // return $first + $second;
    $sum = $first + $second;
    return $sum;
}

echo math($a,$b);

//======================

echo "<hr>";

function math2 ($first, $second) {
    // return $first + $second;
    $sum = $first + $second;
    return $sum;
}

$summa = math2($a,$b);

echo "$summa";

// функция вызывает другую функцию

echo "<hr>";

// обрати внимание как функция пользуется другой функцией
function printWords($x, $y){
    $word = math ($x, $y);
    echo "NEW $word";
}

printWords($a, $b);




//================================
// обратить внимание как в php срабатывает call back функция

echo "<hr>";

function hello (){
    echo "hello1";
}

function bye(){
    echo "bye";
}

function start (){
    $a = 5;
    if ( $a == 5){
        hello();
    } else {
        bye();
    }
}

start();


?>