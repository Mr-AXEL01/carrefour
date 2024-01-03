<?php
class ProductOfCartServiceImp implements ProductOfCartService
{

    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function create(ProductOfCart $ProductOfCart)
    {
        $idProduct = $ProductOfCart->getIdProduct();
        $idCart = $ProductOfCart->getIdCart();
        


        $this->db->query('INSERT INTO productofcart VALUES (:idProduct, :idCart)');
        $this->db->bind(':idProduct', $idProduct);
        $this->db->bind(':idCart', $idCart);
      

        
        return $this->db->execute();
    }

    public function read()
    {
        $sql = "SELECT * FROM productofline";

        $this->db->query($sql);
        return $this->db->resultSet();
    }

    // public function update(ProductOfCart $ProductOfCart)
    // {
    //     $idProduct = $ProductOfCart->getIdProduct();
    //     $idCart = $ProductOfCart->getIdCart();

    //     $this->db->query('UPDATE productofcart SET  idProduct = :idProduct, idCart = :idCart  WHERE idCart = :idCart');
    //     $this->db->bind(':idProduct', $idProduct);
    //     $this->db->bind(':idCart', $idCart);
        
    //     return $this->db->execute();
    // }
    public function delete($id)
    {
        $this->db->query('DELETE FROM productofcart WHERE idCart = :idCart');
        $this->db->bind(':idCart', $id);
        
        return $this->db->execute();
    }

    public function fetch($id)
    {
        $this->db->query('SELECT * FROM productofcart WHERE idCart = :idCart');
        $this->db->bind(':idCart', $id);
        return $this->db->single();
    }
}