<?php
// Массивы элементов
// Массивы и Ассоциативные массивы !
// как и в js 0 - 12 , 1 - 3.25 , 2 , 3 

$array = array(12, 3.25, "string", false);
// выведем индекс 
echo "$array[1]";
// заменим элемент
$array[1] = 50;
echo "$array[1]";
// запишем новое значение в массив
$array[] = "New Element";
echo "$array[4]";

// выведем все элементы, все элементы выводятся через циклы
// длина массивы реализуция как через count()

echo "</br>";

for ($i = 0; $i < count($array); $i++) {
    echo "Elements with index = " . $array[$i] . "</br>";
}

// !!!!!!!!!!!!!!!!!!!
// Ассоциативные массивы
// ключ : значение
// цикл for для Ассоциативныx массивов не применяется
// цикл forEach для перебора Ассоциативныx массивов
/*         (массив как ключ => значение)
    foreach($array as $key => $value){

    }
 */

$list = array("age" => 18, "name" => "Alex", "schoolBoy" => true);

$list["age"] = 22;

echo "$list[0]";

echo "</br>";
echo "<hr>";

foreach($list as $key => $value){
     echo " $key";
}

echo "</br>";
echo "<hr>";

foreach($list as $key => $value){
    echo " $value";
}

//===================================
// Задача
echo "</br>";
echo "<hr>";

$summa = 0;

echo getAverage(array("first" => 12, "sec" => 45, "third" => 23, "forth" => 55));

function getAverage($array)
{
    foreach ($array as $key => $value) {
        $summa += $value;
    }
    return $summa / count($array); // сумму поделили на количество элементов
}
?>