<?php
namespace App\Controllers;
use App\Models\Product;
class HomeController{
    function home(){
        $products = Product::all();
        require_once "./app/views/home/index.php";
    }
}
?>