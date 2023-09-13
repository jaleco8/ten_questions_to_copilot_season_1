<?php

namespace App\Controllers;

use App\Models\ImageProduct;
use App\Utils\Response;

class ImagesProductController
{
    public static function create($event, $context)
    {
        $data = json_decode($event['body'], true);

        $imageProduct = new ImageProduct();
        $imageProduct->product_id = $data['product_id'];
        $imageProduct->url = $data['url'];

        if ($imageProduct->save()) {
            return Response::success($imageProduct);
        } else {
            return Response::error('Failed to create image product');
        }
    }

    public static function read($event, $context)
    {
        $id = $event['pathParameters']['id'];

        $imageProduct = ImageProduct::find($id);

        if ($imageProduct) {
            return Response::success($imageProduct);
        } else {
            return Response::error('Image product not found');
        }
    }

    public static function update($event, $context)
    {
        $id = $event['pathParameters']['id'];
        $data = json_decode($event['body'], true);

        $imageProduct = ImageProduct::find($id);

        if ($imageProduct) {
            $imageProduct->product_id = $data['product_id'] ?? $imageProduct->product_id;
            $imageProduct->url = $data['url'] ?? $imageProduct->url;

            if ($imageProduct->save()) {
                return Response::success($imageProduct);
            } else {
                return Response::error('Failed to update image product');
            }
        } else {
            return Response::error('Image product not found');
        }
    }

    public static function delete($event, $context)
    {
        $id = $event['pathParameters']['id'];

        $imageProduct = ImageProduct::find($id);

        if ($imageProduct) {
            if ($imageProduct->delete()) {
                return Response::success('Image product deleted');
            } else {
                return Response::error('Failed to delete image product');
            }
        } else {
            return Response::error('Image product not found');
        }
    }
}