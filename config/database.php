<?php
// config/database.php

/**
 * Database connection configuration.
 */
class Database
{
    private static $connection = null;

    /**
     * Get the database connection.
     * 
     * @return PDO Database connection object.
     */
    public static function getConnection()
    {
        if (self::$connection === null) {
            try {
                // Connection parameters (replace with actual details)
                $host = 'localhost';
                $db = 'store_db';
                $user = 'root';
                $password = '';

                // Create PDO connection
                self::$connection = new PDO("mysql:host=$host;dbname=$db", $user, $password);
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                // Handle connection error
                die("Database connection failed: " . $e->getMessage());
            }
        }
        return self::$connection;
    }
}
