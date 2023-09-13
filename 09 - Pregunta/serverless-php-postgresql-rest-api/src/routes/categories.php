<?php

require_once __DIR__ . '/../controllers/CategoriesController.php';

function setCategoriesRoutes($app)
{
    $controller = new CategoriesController();

    $app->get('/categories', function ($request, $response) use ($controller) {
        return $controller->getAll($request, $response);
    });

    $app->get('/categories/{id}', function ($request, $response, $args) use ($controller) {
        return $controller->getById($request, $response, $args);
    });

    $app->post('/categories', function ($request, $response) use ($controller) {
        return $controller->create($request, $response);
    });

    $app->put('/categories/{id}', function ($request, $response, $args) use ($controller) {
        return $controller->update($request, $response, $args);
    });

    $app->delete('/categories/{id}', function ($request, $response, $args) use ($controller) {
        return $controller->delete($request, $response, $args);
    });
}