<?php 

class Products extends Controller
{
    private $model;
    private $service;

    public function __construct()
    {
        $this->model = $this->model('Product');
        $this->service = $this->services('ProductServiceImp');
    }

    public function read()
    {
        $product= $this->service->read();

        echo json_encode($product);
    }

    public function add()
    {
        $product= new $this->model();
        $product->setidProduct(uniqid(mt_rand(), true));
        $product->setpicture($_POST['picture']);
        $product->setname($_POST['name']);
        $product->setqty($_POST['qty']);
        $product->setprice($_POST['price']);
        $product->setprice($_POST['price']);
        $product->setidClient($_POST['idClient']);




        $this->service->create($product);
    }

    public function edit()
    {
        $product= new $this->model();
        $product->setidCategory($_POST['idCategory']);
        $product->setpicture($_POST['picture']);
        $product->setname($_POST['name']);
        $product->setqty($_POST['qty']);
        $product->setprice($_POST['price']);
        $product->setprice($_POST['price']);
        $product->setidClient($_POST['idClient']);

        $this->service->update($product);
    }

    public function get($id)
    {
        $product= $this->service->fetch($id);

        echo json_encode($product);
    }

    public function remove($id)
    {
        $this->service->delete($id);
    }
}
?>