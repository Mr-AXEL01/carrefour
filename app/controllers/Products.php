<?php 

class Products extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        
        $this->view('client/product');
    }

    public function about()
    {
        $data = [
            'title' => 'About Us',
            'description' => 'App to share posts with other users'
        ];
        $this->view('pages/about', $data);
    }
}