<?php

// Строковые функции

// длина строки
$string = "This is string";
echo strlen($string)."<br />";

// Ищет на совпадения символы
echo strpos($string, "str")."<br />";

// строгое сравнеие 0 это falsе, надо использовать === строгое значение
if(strpos($string, "T") === false){
    echo "T dont find";
} else{
    echo "T find";
}

echo "<br />";

// Обрезает функция, первый парам: переменная , с какой и до какой,
$string = "This is string";
echo substr($string, 4, 8)."<br />";

// Функция замены строки, замена строку на строку
$string = "This is string";
echo str_replace("is", "real", $string)."<br />";

// Применяется при проверки данных отправленных пользователем
// функция все теги трасформирует символы что бы неполомали сайт
// самый безопасный способ передачи в базу данных информацию от пользователя
$str = "<b> This is bold font size </b>";
echo htmlspecialchars($str)."<br />";

// Строка в нижний регстор strupper
$string = "This IS string";
echo strtolower($string)."<br />";

// функция для обработки паролей
$pass = "123456789";
echo md5($pass)."<br />";

// Удаляет пробелы перед строкой и после строки
$pass = "      1      2  4567         89      ";
echo trim($pass)."<br />";
?>