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
    public function login()
    {
        $this->view('client/login');
    }
    public function signup()
    {
        $this->view('client/signup');
    }
    public function password()
    {
        $this->view('client/password');
    }
}