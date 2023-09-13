<?php

namespace Models;

use PDO;

class Product
{
    private $id;
    private $name;
    private $description;
    private $price;
    private $category_id;
    private $created_at;
    private $updated_at;

    private $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setCategoryId($category_id)
    {
        $this->category_id = $category_id;
    }

    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getCategoryId()
    {
        return $this->category_id;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    public function create()
    {
        $stmt = $this->db->prepare('INSERT INTO products (name, description, price, category_id) VALUES (:name, :description, :price, :category_id)');
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':description', $this->description);
        $stmt->bindParam(':price', $this->price);
        $stmt->bindParam(':category_id', $this->category_id);
        $stmt->execute();
        $this->id = $this->db->lastInsertId();
    }

    public function read()
    {
        $stmt = $this->db->prepare('SELECT * FROM products WHERE id = :id');
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->name = $result['name'];
        $this->description = $result['description'];
        $this->price = $result['price'];
        $this->category_id = $result['category_id'];
        $this->created_at = $result['created_at'];
        $this->updated_at = $result['updated_at'];
    }

    public function update()
    {
        $stmt = $this->db->prepare('UPDATE products SET name = :name, description = :description, price = :price, category_id = :category_id, updated_at = NOW() WHERE id = :id');
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':description', $this->description);
        $stmt->bindParam(':price', $this->price);
        $stmt->bindParam(':category_id', $this->category_id);
        $stmt->execute();
    }

    public function delete()
    {
        $stmt = $this->db->prepare('DELETE FROM products WHERE id = :id');
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();
    }

    public function getAll()
    {
        $stmt = $this->db->prepare('SELECT * FROM products');
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getByCategoryId($category_id)
    {
        $stmt = $this->db->prepare('SELECT * FROM products WHERE category_id = :category_id');
        $stmt->bindParam(':category_id', $category_id);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}