<?php
class Computer
{
    var $name;
    var $price;
    var $color;
    var $size;
    var $type;

    function getInfo()
    {
        return "get $this->name ok";
    }
}

$MyDell = new Computer();
$MyDell->name = "dell 15300";
var_dump($MyDell->name);
echo "<br>";
var_dump($MyDell->getInfo());
