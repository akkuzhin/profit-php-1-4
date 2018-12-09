<?php
require __DIR__ . '/functions.php';

if (!empty($_FILES) && isset($_FILES['myfile'])) {
        if (UPLOAD_ERR_OK == $_FILES['myfile']['error']) {
            if ($_FILES['myfile']['type'] == 'image/jpeg' || $_FILES['myfile']['type'] == 'image/png') {
                moveDownloadedFile();
            } else {
                echo 'Пожалуйства, загрузите картинки только в формате JPEG или PNG!';
            }

        } else  {
            echo 'Файл не загружен!';
        }
}

header('Location: /gallery/index.php');
die;