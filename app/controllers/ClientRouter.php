<?php 

class ClientRouter extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        
        $this->view('client/home');
    }

    public function products()
    {
        $this->view('client/products');
    }

    public function order()
    {
        $this->view('client/order');
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

    public function updatePassword(){
        $this->view('client/updatePassword');
    }
    public function invoice()
    {
        $this->view('client/invoice');
    }
}