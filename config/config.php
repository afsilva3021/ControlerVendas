<?php

use Dotenv\Loader\Loader;

require __DIR__ . '../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '../../');
$dotenv->load();


try {
  $dbHost = $_ENV('BD_HOST');
  $dbPort = $_ENV('DB_PORT');
  $dbName = $_ENV('DB_DATABASE');
  $dbUser = $_ENV('DB_USERNAME');
  $dbPass = $_ENV('DB_PASSWORD');
  $dsn = "mysql:host=$dbHost;port=$dbPort;dbname=$dbName;charset=utf8mb4";
  $pdo = new PDO($dsn, $dbUser, $dbPass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "error com a conexão com banco de dados" . $e->getMessage();
}
