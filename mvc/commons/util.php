<?php
    function dd($var){
        echo "<pre>";
        var_dump($var);
        die;
    }
    function getPagination(){
        return[
            'default'=>20,
            'list'=>[20,50,80,120]
        ];
    }
    define('BASE_URL','http://localhost/PHP2/mvc/');
?>