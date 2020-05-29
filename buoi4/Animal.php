<?php
class Animal{

    function __construct($name, $hairColor, $age)
    {
        $this->name = $name;
        $this->hairColor = $hairColor;
        $this->age = $age;
    }


    function run(){

        echo "Im running";
    }
}

class Product{
    var $table = "products";
    function __construct()
    {
        $this->conn = new PDO("mysql:host=127.0.0.1;dbname=pt15111-web;charset=utf8", "root", "");
    }

    static function all(){
        $model = new static(); // <=> $model = new Product();
        $sql = "select * from $model->table";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    static function where($col, $condition, $value){
        $model = new static();
        $model->queryBuilder = "select * from $model->table 
                                where $col $condition '$value' ";
        return $model;
    }

    function get(){
        $stmt = $this->conn->prepare($this->queryBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    static function find($id){
        $model = new static();
        $model->queryBuilder = "select * from $model->table where id = $id";
        $result = $model->get();
        return count($result) > 0 ? $result[0] : null ;
    }
}

$product = Product::where('name', 'like', '%a%')->get();

$product = Product::find(5);

echo "<pre>";
var_dump($product);


?>