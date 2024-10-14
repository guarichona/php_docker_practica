<?php

function writeJson($data)
{
    $filePath = __DIR__ . '/archivo.json';

    $jsonData = json_encode($data, JSON_PRETTY_PRINT);
    if (file_put_contents($filePath, $jsonData)) {
        return true;
    } else {
        return false;
    }
}
