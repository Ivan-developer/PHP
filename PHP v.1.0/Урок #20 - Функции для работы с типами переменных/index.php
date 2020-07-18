<?php
// До этого были основы php
// Функции для работы с типами переменных
// isset() , всегда принимает один параметр 
//, проверяет существует ли переменная или вообще не существует
// если существует то выдаст true
// unset() берет переменную и удаляет, удаляет все переменную
// можем в масиве удалить третий элемент - unset($x[2])
// Сравнивает тип с переменной - echo "Is Number".is_numeric($x); Проверит Число или Нет
// echo "Is Number".is_integer($x); - проверяет, является ли числом
// echo "Is Double".is_double($x); - точка после цифры
// echo "Is String".is_string($x); - строка ли
// echo "Is Bool".is_bool($x); - булиан ли 
// echo "Is Scalar".is_scalar($x); - проверяет является ли это обычной переменной, не массив, не объект
// echo "Is Null".is_null($null); - проверяет пустая ли или нет, если пустая то true, если нет то false
// echo "Is Array".is_array($null); - массив ли
// echo "Type is ".gettype($null); - тип переменной

// isset() возвращает true / false , существует переменная или нет

$x = 20;

if ( isset($x)){
    echo "Alive";
} else {
    echo "NOT Alive";
}

echo "<br>";

unset($x);

if ( isset($x)){
    echo "Alive";
} else {
    echo "NOT Alive";
}

echo "<br>";
// is_numeric

$x = "10";

echo "Is Numeric".is_numeric($x);

echo "<br>";

$x = 12;

echo "Is Integer".is_integer($x);

echo "<br>";

$x = 12.4;

echo "Is Double".is_double($x);

echo "<br>";

$x = "12.4";

echo "Is String".is_string($x);

echo "<br>";

$x = true;

echo "Is Bool".is_bool($x);

echo "<br>";

$x = array();

echo "Is Scalar".is_scalar($x);

echo "<br>";

$null;

echo "Is Null".is_null($null);

echo "<br>";

$null;

echo "Is Array".is_array($null);

echo "<br>";

$null;

echo "Type is ".gettype($null);

?>