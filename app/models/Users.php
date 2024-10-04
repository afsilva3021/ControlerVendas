<?php

namespace Models;

use PDO;

class User
{
  private $pdo;

  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }

  // Função para buscar todos os usuários
  public function getAllUsers()
  {
    $stmt = $this->pdo->query("SELECT * FROM users");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
