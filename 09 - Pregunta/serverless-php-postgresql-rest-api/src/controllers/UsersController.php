<?php

namespace App\Controllers;

use App\Models\User;
use App\Utils\Response;

class UsersController
{
    public static function getAll()
    {
        $users = User::getAll();
        return Response::json($users);
    }

    public static function getById($id)
    {
        $user = User::getById($id);
        if (!$user) {
            return Response::notFound();
        }
        return Response::json($user);
    }

    public static function create($data)
    {
        $user = new User($data);
        if (!$user->isValid()) {
            return Response::badRequest();
        }
        $user->save();
        return Response::json($user, 201);
    }

    public static function update($id, $data)
    {
        $user = User::getById($id);
        if (!$user) {
            return Response::notFound();
        }
        $user->fill($data);
        if (!$user->isValid()) {
            return Response::badRequest();
        }
        $user->save();
        return Response::json($user);
    }

    public static function delete($id)
    {
        $user = User::getById($id);
        if (!$user) {
            return Response::notFound();
        }
        $user->delete();
        return Response::noContent();
    }
}