<?php

require_once __DIR__ . '/../controllers/ImagesProductController.php';

function setImagesProductRoutes($app)
{
    $app->get('/images_products', 'ImagesProductController:getAll');
    $app->get('/images_products/{id}', 'ImagesProductController:getById');
    $app->post('/images_products', 'ImagesProductController:create');
    $app->put('/images_products/{id}', 'ImagesProductController:update');
    $app->delete('/images_products/{id}', 'ImagesProductController:delete');
}