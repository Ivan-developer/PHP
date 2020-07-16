<!-- print_r(); Функция для разработчиков 

 - не видно то что отправил в адрессной страке - print_r($_POST); Array ( [name] => Ivan [email] => ivansoftwareengineer@gmail.com [message] => Hello [done] => Done )
 - видно то что отправил в адресной страке - print_r($_GET); Array ( [name] => Ivan [email] => ivansoftwareengineer@gmail.com [message] => HELLO [done] => Done )
// Если форма пройдет успешно то пользователя отправит обратно
    header("Location:index.php");
-->
<?php

// print_r($_GET);
// вывели то что вели в input, name="name" 
// echo $_POST["name"];
if ($_POST["name"] == "")
    echo "Write your name plz! <a href='/'>Back</a>";
else
    header("Location:index.php");

// if (!($_POST["name"] == ""))
//     header("Location:index.php");
// else
//     echo "Write your name plz! <a href='/'>Back</a>";

?>