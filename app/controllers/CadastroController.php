<?php

namespace App\controllers;

class CadastroController
{
  public function produtos()
  {
    $Lista = array(
      [
        "Nome" => 'Produto A',
        "Codigo" => '001',
        "Descricao" => 'Descrição do Produto A',
        "Data" => '2023-01-15',
        "Qtd" => '100',
        "Valor" => '10,00'
      ],
      [
        "Nome" => 'Produto B',
        "Codigo" => '002',
        "Descricao" => 'Descrição do Produto B',
        "Data" => '2023-02-20',
        "Qtd" => '150',
        "Valor" => '20,00'
      ],
      [
        "Nome" => 'Produto C',
        "Codigo" => '003',
        "Descricao" => 'Descrição do Produto C',
        "Data" => '2023-03-10',
        "Qtd" => '200',
        "Valor" => '15,50'
      ],
      [
        "Nome" => 'Produto D',
        "Codigo" => '004',
        "Descricao" => 'Descrição do Produto D',
        "Data" => '2023-04-05',
        "Qtd" => '50',
        "Valor" => '30,00'
      ],
      [
        "Nome" => 'Produto E',
        "Codigo" => '005',
        "Descricao" => 'Descrição do Produto E',
        "Data" => '2023-05-25',
        "Qtd" => '300',
        "Valor" => '5,75'
      ],
      [
        "Nome" => 'Produto F',
        "Codigo" => '006',
        "Descricao" => 'Descrição do Produto F',
        "Data" => '2023-06-30',
        "Qtd" => '120',
        "Valor" => '18,00'
      ],
      [
        "Nome" => 'Produto G',
        "Codigo" => '007',
        "Descricao" => 'Descrição do Produto G',
        "Data" => '2023-07-15',
        "Qtd" => '80',
        "Valor" => '22,50'
      ],
      [
        "Nome" => 'Produto H',
        "Codigo" => '008',
        "Descricao" => 'Descrição do Produto H',
        "Data" => '2023-08-10',
        "Qtd" => '60',
        "Valor" => '12,00'
      ],
      [
        "Nome" => 'Produto I',
        "Codigo" => '009',
        "Descricao" => 'Descrição do Produto I',
        "Data" => '2023-09-05',
        "Qtd" => '40',
        "Valor" => '25,00'
      ],
      [
        "Nome" => 'Produto J',
        "Codigo" => '010',
        "Descricao" => 'Descrição do Produto J',
        "Data" => '2023-10-01',
        "Qtd" => '90',
        "Valor" => '14,30'
      ],
      [
        "Nome" => 'Produto K',
        "Codigo" => '011',
        "Descricao" => 'Descrição do Produto K',
        "Data" => '2023-11-10',
        "Qtd" => '70',
        "Valor" => '17,60'
      ],
      [
        "Nome" => 'Produto L',
        "Codigo" => '012',
        "Descricao" => 'Descrição do Produto L',
        "Data" => '2023-12-20',
        "Qtd" => '110',
        "Valor" => '8,90'
      ],
      [
        "Nome" => 'Produto M',
        "Codigo" => '013',
        "Descricao" => 'Descrição do Produto M',
        "Data" => '2024-01-25',
        "Qtd" => '130',
        "Valor" => '19,80'
      ],
      [
        "Nome" => 'Produto N',
        "Codigo" => '014',
        "Descricao" => 'Descrição do Produto N',
        "Data" => '2024-02-15',
        "Qtd" => '250',
        "Valor" => '6,50'
      ],
      [
        "Nome" => 'Produto O',
        "Codigo" => '015',
        "Descricao" => 'Descrição do Produto O',
        "Data" => '2024-03-05',
        "Qtd" => '40',
        "Valor" => '27,40'
      ],
      [
        "Nome" => 'Produto P',
        "Codigo" => '016',
        "Descricao" => 'Descrição do Produto P',
        "Data" => '2024-04-12',
        "Qtd" => '180',
        "Valor" => '11,20'
      ],
      [
        "Nome" => 'Produto Q',
        "Codigo" => '017',
        "Descricao" => 'Descrição do Produto Q',
        "Data" => '2024-05-30',
        "Qtd" => '150',
        "Valor" => '23,10'
      ],
      [
        "Nome" => 'Produto R',
        "Codigo" => '018',
        "Descricao" => 'Descrição do Produto R',
        "Data" => '2024-06-25',
        "Qtd" => '90',
        "Valor" => '16,50'
      ],
      [
        "Nome" => 'Produto S',
        "Codigo" => '019',
        "Descricao" => 'Descrição do Produto S',
        "Data" => '2024-07-15',
        "Qtd" => '60',
        "Valor" => '9,40'
      ],
      [
        "Nome" => 'Produto T',
        "Codigo" => '020',
        "Descricao" => 'Descrição do Produto T',
        "Data" => '2024-08-05',
        "Qtd" => '200',
        "Valor" => '12,80'
      ]
    );


    require __DIR__ . '../../views/cadastroProdutos.php';
  }

  public function cliente()
  {
    require __DIR__ . '../../views/cadastroCliente.php';
  }
}
