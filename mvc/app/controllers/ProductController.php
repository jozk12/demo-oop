<?php
namespace App\Controllers;
use App\Models\Product;
    class ProductController{
        function product(){
            echo "Sản phẩm";
        }
        function cart(){
            echo "Giỏ hàng";
        }

        public function add(){
            $model = new Product();
            $model->name = 'Sầu riêng';
            $model->price = 100000;
            $model->quantity = 120;
            $model->save();
            header('location: http://localhost/php2/mvc');
        }
    }
?>