<?php 

class Client extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        
        $this->view('client/products');
    }

    public function products()
    {
        $this->view('client/products');
    }
}