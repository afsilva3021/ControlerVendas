<?php

namespace App\controllers;

class UserController
{
		public function myProfile()
		{
			
			if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['imagem'])) {
				$diretorioUpload = __DIR__.'/assets/perfimg/';
				if (!is_dir($diretorioUpload)) {
					mkdir($diretorioUpload, 0777, true);
				}
			
				$nomeArquivo = basename($_FILES['imagem']['name']);
				$caminhoArquivo = $diretorioUpload . uniqid() . '-' . $nomeArquivo;
				$tipoArquivo = strtolower(pathinfo($caminhoArquivo, PATHINFO_EXTENSION));
			
				// Verificar se o arquivo é uma imagem
				$verificacao = getimagesize($_FILES['imagem']['tmp_name']);
				if ($verificacao !== false) {
					if (in_array($tipoArquivo, ['jpg', 'jpeg', 'png', 'gif'])) {
						if (move_uploaded_file($_FILES['imagem']['tmp_name'], $caminhoArquivo)) {
							echo $caminhoArquivo; // Retorna o caminho da imagem para o JavaScript
						} else {
							echo "Erro ao fazer o upload do arquivo.";
						}
					} else {
						echo "Apenas arquivos JPG, JPEG, PNG e GIF são permitidos.";
					}
				} else {
					echo "O arquivo selecionado não é uma imagem válida.";
				}
			} else {
				echo "Nenhum arquivo foi enviado.";
			}

			require __DIR__ . "../../views/users-profile.php";
		}
}
