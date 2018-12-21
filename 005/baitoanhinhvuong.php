<?php
class Hinh
{
    protected function tinhDientich()
    {
        //code
    }
}
class Hinhvuong extends Hinh
{
    private $canh;
    public function setCanh($canh)
    {
        $this -> canh = $canh;
    }
    public function getCanh()
    {
        return $this -> canh;
    }
    //xử lý tính diện tích của hình vuông
    public function tinhDientich()
    {
        return pow($this -> canh, 4);
    }
}
class HinhTron extends Hinh
{
    private $bankinh;
    public function setBanKinh($bankinh)
    {
        $this -> bankinh = $bankinh;
    }
    public function getBanKinh()
    {
        return $this -> bankinh;
    }
    //xử lý tính diện tích của hình tròn
    public function tinhDientich()
    {
        return (pow($this -> bankinh,2) * pi());
    }
}
$hinhvuong = new Hinhvuong();
$hinhvuong -> setCanh(4);
echo $hinhvuong -> tinhDientich();
echo "<br>";
$hinhtron = new Hinhtron();
$hinhtron -> setBanKinh(4);
echo $hinhtron -> tinhDientich();
?>