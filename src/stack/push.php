<?php

require_once '../class/stack.php';
include '../read.php';
include '../write.php';

// intancio mi pila con los valores del archivo json
// Cuando envío readJson() se lo estoy eviando al constructor de la clase Stack,
// readJSON es cómo hacer un SELECT (SQL) a la base de datos 
$stack = new Stack(readJson());

// // var_dump($_POST);

$stack->push($_POST['value']);

echo $stack->print();

writeJson($stack->toArray());






