<?php
// services/ProductService.php

/**
 * ProductService contains the business logic for handling product data.
 */
class ProductService
{
    /**
     * Retrieves all products from the database.
     * 
     * @return array List of all products.
     */
    public function getAllProducts()
    {
        // Example database query (replace with actual DB query logic)
        $products = [
            ['id' => 1, 'name' => 'Product 1', 'expiry_dates' => ['2025-04-21', '2025-06-21'], 'stock' => 10],
            ['id' => 2, 'name' => 'Product 2', 'expiry_dates' => ['2025-05-15', '2025-06-10'], 'stock' => 5],
            ['id' => 3, 'name' => 'Product 3', 'expiry_dates' => ['2025-06-01'], 'stock' => 3]
        ];
        
        // In a real-world scenario, you would fetch data from a database here.
        return $products;
    }

    /**
     * Retrieves products that are near expiry based on specific rules.
     * 
     * @return array List of products with expiry criteria.
     */
    public function getExpiringProducts()
    {
        // Fetch all products
        $products = $this->getAllProducts();

        // Filter products based on expiration rules (3 unique expiry dates)
        $expiringProducts = array_filter($products, function ($product) {
            // Check if there are 3 unique expiry dates
            return count(array_unique($product['expiry_dates'])) === 3;
        });

        return $expiringProducts;
    }
}
