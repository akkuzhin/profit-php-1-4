<?php

require __DIR__ . '/function.php';

if(!empty($_POST['message'])) {
    $records = readFileGuestBook();
    $records[] = $_POST['message'];
    addRecordGuestBook($records);
}

header('Location: /guestbook/index.php');
die;
