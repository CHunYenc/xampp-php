<?php

// load .env file
$dotenv = __DIR__ . '/.env';
$envLines = file($dotenv, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$envData = [];
foreach ($envLines as $line) {
    // 解析每一行，以等号（=）分隔键和值
    list($key, $value) = explode('=', $line, 2);
    $envData[$key] = $value;
    echo $key . ' ' . $value . '<br />';
}