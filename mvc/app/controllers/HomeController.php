<?php
require_once "./app/models/user.php";
    class HomeController{
        function home(){
            $user = User::all();
            require_once "./app/views/home/index.php";
        }
    }
?>