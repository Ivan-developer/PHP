<?php

// Отправка почты на email
// Когда зальем сайт на хостинг, хостинг отправляет собщения на почту
// На лок сервере денвер такого нет, создается папочка и там все хранится
// mail('кому','тема','сообщение')
$message = "This is the most little message in the world";
$to = "ivan@gmail.com";
$from = "bob@gmail.com";
$subject = "The title of sms";
$subject = "=?utf-8?B?".base64_encode($subject)."?=";// для mail.ru потому что тупит
$headers = "From: $from\r\nReply-to: $from\r\nContent-type: text\plain; charset=utf-8\r\n";
mail("$to","$subject","$message","$headers");
?>