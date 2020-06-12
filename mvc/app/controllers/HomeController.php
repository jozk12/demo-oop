<?php
namespace App\Controllers;
use App\Models\Product;
class HomeController{
    function home(){
        $products = Product::all();
        
        // dd($products);
        require_once "./app/views/home/index.php";
    }
}
?>