<?php

declare(strict_types=1);

//$_SERVER['REQUEST_URI'] = '/SC/update';
//$_SERVER['REQUEST_METHOD'] = 'POST';
//$_POST = [
//    'id' => 1,
//    'title' => 'title',
//];
//
//require_once __DIR__ . '/index.php';
//
//echo PHP_EOL;

$_SERVER['REQUEST_URI'] = '/SC/delete';
$_SERVER['REQUEST_METHOD'] = 'POST';
$_POST = [
    'id' => 1,
    'title' => 'title',
];

require_once __DIR__ . '/index.php';

echo PHP_EOL;
