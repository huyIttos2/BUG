<?php


class App
{
public function create(){
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    include "view/add.php";
}else{
    $name = $_POST['name'];
    $author = $_POST['author'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    $quantity = $_POST['quantity'];
    $book = new Book($name,$author,$price,$image,$quantity);
    $bookDB = new DBBook();
    $bookDB-> add($book);
}

}
}