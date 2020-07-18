<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="check.php" name="test" method="POST">
        <label for="">Name:</label>
        <input type="text" name="name" placeholder="Name">
        <br />
        <label for="">Email:</label>
        <input type="text" name="email" placeholder="Email">
        <br />
        <label for="">Message</label>
        <br />
        <textarea name="message" id="" cols="30" rows="10"></textarea>
        <br />
        <input type="submit" name="done" value="Done">
    </form>
</body>
</html>