<?php

class Paper
{
    private $pdfLink;
    private $id;
    private $imageLink;
    private $shopName;

    public function __construct(string $pdfLink, string $id, string $imageLink, string $shopName, string $dateStart, string $dateEnd)
    {
        $this->pdfLink = $pdfLink;
        $this->id = $id;
        $this->imageLink = $imageLink;
        $this->shopName = $shopName;
        $this->dateStart = $dateStart;
        $this->dateEnd = $dateEnd;
    }

    public function getPdfPath()
    {
        return $this->pdfLink;
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

    public function getDateStart()
    {
        return $this->dateStart;
    }

    public function getDateEnd()
    {
        return $this->dateEnd;
    }
}
