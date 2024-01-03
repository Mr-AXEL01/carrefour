<?php 

class Categories extends Controller
{
    private $model;
    private $service;

    public function __construct()
    {
        $this->model = $this->model('Category');
        $this->service = $this->services('CategoryServiceImp');
    }

    public function read()
    {
        $categories= $this->service->read();

        echo json_encode($categories);
    }

    public function add()
    {
        $category= new $this->model();
        $category->setidCategory(uniqid(mt_rand(), true));
        $category->setname($_POST['name']);
        $category->setdescription($_POST['description']);
        $category->setpicture($_POST['picture']);


        $this->service->create($category);
    }

    public function edit()
    {
        $category= new $this->model();
        $category->setidCategory($_POST['idCategory']);
        $category->setname($_POST['name']);
        $category->setdescription($_POST['description']);
        $category->setpicture($_POST['picture']);

        $this->service->update($category);
    }

    public function get($id)
    {
        $category= $this->service->fetch($id);

        echo json_encode($category);
    }

    public function remove($id)
    {
        $this->service->delete($id);
    }
}
?>