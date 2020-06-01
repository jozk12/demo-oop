<?php
class PhuHuynh{
    function __construct($ten, $toan, $van, $tiengAnh)
    {
        $this->ten = $ten;
        $this->toan = $toan;
        $this->van = $van;
        $this->tiengAnh = $tiengAnh;
    }

    function diemTb(){
        $tb = round(($this->van + $this->toan + $this->tiengAnh)/3, 2);
        return $tb;
    }
}

class HocSinh extends PhuHuynh{
    function diemTb()
    {
        $tb = round(($this->van*2 + $this->toan*3 + $this->tiengAnh)/6, 2);
        return $tb;
    }
}

$ph = new PhuHuynh('Loan béo', 6, 7, 8);
$hs = new HocSinh('Đức Hoàng', 6, 7, 8);

echo "Học sinh $hs->ten có điểm trung bình = " . $hs->diemTb() . "<br>";
echo "Phụ huynh $ph->ten có điểm trung bình = " . $ph->diemTb() . "<br>";


?>