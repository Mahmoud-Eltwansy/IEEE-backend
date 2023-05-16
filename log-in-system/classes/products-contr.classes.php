<?php

class ProductContr extends Products {
 
    private $productName;
    private $price;
    private $uname;

    

    public function __construct($productName,$price,$uname)
    {
        $this->productName=$productName;
        $this->price=$price;
        $this->uname=$uname;
    } 
    public function createProduct(){
        $checkProduct=$this->checkProducts($this->productName,$this->uname);
        if($checkProduct == false)
        {
            $this->setProduct($this->productName,$this->price,$this->uname);
            exit();

        }
    }
    public function deletionProduct(){
        $this->deleteProduct($this->productName,$this->uname);
        exit();
    }
    public function updatedProduct(){
        $this->updateProduct($this->productName,$this->price,$this->uname);
        exit();
    }
    public function gettingProduct(){
        $this->getProduct($this->productName,$this->uname);
        exit();
    }

}