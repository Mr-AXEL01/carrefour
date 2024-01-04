<?php 

class Admins extends Controller
{
    private $model;
    private $service;

    public function __construct()
    {
        $this->model = $this->model('Admin');
        $this->service = $this->service('AdminServiceImp');
    }

    public function display()
    {
        $admin= $this->service->read();

        echo json_encode($admin);
    }

    public function add()
    {
        $admin= new $this->model();
        $admin->setIdUser(uniqid(mt_rand(), true));
        $admin->setFullNAme($_POST['nom']);
        $admin->setUsername($_POST['username']);
        $admin->setEmail($_POST['email']);
        $admin->setPassword($_POST['password']);
        $admin->setPhone($_POST['phone']);
        $admin->setAdress($_POST['adress']);




        $this->service->create($admin);
    }

    public function edit()
    {
        $admin= new $this->model();
        $admin->setIdUser($_POST['idUser']);
        $admin->setFullNAme($_POST['nom']);
        $admin->setUsername($_POST['username']);
        $admin->setEmail($_POST['email']);
        $admin->setPassword($_POST['password']);
        $admin->setPhone($_POST['phone']);
        $admin->setAdress($_POST['adress']);

        $this->service->update($admin);
    }

    public function get($id)
    {
        $admin= $this->service->fetch($id);

        echo json_encode($admin);
    }

    public function remove($id)
    {
        $this->service->delete($id);
    }
}
?>