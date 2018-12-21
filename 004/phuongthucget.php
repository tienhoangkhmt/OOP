<?php
class Person
{
    private $name;
    private function run()
    {
        return 'RUN';
    }
    function setName($name)
    {
        $this -> name = $name;
    }
    function getName()
    {
        return $this -> name;
    }
    function getRunMethod()
    {
        return $this -> run();
    }
}
//khởi tạo class
$person = new Person();
//set thuộc tính name
$person -> setName('NGUYEN TIEN HOANG');
//lấy ra thuộc tính name
echo $person -> getName();
echo "<br>";
//gọi giá trị của phương thức run
?>