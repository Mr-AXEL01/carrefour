<?php

class Order extends controller {
    private $model;
    private $service;

    public function __construct() {
        $this->model = $this->model('Order');
        $this->service = $this->service('Order');
    }

    public function display () {
        $orders = $this->service->read();
        echo json_encode($orders);
    }

    
}