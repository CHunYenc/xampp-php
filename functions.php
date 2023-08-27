<?php
// 使用 Dotenv 套件
require_once realpath(__DIR__ . '/vendor/autoload.php');

// 載入 .env 環境變數
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();