<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name;
  }
  function __destruct() {
    echo "The fruit is $this->name";
  }
  function get_info(){
    return "Đây là: $this->name";
  }
}

$apple = new Fruit("Apple");
echo $apple->get_info();
echo "<br>"
?>