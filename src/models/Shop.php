<?php

class Shop
{
    private $id;
    private $imageLink;
    private $shopName;

    public function __construct(string $id, string $imageLink, string $shopName)
    {
        $this->id = $id;
        $this->imageLink = $imageLink;
        $this->shopName = $shopName;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getImageLink()
    {
        return $this->imageLink;
    }

    public function getShopName()
    {
        return $this->shopName;
    }
}
