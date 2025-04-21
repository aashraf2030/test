<?php
// routes/api.php

// Get the current URL path
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

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
