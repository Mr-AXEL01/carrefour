<?php

class Order {
    private $db;
    private $idOrder;
    private $idClient;

    public function __construct() {
        $this->db = Database::getInstance();   
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
    }
}
