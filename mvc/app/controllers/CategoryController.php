<?php
namespace App\Controllers;
use App\Models\Category;
class HomeController{
    function home(){
        $cates = Category::all();
        require_once "./app/views/home/index.php";
    }
}
?>