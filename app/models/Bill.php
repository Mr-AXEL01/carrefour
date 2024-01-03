<?php

class Bill {
    private $idBill;
    private $date;
    private $lineItems;
    private $totalAmount;
    private $efferences;
    private $idClient;

    public function __construct () {

    }

    #getter method

    public function getIdBill () {
        return $this->idBill;
    }

}