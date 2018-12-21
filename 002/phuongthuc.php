<?php
//Thuộc tính
class Name1 {
    //đối vói thuộc tính động
    var $propertyName;
    //đối với thuộc tính cố định(hằng)
    // const $constName = value;
}
class nguoi{
    var $name;
    var $mat;
    var $mui;
    const sochan = 2;
}
//Phương thức
class Name2 {
    function methodName()
    {
        //code
    }
}
class Con {
    var $name;
    var $mat;
    var $mui;
    const sochan = 2;
    function an()
    {
        //code
    }
    function noi($caunoi)
    {
        //code
    }
    function di()
    {
        //code
    }
}
//khởi tạo một lớp
//new className;
//hoặc
//new ClassName();
//hoặc có thế gán vào một biến
//$variable = new className();
//truy xuất thuộc tính của class
//truy xuất trong
class hoang {
    var $name;
    var $mat;
    var $mui;
    const sochan = 2;
    function an()
    {
        //code
    }
    function noi($cauhoi)
    {
        return $this -> name = $cauhoi;
    }
    function di()
    {
        //code
    }
    function getSoChan(){
        return self::sochan;
    }
}
//truy xuất ngoài
//đối với thuộc tính động
//$newClass = new className();
//$newClass -> propertyName;
//đối vói thuộc tính cố định
//className::propertyName;
$tai = new hoang();
$tai -> name;
$tai -> mui;
hoang::sochan;

class ConNguoi4
{
    //khai báo thuộc tính động
    public $name;
    public $mat;
    public $mui;
    //khai báo constant
    const SOCHAN = 2;
    //khai báo phương thức
    public function an()
    {
        //code
    }
    public function noi($cauhoi)
    {
        //gọi phương thức trong class
        return $this -> getSoChan();
    }
    public function di()
    {

    }
    public function getName()
    {

        return $this -> name;
    }
    public function getSoChan()
    {

        return self::SOCHAN;
    }
}
//khởi tạo class
$connguoi = new ConNguoi4();
$connguoi -> name ='hoangbeo';
echo $connguoi -> name;
//gọi phương thức
echo $connguoi -> noi('nguyen tien hoang');
?>