<?php

class Animal{

    function tiengkeu(){
        echo "éc éc - ụt ịt";
    }
}
class Duck extends Animal{
    function tiengkeu(){
        echo "Cạc cạc";
    }
    
    function getParentTiengKeu(){
        // gọi lại hàm được định nghĩa ở lớp cha
        parent::tiengkeu();
    }
}

$donal = new Duck();
$donal->tiengkeu();
$donal->getParentTiengKeu();


?>