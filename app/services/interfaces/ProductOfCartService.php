<?php


interface ProductOfCartService
{
    public function create(ProductOfCart $ProductOfCart);
    public function read();
    // public function update(ProductOfCart $ProductOfCart);
    public function delete($id);
    public function fetch($id);
}


?>