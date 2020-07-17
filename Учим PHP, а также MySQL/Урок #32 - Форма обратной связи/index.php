<?php
// print_r($_POST) - функция для разрабочиков
// isset — Определяет, была ли установлена переменная значением
// htmlspecialchars() - что бы не поломали прогу
/*
 <?=$error_subject?> - вставить переменную
*/

session_start();
if (isset($_POST["send"])) {
    $from = htmlspecialchars($_POST["from"]);
    $to = htmlspecialchars($_POST["to"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);
    $_SESSION["from"] = $from;
    $_SESSION["to"] = $to;
    $_SESSION["subject"] = $subject;
    $_SESSION["message"] = $message;
    $error_from = "";
    $error_to = "";
    $error_subject = "";
    $error_message = "";
    $error = false;
    if($from == "" || !preg_match("/@/", $from)){
        $error_from = "Enter email";
        $eror = true;
    }
    if($to == "" || !preg_match("/@/", $to)){
        $error_to = "Enter email";
        $eror = true;
    }
    if( strlen($subject) == 0 ){
        $error_subject = "Enter subject";
        $eror = true;
    }
    if( strlen($message) == 0 ){
        $error_message = "Enter text";
        $eror = true;
    }
    if(!$error){
        $subject = "=?utf-8?B?".base64_encode($subject)."?=";
        $headers = "From: $from\r\nReply-to: $from\r\nContent-type: text\plain; charset=utf-8\r\n";
        mail($to, $subject, $messagem, $headers);
        header("Location: success.php?send=1");
        exit;
    }
}
// что бы сохранить данные которые пользователь вел , нужно использовать сессию или куки

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Form Feedback</h2>
    <form action="" method="POST" name="feedback">
        <label>From</label> <br>
        <input type="text" name="from" value="<?php echo $_SESSION["from"] ?>"> <br>
        <span style="color: red;"><?=$error_from?></span>
        <label>To</label> <br>
        <input type="text" name="to" value="<?php echo $_SESSION["to"] ?>"> <br>
        <span style="color: red;"><?=$error_to?></span>
        <label>Subject</label> <br>
        <input type="text" name="subject" value="<?php echo $_SESSION["subject"] ?>"> <br>
        <span style="color: red;"><?=$error_subject?></span>
        <label>Message</label> <br>
        <textarea name="message" id="" cols="30" rows="10"><?php echo $_SESSION["message"] ?></textarea> <br>
        <span style="color: red;"><?=$error_message?></span>
        <input type="submit" name="send" value="Done">
    </form>
</body>

</html>