<?php 

class AdminRouter extends Controller
{
    private $db;
     

    public function __construct()
    {
         
    }

    public function Categories()
    {
      
        $this->view('admin/categories');
    }
    public function Products()
    {
        
     
        $this->view('admin/croducts');
    }
    public function Users()
    {
        
        
     
        $this->view('admin/users');
    }
    public function Orders()
    {
        
     
        $this->view('admin/orders');
    }
    public function Bills()
    {
        
     
        $this->view('admin/bills');
    }
}