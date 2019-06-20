<?php


class DBBook
{
public $connect;
public function __construct()
{
    $conn = new DBConn();
    $this->connect = $conn->connect();
}
public function add($obj){
    $stmt = $this->connect->prepare('INSERT INTO books(name,author,price,image,quantity) VALUES (?,?,?,?,?)');
    $stmt->bindParam(1,$obj->bookName);
    $stmt->bindParam(2,$obj->bookAuthor);
    $stmt->bindParam(3,$obj->bookPrice);
    $stmt->bindParam(4,$obj->bookImage);
    $stmt->bindParam(5,$obj->bookQuantity);
    $PDOexce = $stmt->execute();
    if($PDOexce){
        echo "Data is inserted";
    }else{
        echo "error";
    }
}
}