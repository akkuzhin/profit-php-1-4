<?php require __DIR__ . '/function.php';
$records = readFileGuestBook();
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Гостевая книга</title>
</head>
<body>
<h1>Гостевая книга!</h1>
<?php foreach($records as $record): ?>
    <p><?php echo $record; ?></p>
    <hr>
<?php endforeach; ?>
<form action="/guestbook/scriptfiles.php" method="post">
    <input type="text" name="message">
    <input type="submit" value="Отправить!">
</form>
</body>
</html>