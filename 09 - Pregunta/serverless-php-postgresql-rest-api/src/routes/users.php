<?php

use Slim\App;
use App\Controllers\UsersController;

return function (App $app) {
    $controller = new UsersController();

    $app->get('/users', [$controller, 'index']);
    $app->get('/users/{id}', [$controller, 'show']);
    $app->post('/users', [$controller, 'create']);
    $app->put('/users/{id}', [$controller, 'update']);
    $app->delete('/users/{id}', [$controller, 'delete']);
};