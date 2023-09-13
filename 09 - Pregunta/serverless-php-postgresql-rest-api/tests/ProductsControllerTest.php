<?php

use PHPUnit\Framework\TestCase;

class ProductsControllerTest extends TestCase
{
    private $client;

    public function setUp(): void
    {
        $this->client = new GuzzleHttp\Client([
            'base_uri' => 'http://localhost:3000',
            'http_errors' => false
        ]);
    }

    public function testGetAllProducts()
    {
        $response = $this->client->get('/products');
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertJson($response->getBody());
    }

    public function testGetProductById()
    {
        $response = $this->client->get('/products/1');
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertJson($response->getBody());
    }

    public function testCreateProduct()
    {
        $data = [
            'name' => 'Test Product',
            'description' => 'This is a test product',
            'price' => 9.99,
            'category_id' => 1
        ];

        $response = $this->client->post('/products', [
            'json' => $data
        ]);

        $this->assertEquals(201, $response->getStatusCode());
        $this->assertJson($response->getBody());

        $product = json_decode($response->getBody(), true);
        $this->assertArrayHasKey('id', $product);
        $this->assertEquals($data['name'], $product['name']);
        $this->assertEquals($data['description'], $product['description']);
        $this->assertEquals($data['price'], $product['price']);
        $this->assertEquals($data['category_id'], $product['category_id']);
    }

    public function testUpdateProduct()
    {
        $data = [
            'name' => 'Updated Product',
            'description' => 'This is an updated product',
            'price' => 19.99,
            'category_id' => 2
        ];

        $response = $this->client->put('/products/1', [
            'json' => $data
        ]);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertJson($response->getBody());

        $product = json_decode($response->getBody(), true);
        $this->assertEquals($data['name'], $product['name']);
        $this->assertEquals($data['description'], $product['description']);
        $this->assertEquals($data['price'], $product['price']);
        $this->assertEquals($data['category_id'], $product['category_id']);
    }

    public function testDeleteProduct()
    {
        $response = $this->client->delete('/products/1');
        $this->assertEquals(204, $response->getStatusCode());

        $response = $this->client->get('/products/1');
        $this->assertEquals(404, $response->getStatusCode());
    }
}