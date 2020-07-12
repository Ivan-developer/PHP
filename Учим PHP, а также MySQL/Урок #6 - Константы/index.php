<?php

   echo PHP_VERSION; // встроенные константы

   // что бы создать константу define("имя константы", значение)
   define("PI", 3.14);  
   echo "</br>";
   echo PI;

   // определить водили ли такую константу
   echo "</br>";
   echo defined("PI");

?>