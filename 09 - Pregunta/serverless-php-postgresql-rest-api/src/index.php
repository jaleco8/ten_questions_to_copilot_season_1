<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

// Load environment variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

// Create App
$app = new App([
    'settings' => [
        'displayErrorDetails' => true,
    ],
]);

// Set up database connection
$container = $app->getContainer();
$container['db'] = function ($c) {
    $dbConfig = require __DIR__ . '/config/database.php';
    $pdo = new PDO(
        "pgsql:host={$dbConfig['host']};port={$dbConfig['port']};dbname={$dbConfig['database']}",
        $dbConfig['username'],
        $dbConfig['password']
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
};

// Set up routes
require __DIR__ . '/routes/categories.php';
require __DIR__ . '/routes/images_product.php';
require __DIR__ . '/routes/products.php';
require __DIR__ . '/routes/users.php';

// Run App
$app->run();

// This file is intentionally left blank