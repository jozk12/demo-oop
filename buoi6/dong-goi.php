<?php
class LopCha{
    private $taisan = 100;
    protected $tienLuong = 20;

    public function getTaiSan(){
        return $this->taisan;
    }
    public function setTaiSan($tsMoi){
        $this->taisan = $tsMoi;
    }
}

class LopCon extends LopCha{
    
}


$thienth = new LopCha();
echo $thienth->getTaiSan() . "<br>";
$thienth->setTaiSan(150);
echo $thienth->getTaiSan() . "<br>";
// var_dump($thienth);


?>