<?php
// public/index.php

// Enable error display (for development environment only)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Simple autoload function
spl_autoload_register(function ($class) {
    // Array of paths where classes are located
    $paths = ['../controllers/', '../models/', '../services/', '../helpers/'];
    foreach ($paths as $path) {
        $file = $path . $class . '.php';  // Build the file path
        if (file_exists($file)) {  // Check if the file exists
            require_once $file;  // Include the class file
            return;  // Exit once the file is included
        }
    }
});

// Include the database connection file
require_once '../config/database.php';

// Process the request through the routing file
require_once '../routes/api.php';
