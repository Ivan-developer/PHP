<?php

// Функции даты
// time() берет отчет с первого января 1970 года, в это время вышел Unix

$start = microtime(true);

echo time()."<br />";

echo microtime(true)."<br />";

echo "The time of script works: ".(microtime(true) - $start)."Sec"."<br />";

// функция date date("Y-m-n H:i:s"); => дата => php .php.net

echo date("Y-m-d H:i:s")."<br />";

// 

$time = mktime(12,35,23,12,7,2007);

echo date("Y-m-d H:i:s", $time)."<br />";

// узнать дату

$array = getdate($time);

print_r($array);

// проверяет существует ли такой день

echo "<br />".checkdate(2,28,2012);

?>