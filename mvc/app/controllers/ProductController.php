<?php
namespace App\Controllers;
use App\Models\Product;
use App\Models\Category;
    class ProductController{
        function product(){
            echo "Sản phẩm";
        }
        function cart(){
            echo "Giỏ hàng";
        }

        public function addForm(){
            $cates = Category::all();
            include_once './app/views/products/add-form.php';
        }
        public function saveAdd(){
            $data = $_POST;
            $model = new Product();
            $model->fill($data);
            $model->save();

            header('location:'.BASE_URL);
        }
        public function editForm(){
            $id = isset($_GET['id'])?$_GET['id']:-1;
            $cates = Category::all();
            $model = Product::find($id);
            if($model==null){
                header('location:'.BASE_URL);
            }
            $data = $_POST;
            $model->fill($data);
            $model->save();

            header('location:'.BASE_URL);
        }
        public function delete(){
            $id = isset($_GET['id'])?$_GET['id']:-1;
            Product::delete($id);
            header('location:'.BASE_URL);
        }
    }
?>