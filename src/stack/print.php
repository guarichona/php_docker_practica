<?php
require_once '../class/stack.php'; 
include '../read.php';

$stack = new Stack(readJson());

echo $stack->print();
