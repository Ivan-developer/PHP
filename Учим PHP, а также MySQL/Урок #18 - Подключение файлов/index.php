<!-- 
    require - подключение файла, если не верный путь то выдаст ошибку
    include - тоже подключение файла, но если в пути ошибка то не выдаст ошибку и пойдет дальше на проверку
    require_once - файл подключиться один раз
    include_once - файл подключиться раз
 -->
<?php
    $title = "Title of doc";
    require "header.php";
    echo "Body of doc";
    require "footer.php";
?>      