<?php

require __DIR__ . '../../vendor/autoload.php';
require __DIR__ . '../../core/Router.php';
require __DIR__ . '../../app/controllers/HomeController.php';
require __DIR__ . '../../app/controllers/ProdutosController.php';


use Core\Router;
use Controllers\HomeController;
use Controllers\ProdutosController;


// Instanciando o roteador
$router = new Router();

// Definindo as rotas
$router->add('GET', '/', [HomeController::class, 'index']);
$router->add('GET', '/catalogo', [ProdutosController::class, 'catalogo']);
$router->add('GET', '/cadastro', [ProdutosController::class, 'cadastro']);


// Recuperando a URL atual
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$requestMethod = $_SERVER['REQUEST_METHOD'];

// Verificando se há uma rota correspondente
$handler = $router->match($requestUri, $requestMethod);

if ($handler) {
  // Chamando o controlador e o método
  list($controller, $method) = $handler;
  (new $controller())->$method();
} else {
  http_response_code(404);
  require __DIR__ . '../../app/views/pages-error-404.php';
}
