<?php
class Person
{

    protected $name;
}
class Male extends Person
{
    function setName($name)
    {
        $this -> name = $name;
    }
    function getName()
    {
        return $this -> name;
    }
}
//khởi tạo lớp Person
$person = new Person();

$person -> name;
//khởi tạo lớp Male
$male = new Male();
//tác động vào biến name qua hàm setName
$male -> setName('Cho linh');
echo $male -> getName();
?>