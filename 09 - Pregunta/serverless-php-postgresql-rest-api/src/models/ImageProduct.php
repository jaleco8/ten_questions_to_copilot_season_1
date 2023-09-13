<?php

namespace Models;

class ImageProduct
{
    private $id;
    private $product_id;
    private $url;

    public function __construct($id, $product_id, $url)
    {
        $this->id = $id;
        $this->product_id = $product_id;
        $this->url = $url;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getProductId()
    {
        return $this->product_id;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setProductId($product_id)
    {
        $this->product_id = $product_id;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function toArray()
    {
        return [
            'id' => $this->id,
            'product_id' => $this->product_id,
            'url' => $this->url,
        ];
    }
}