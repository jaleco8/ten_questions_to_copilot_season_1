<?php

require_once __DIR__ . '/../controllers/ProductsController.php';

function setProductsRoutes($app)
{
    $controller = new ProductsController();

    $app->get('/products', function ($request, $response, $args) use ($controller) {
        return $controller->getAll($request, $response, $args);
    });

    $app->get('/products/{id}', function ($request, $response, $args) use ($controller) {
        return $controller->getById($request, $response, $args);
    });

    $app->post('/products', function ($request, $response, $args) use ($controller) {
        return $controller->create($request, $response, $args);
    });

    $app->put('/products/{id}', function ($request, $response, $args) use ($controller) {
        return $controller->update($request, $response, $args);
    });

    $app->delete('/products/{id}', function ($request, $response, $args) use ($controller) {
        return $controller->delete($request, $response, $args);
    });
}