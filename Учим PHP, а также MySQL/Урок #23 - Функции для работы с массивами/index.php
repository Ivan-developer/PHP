<?php

// Функции для работы с массивами
/*
сущ два типа масивов:
1. Обычные 
2. Ассоциативные (ключ => значение)
*/
    $arr = array(12,17, 5, 23, 56);

    // count() считает кол-во элементов в массиве
    echo count($arr)."<br />";

    // отсортировать , print_r() - функция для разработчиков, для выводы на экран массива

    sort($arr);
    print_r($arr);

    echo "<br />";

    // отсортировать в убувающем порядке

    rsort($arr);
    print_r($arr);

    echo "<br />";

    //  Ассоциативные массивы нужно сортировать по другому
    // по возрастанию asort($arrSoc);
    // по обыванию arsort($arrSoc);
    
    $arrSoc = array("a"=> 21, "b" => 45);
    arsort($arrSoc);
    print_r($arrSoc);
    echo "<br />";
    
    krsort($arrSoc);
    print_r($arrSoc);
    echo "<br />";

    // перемешивать элементы по массиву, в рандомной последовательности

    krsort($arr);
    print_r($arr);
    echo "<br />";

    // проверка на значение в масиве
    // первое что ищем , вотрое где
    // возращает true или false, есть или нет

    $arr = array(12,23,45);
    echo  in_array(12, $arr);
    echo "<br />";

    // функция сложения двух массивов

    $arr_1 = array(10,2);
    $arr_2= array(3,5,7,8);

    $arr_3 = array_merge($arr_1, $arr_2);
    print_r($arr_3);
    echo "<br />";

    // обрезает от и до

    $arrDone = array(1,2,3,4,5,6,7);
    $arrDone = array_slice($arrDone, 1, 2);
    print_r($arrDone);
    echo "<br />";

?>