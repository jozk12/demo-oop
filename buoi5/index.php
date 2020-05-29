<?php 
class BaseModel{
    function __construct()
    {
        $this->connect = new PDO("mysql:host=127.0.0.1;dbname=pt15111-web;charset=utf8", "root", "");
    }
    static function all(){
        $model = new static();
        $sql = "select * from $model->table";
        $stmt = $model->connect->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}
class Product extends BaseModel{
    var $table = "products";
}
class Category extends BaseModel{
    var $table = "categories";
}
$cates = Category::all();
$produts = Product::all();

echo "<pre>";
var_dump($produts);

?>