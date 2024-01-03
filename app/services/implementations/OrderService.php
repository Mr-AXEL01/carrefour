<?php

class OrderService implements OrderServiceInterface {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }
}