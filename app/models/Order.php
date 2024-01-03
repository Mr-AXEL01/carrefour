<?php

class Order {
    private $idOrder;
    private $idClient;

    public function __construct($idOrder, $idClient) {
        $this->idOrder  = $idOrder;
        $this->idClient = $idClient;
    }

    #getter
    public function getIdOrder() {
        return $this->idOrder;
    }
    public function getIdClient() {
        return $this->idClient;
    }

    #setter
    public function setIdOrder($idOrder) {
        $this->idOrder = $idOrder;
    }
    public function setIdClient($idClient) {
        $this->idClient = $idClient;
        //
    }
}
