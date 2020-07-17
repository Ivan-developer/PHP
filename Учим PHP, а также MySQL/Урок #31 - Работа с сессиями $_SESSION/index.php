<?php
// Работа с сессиями $_SESSION
// куки с использованием сессии
/*
отличия кук от сесии
Куки это переменные в браузер

Куки хранится в браузере

Сессии хранятся на сервере, сессия хранится 15 минут

*/

session_start();

$num = (isset($_SESSION["num"])) ? $_SESSION["num"] : 0;
$num++;
$_SESSION["num"] = $num;
echo "Restart site $num";

// удалит сессию

session_destroy();

?>