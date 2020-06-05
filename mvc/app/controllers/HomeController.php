<?php
require_once "./app/models/user.php";
    class HomeController{
        function home(){
            $user = User::all();
            echo "<pre>";
            var_dump($user);
        }
    }
?>