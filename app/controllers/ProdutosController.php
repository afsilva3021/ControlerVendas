<?php

namespace App\controllers;

class ProdutosController
{
  public function catalogo()
  {
    require __DIR__ . "../../views/catalogo.php";
  }

  public function cadastro()
  {
    require __DIR__ . "../../views/cadastroProdutos.php";
  }
}
