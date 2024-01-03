<?php

class Order extends controller {
    private $model;
    private $service;

    public function __construct() {
        $this->model = $this->model('Order');
        $this->service = $this->service('Order');
    }
}