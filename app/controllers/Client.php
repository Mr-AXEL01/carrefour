<?php 

class Client extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        
        $this->view('client/home');
    }

    public function product()
    {
        $this->view('client/products');
    }

    public function order()
    {
        $this->view('client/order');
    }
}