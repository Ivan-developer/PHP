<?php

// Права доступа к файлу
// права доступа не сущ на винде и эпл
// Существуют на Unix ОС
// Хостинги устроены на unix

// что бы права устанавливать надо знать команды на php
// __FILE__ - пусть файла, этого: Z:\home\lesson3\www\index.php
// fileperms(__FILE__) - что бы узнать права доступа к этому файлу 
// Внимание! выкинется рандомное число потому что виндоус и мак не вопринимают эту команду
// chmod(__FILE__, 0777); изменить права. каждый может читать, писать, изменять файл

echo __FILE__;

echo "<br />";
// что бы узнать права доступа к этому файлу

echo fileperms(__FILE__);
chmod(__FILE__, 0777);


?>