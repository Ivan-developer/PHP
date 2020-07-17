<?php

// phpinfo() и $_SERVER
// функция и глобальный массив (используется для статистики), откуда, с какого компа
// phpinfo(); - выводит информацию про php, можно узнать всю инфу про php


// узнать ip пользователя
    echo $_SERVER["SERVER_ADDR"];
// узнать юзер агента
echo $_SERVER["HTTP_USER_AGENT"];
//
echo $_ENV["VBOX_MSI_INSTALL_PATH"];
// узнать от куда перешел
    echo $_SERVER["REQUEST_URI"];
phpinfo();


?>