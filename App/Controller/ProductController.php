<?php
namespace App\Controller;
use App\Model\ProductModel;

class ProductController
{
    public $product;

    public function __construct()
    {
        $this->product = new ProductModel();
    }

    public function getAllProduct()
    {
      $products =  $this->product->getAll();
        include "App/View/product/list.php";
    }

    public function showFormCreate()
    {
        include "App/View/product/create.php";
    }

    public function createProduct($request)
    {
        $this->product->createProduct($request);
        header("location:index.php?page=product-list");
    }

    public function detailProduct()
    {
       $products = $this->product->getById($_GET["id"]);
        include "App/View/product/detail.php";
    }

    public function deleteProduct($id)
    {
        $this->product->deletebyId($id);
        header("location:index.php?page=product-list");
    }

    public function editProduct($request,$id)
    {
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            $this->product->getById($_GET["id"]);
            include "App/View/product/edit.php";
        }
        else{
            $this->product->updateProduct($request,$id);
            header("location:index.php?page=product-list");
        }
    }
}