<?php

class OrderService implements OrderServiceInterface {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function create (Order $order) {
        $idOrder = $order->getIdOrder();
        $idClient = $order->getIdClient();

        $this->db->query("INSERT INTO order VALUES (:idOrder, :idClient)");
        $this->db->bind(":idOrder", $idOrder);
        $this->db->bind(":idClient", $idClient);

        return $this->db->execute();
    }
}