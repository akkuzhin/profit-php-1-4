<?php

const IMAGES_DIR = __DIR__ . '/images';

function getFileList ()
{
    return scandir(IMAGES_DIR);
}

function moveDownloadedFile ()
{
    return move_uploaded_file($_FILES['myfile']['tmp_name'], IMAGES_DIR . '/' . $_FILES['myfile']['name']);
}

