<?php

interface Order {
    public function addOrder(Order $order);
    public function removeOrder($id);
    public function getOrders();
}