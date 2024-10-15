<?php

namespace App\models;

use PDO;

class Users
{
  private $pdo;

  public function __construct($pdo)
  {
   return $this->pdo = $pdo;
  }

  // Função para buscar todos os usuários
  public function getAllUsers()
  {
    $stmt = $this->pdo->query("SELECT * FROM users");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
