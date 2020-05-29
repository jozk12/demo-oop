<?php
    class Duck{
        var $name;
        var $hairColor;
        var $children=[];
        function Birth($name, $color){
            $newDuck = new Duck();
            $newDuck->name=$name;
            $newDuck->hairColor=$color;
            $this->children[] = $newDuck;
        }
    }
    $A=new Duck();
    $A->name = "a";
    $A->hairColor = "đỏ";
    
    $A->Birth('vit1','black');
    $A->Birth('vit2','red');
    $A->Birth('vit3','Brown');
    echo "<pre>";
    var_dump($A);

    // tạo lớp ConNguoi gồm các thuộc tính
    // tên, tuổi, địa chỉ, Ô tô (mảng)

    // tạo lớp Ô tô bao gồm các thuộc tính
    // loại xe, màu xe, giá tiền

    // tạo phương thức MuaXe ở lớp ConNguoi với các tham số tự định nghĩa

    // lấy ví dụ 1 người sở hữu nhiều xe ô tô

    class Person {
        var $name;
        var $age;
        var $address;
        var $car=[];
        function BuyCar($type, $color, $price){
            $Ford = new Car();
            $Ford->type=$type;
            $Ford->color=$color;
            $Ford->price=$price;
            array_push($this->car, $Ford);
        }
    }
    class Car{
        var $type;
        var $color;
        var $price;
    }
    $Duc = new Person();
    $Duc->name="duc";
    $Duc->age=20;
    $Duc->address="hanoi";
    $Duc->BuyCar("ford","orange",1000);
    $Duc->BuyCar("huynda","white",2000);
    echo "<pre>";
    var_dump($Duc)
?>