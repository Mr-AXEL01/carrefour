<?php 

class Admin extends Controller
{
    private $db;
     

    public function __construct()
    {
         
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
    public function Orders()
    {
        
     
        $this->view('admin/Orders');
    }
    public function Bills()
    {
        
     
        $this->view('admin/Bills');
    }
}