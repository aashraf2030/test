<?php
// models/Product.php

/**
 * Product class represents a product entity.
 */
class Product
{
    public $id;
    public $name;
    public $expiry_dates;
    public $stock;

    /**
     * Product constructor.
     * 
     * @param int $id Product ID
     * @param string $name Product name
     * @param array $expiry_dates Product expiry dates
     * @param int $stock Product stock count
     */
    public function __construct($id, $name, $expiry_dates, $stock)
    {
        $this->id = $id;
        $this->name = $name;
        $this->expiry_dates = $expiry_dates;
        $this->stock = $stock;
    }

    /**
     * Static method to create a product from data (usually fetched from the database).
     * 
     * @param array $data Product data
     * @return Product New Product object
     */
    public static function createFromData($data)
    {
        return new self(
            $data['id'],
            $data['name'],
            $data['expiry_dates'],
            $data['stock']
        );
    }
}
