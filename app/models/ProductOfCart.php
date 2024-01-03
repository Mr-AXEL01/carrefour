<?php

class ProductOfCart{
    private $idProduct;
    private $idClient;

    public function __construct(){
        
    }

    // get and set id product
    
    public function getIdProduct(){
        return $this->idProduct;
    }
    
    public function setIdProduct($idProduct){
        $this->idProduct = $idProduct;
    }

    // get and set id client
    public function getIdClientt(){
        return $this->idClient;
    }
    
    public function setIdClient($idClient){
        $this->idClient = $idClient;
    }
}



?>