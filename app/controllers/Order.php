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

    public function add () {
        $order = new $this->model();
        $order->setIdOrder(uniqid(mt_rand(), true));
        $order->setIdClient($_POST['idClient']);

        $this->service->create($order);
    }

    public function edit () {
        $order = new $this->model();
        $order->setIdOrder($_POST['idOrder']);
        $order->setIdClient($_POST['idClient']);

        $this->service->update($order);
    }

    public function get($id) {
        $order = $this->service->fetch($id);
        echo json_encode($order);
    }

    
}