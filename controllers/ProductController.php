<?php
// controllers/ProductController.php

/**
 * ProductController handles the HTTP requests related to products.
 */
class ProductController
{
    /**
     * Fetches and returns all product data.
     */
    public function getAllProducts()
    {
        // Fetch data from ProductService
        $productService = new ProductService();
        $products = $productService->getAllProducts();

        // Return products in JSON format
        echo json_encode([
            'status' => 'success',
            'data' => $products
        ]);
    }

    /**
     * Fetches products with specific expiration criteria.
     */
    public function getExpiringProducts()
    {
        // Fetch expiring products from ProductService
        $productService = new ProductService();
        $expiringProducts = $productService->getExpiringProducts();

        // Return products in JSON format
        echo json_encode([
            'status' => 'success',
            'data' => $expiringProducts
        ]);
    }
}
