<?php
 class DongVat{
     var $ten;
     var $cannang;
     var $chieucao;
    function __construct($name, $height, $weight)
    {
        $this->ten = $name;
        $this->cannang = $weight;
        $this->chieucao = $height;
    }

     function BMI(){
        $ketqua = round($this->cannang/(($this->chieucao/100)*2), 2);
        return $ketqua;
     }
 }
 class ConNguoi extends DongVat{
    function BMI(){
        // 1. lấy đc chỉ số BMI
        $bmi = parent::BMI();
        // var_dump($bmi);
        // 2. so sánh => kết quả béo, bình thường, gầy
        $trangThai = "Gầy";
        if($bmi >= 18 & $bmi <= 24){
            $trangThai = "Bình thường";
        }else if($bmi > 24){
            $trangThai = "Béo";
        }
        // 3. Trả về kết quả
        $result = "$this->ten có chỉ số BMI = $bmi - chỉ số này là $trangThai";

        return $result;
    }
 }


 $vit=new ConNguoi('Viet Duc', 165, 40);
//  $bmi = $vit->BMI();
 
 echo $vit->BMI();

?>