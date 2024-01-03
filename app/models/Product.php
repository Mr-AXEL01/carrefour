<?php

class Products
{

    private $idProduct;
    private $picture;
    private $name;
    private $qty;
    private $price;
    private $idClient;

    public function __construct()
    {

    }

    //get and set idProduct
    public function getidProduct()
    {
        return $this->idProduct;
    }
    public function setidProduct($idProduct)
    {
        $this->idProduct = $idProduct;
    }
    //get and set picture

    public function getpicture()
    {
        return $this->picture;
    }
    public function setpicture($picture)
    {
        $this->name = $picture;
    }
    //get and set name

    public function getname()
    {
        return $this->name;
    }
    public function setname($name)
    {
        $this->name = $name;
    }
    //get and set qty

    public function getqty()
    {
        return $this->qty;
    }
    public function setqty($qty)
    {
        $this->qty = $qty;
    }
    //get and set price
    public function getprice()
    {
        return $this->price;
    }
    public function setprice($price)
    {
        $this->price = $price;
    }
    //get and set idClient
    public function getidClient()
    {
        return $this->idClient;
    }
    public function setidClient($idClient)
    {
        $this->idClient = $idClient;
    }
}

















