<?php
// routes/api.php

$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

// Remove base path if running in subfolder
$basePath = '/test/store-api-php/public';
$requestUri = str_replace($basePath, '', $requestUri);

// Routing logic
switch (true) {
    case $requestUri === '/api/products' && $method === 'GET':
        $controller = new ProductController();
        $controller->getAllProducts();
        break;

    case $requestUri === '/api/expiring-products' && $method === 'GET':
        $controller = new ProductController();
        $controller->getExpiringProducts();
        break;

    default:
        http_response_code(404);
        echo json_encode(['status' => 'error', 'message' => 'Route not found']);
        break;
}
