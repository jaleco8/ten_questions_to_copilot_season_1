<?php

namespace App\Controllers;

use App\Models\Product;
use App\Utils\Response;

class ProductsController
{
    public static function getAll()
    {
        $products = Product::getAll();
        Response::sendJsonResponse($products);
    }

    public static function getById($id)
    {
        $product = Product::getById($id);
        if ($product) {
            Response::sendJsonResponse($product);
        } else {
            Response::sendNotFoundResponse();
        }
    }

    public static function create($data)
    {
        $product = new Product($data);
        $product->save();
        Response::sendJsonResponse($product, 201);
    }

    public static function update($id, $data)
    {
        $product = Product::getById($id);
        if ($product) {
            $product->update($data);
            Response::sendJsonResponse($product);
        } else {
            Response::sendNotFoundResponse();
        }
    }

    public static function delete($id)
    {
        $product = Product::getById($id);
        if ($product) {
            $product->delete();
            Response::sendNoContentResponse();
        } else {
            Response::sendNotFoundResponse();
        }
    }
}