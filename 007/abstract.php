<?php
//khai báo một phương thức abstract trong abstract class
abstract class Person
{
    abstract public function getname();
}
//định nghĩa lại các phương thức abstract của abstract class đó khi kế thừa
abstract class Dongvat
{
    protected $name;
    abstract protected function getName();
}
class ConBo extends Dongvat
{
    public function getName()
    {
        return $this -> name;
    }
}
?>