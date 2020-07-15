<?php

// Двумерные массивы
// Двумерные массивы это когда каждый элемент представлен в виде другого масива
// Это массив в масиве
// Массив сотсоит из трех элементов и каждый элемент является массивом
// трехмерные - двухмерные, очень редко используется

    $array = array(array(12, 4.46, "string", true), array("Example"), array(45, "strong"));

    echo $array [0][1];

    echo "</br>";
    echo "<hr>";

    for ($i = 0; $i < count($array); $i++){
        for ($j = 0; $j < count($array[$i]); $j++){
            echo $array[$i][$j]." | ";
        }
        echo "</br>";
    }


    echo "</br>";
    echo "<hr>";

    // по индексу $key , по значение $value
    foreach($array[0] as $key => $value){
        echo " $key";
    }

?>