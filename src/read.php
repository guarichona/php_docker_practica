<?php
// Definir la ruta del archivo JSON

function readJson()
{
    $filePath = __DIR__ . '/archivo.json';

    // Verificar si el archivo existe
    if (file_exists($filePath)) {
        // Leer el contenido del archivo
        $jsonData = file_get_contents($filePath);
        // Decodificar el JSON a un array asociativo
        $data = json_decode($jsonData, true);
        // Verificar si el JSON fue decodificado correctamente
        if ($data !== null) {
            return $data;
        } else {
            return null;
        }
    } else {
        return null;
    }
}
