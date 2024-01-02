<?php 

class Pages extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $data = [
            'title' => 'SharePosts',
            'description' => 'Simple social network built on the Traversy MVC PHP Framework'
        ];
        
        $this->view('pages/index', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Us',
            'description' => 'App to share posts with other users'
        ];
        $this->view('pages/about', $data);
    }

    public function Categories()
    {
        
     
        $this->view('admin/Categories');
    }
    public function Products()
    {
        
     
        $this->view('admin/Products');
    }
    public function Users()
    {
        
     
        $this->view('admin/Users');
    }
}