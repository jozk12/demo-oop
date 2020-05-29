<?php
    class Hotel{
        var $table = 'room_types';
        function __construct()
        {
            $this->conn=new PDO("mysql:host=127.0.0.1;dbname=duan1_db;charse=utf8","root","");
        }
        static function where($col, $condition, $value){
            $model = new static();
            $model->sqlBulder="select * from $model->table where $col $condition '$value'";
            return $model;
        }
        function get(){
            $stmt = $this->conn->prepare($this->sqlBulder);
            $stmt->execute();
            $result=$stmt->fetchAll();
            return $result;
        }
        static function findById($id){
            $model = new static();
            $model->sqlId="select * from $model->table where id = $id";
            $result=$model->get();
            return count($result)>0 ? $result[0]:null;
        }
    }
    $rooms = Hotel::where('name','like','%room%')->get();
    $roomById = Hotel::findById(2);
    echo "<pre>";
    var_dump($roomById);
?>