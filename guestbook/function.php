<?php

function readFileGuestBook()
{
    return file(__DIR__ . '/db.txt', FILE_IGNORE_NEW_LINES);
}

function addRecordGuestBook($records)
{
    return file_put_contents(__DIR__ . '/db.txt', implode("\n", $records));
}
