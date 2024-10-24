<?php

namespace App\models;

class ProdutoModel
{
  private $nome;
  private $codigo;
  private $descricao;
  private $dtProduto;
  private $qtd;
  private $valor;

  public function setNome($nome)
  {
    $this->nome = $nome;
  }

  public function setCodigo($codigo)
  {
    $this->codigo = $codigo;
  }

  public function setDescricao($descricao)
  {
    $this->descricao = $descricao;
  }

  public function setDtProduto($dtProduto)
  {
    $this->dtProduto = $dtProduto;
  }

  public function setQtd($qtd)
  {
    $this->qtd = $qtd;
  }

  public function setValor($valor)
  {
    $this->valor = $valor;
  }


  public function getNome()
  {
    return $this->nome;
  }

  public function getCodigo()
  {
    return $this->codigo;
  }

  public function getDescricao()
  {
    return $this->descricao;
  }

  public function getDtProduto()
  {
    return $this->dtProduto;
  }

  public function getQtd()
  {
    return $this->qtd;
  }

  public function getValor()
  {
    return $this->valor;
  }
}
