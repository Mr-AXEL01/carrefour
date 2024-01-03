<?php

class Bill {
    private $idBill;
    private $date;
    private $lineItems;
    private $totalAmount;
    private $refferences;
    private $idClient;

    public function __construct () {

    }

    #getter method

    public function getIdBill () {
        return $this->idBill;
    }
    public function getDate () {
        return $this->date;
    }

    public function getLineItems () {
        return $this->lineItems;
    }

    public function getTotalAmount () {
        return $this->totalAmount;
    }

    public function getRefferences () {
        return $this->refferences;
    }

    public function getIdClient () {
        return $this->idClient;
    }

}