<?php

namespace App\Controllers;

use App\Models\Category;
use App\Utils\Response;

class CategoriesController
{
    public function index()
    {
        $categories = Category::all();

        return Response::json($categories);
    }

    public function show($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return Response::json(['error' => 'Category not found'], 404);
        }

        return Response::json($category);
    }

    public function create($data)
    {
        $category = new Category($data);

        if (!$category->save()) {
            return Response::json(['error' => 'Error creating category'], 500);
        }

        return Response::json($category, 201);
    }

    public function update($id, $data)
    {
        $category = Category::find($id);

        if (!$category) {
            return Response::json(['error' => 'Category not found'], 404);
        }

        $category->fill($data);

        if (!$category->save()) {
            return Response::json(['error' => 'Error updating category'], 500);
        }

        return Response::json($category);
    }

    public function delete($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return Response::json(['error' => 'Category not found'], 404);
        }

        if (!$category->delete()) {
            return Response::json(['error' => 'Error deleting category'], 500);
        }

        return Response::json(['message' => 'Category deleted']);
    }
}