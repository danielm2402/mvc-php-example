<?php

class Product
{
    private $products;
    private $db;

    public function __construct()
    {
        $this->db = Connect::connectto();
    }


    public function get_products()
    {
        $sql = "SELECT * FROM product";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->products[] = $row;
        }
        return $this->products;
    }
}
