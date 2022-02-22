<?php

namespace App\Model;

class ProductModel extends BaseModel
{
    public $table = "products";

    public function createProduct($data)
    {
        $sql = "insert into $this->table(name,type,price,amount,date,description)  values (?,?,?,?,?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data["name"]);
        $stmt->bindParam(2, $data["type"]);
        $stmt->bindParam(3, $data["price"]);
        $stmt->bindParam(4, $data["amount"]);
        $stmt->bindParam(5, $data["date"]);
        $stmt->bindParam(6, $data["description"]);
        $stmt->execute();
    }

    public function updateProduct($data, $id)
    {
        $sql = "update $this->table set name=?,type=?,price=?,amount=?,date=?,description=? where id = ?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data["name"]);
        $stmt->bindParam(2, $data["type"]);
        $stmt->bindParam(3, $data["price"]);
        $stmt->bindParam(4, $data["amount"]);
        $stmt->bindParam(5, $data["date"]);
        $stmt->bindParam(6, $data["description"]);
        $stmt->bindParam(7, $id);
        $stmt->execute();
    }

}