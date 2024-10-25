<?php

namespace App\config;

use Dotenv\Dotenv; // Corrigido a instrução use
use PDO;
use PDOException;

class Config
{
	public function conectar() // Corrigido o nome do método
	{
		$dotenv = Dotenv::createImmutable(__DIR__ . '/../../'); // Corrigido o caminho para carregar o .env
		$dotenv->load();

		try {
			// Mudado $_ENV para getenv para acessar variáveis de ambiente
			$dbHost = getenv('DB_HOST');
			$dbPort = getenv('DB_PORT');
			$dbName = getenv('DB_DATABASE');
			$dbUser = getenv('DB_USERNAME');
			$dbPass = getenv('DB_PASSWORD');

			$dsn = "mysql:host=$dbHost;port=$dbPort;dbname=$dbName;charset=utf8mb4";
			$pdo = new PDO($dsn, $dbUser, $dbPass);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			return $pdo; // Retornando a instância do PDO
		} catch (PDOException $e) {
			echo "Erro na conexão com o banco de dados: " . $e->getMessage();
			return null; // Retorna nulo em caso de falha
		}
	}
}
