<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Чувствительно к 'нельзя вывести переменную'/"можно вывести переменную" и ; -->
    <!-- оператор echo -->
    <?php
    $foo = "bmw";
    $foo2 = "world";
    echo "<h1>Hello $foo </h1>";
    echo '<h2>My $foo2 </h2>';
    ?>
</body>
</html>

<!-- Можно без html вывести -->

<?php
    $foo = "bmw";
    $foo2 = "world";
    echo "<h1>Hello $foo </h1>";
    echo "<h2>My $foo2 </h2>";
?>