<?php

namespace Core;

class Routers
{
	private $routes = [];

	public function add($method, $path, $handler)
	{
		$this->routes[] = [
			"method" => $method,
			"path" => $path,
			"handler" => $handler
		];
	}

	public function match($requestUri, $requestMethod)
	{
		foreach ($this->routes as $route) {
			if ($route["path"] === $requestUri && $route["method"] === $requestMethod) {
				return $route["handler"];
			}
		}
		return null;
	}
}