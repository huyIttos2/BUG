<?php


class DBConn
{
public $dsn;
public $username;
public $password;
public function __construct()
{
    $this->dsn ='mysql:host=localhost;dbname =bookstore';
    $this->username ='root';
    $this->password ='password';
}
public function connect(){
    $connect = NULL;
    try{
        $connect = new PDO($this->dsn,$this->username,$this->password);
        echo"Connection successfully";
    }catch(PDOException $exception){
            $exception ->getMessage();
            exit();
    }
    return $connect;
}
}