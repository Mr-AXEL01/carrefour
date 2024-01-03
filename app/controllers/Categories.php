<?php
class Categories extends Controller
{
    public function __construct()
    {
        $this->model = $this->model('Category');
        $this->service = $this->services('CategoryServiceImp');
    }

    public function display()
    {
        $categories= $this->service->read();

        echo json_encode($categories);
    }

    public function add()
    {
        $category= new $this->model();
        $category->id = uniqid(mt_rand(), true);
        $category->name = $_POST['name'];
        $category->address = $_POST['address'];

        $this->service->create($category);
    }

    public function edit()
    {
        $category= new $this->model();
        $category->id = $_POST['id'];
        $category->name = $_POST['name'];
        $category->address = $_POST['address'];

        $this->service->update($category);
    }

    public function get($id)
    {
        $category= $this->service->fetch($id);

        echo json_encode($category);
    }

    public function remove($id)
    {
        $category= $this->service->delete($id);
    }
}
?>