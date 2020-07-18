<?php

   // Логические операции возвращают true or false
   $x = 12;
   $y = 34;
   $z = 4.25;

   // == рано
   // != не равно
   // < , >
   // <= , >=
   // ! - нет - перевернули значение !($x == $y);
   // || - или - ещет true, если все false то выводит true
   // && - и - ещет false, если все true то выводит true
   // очень редкая, исключающая или ^ используется очень редко
   // ^ если оба true, оно вернеть false, если оба false то тоже вернет false
   // ^ она вернет true только когда одно из них true и false, тоесть когда они разные

   $bool_1 = $x != $z;
   echo "$bool_1";
   echo "</br>";
   $bool_2 = $x < $y;
   echo "$bool_2";
   echo "</br>";
   $bool_3 = !($x == $y);
   echo "</br>".$bool_3;
   $bool_4 = $x == $y || $z < $y;
   echo "</br>".$bool_4;
   $bool_5 = $z == $y && $x < $y;
   echo "</br> AND".$bool_5;
   $bool_6 = $z != $x ^ $y < $z;
   echo "</br> AND".$bool_5;
   
   $bool = !($x != $y && $z < $x) || $x != $y;
   echo "</br> BIG ONE".$bool;

?>