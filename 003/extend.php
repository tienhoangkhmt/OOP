<?php
class Hoang
{
    var $chan;
    var $tay;
    var $mat;
    var $mui;
    function an()
    {
    }
}
//kế thừa dùng extends
class halinh extends Hoang
{
    var $lamviec;
    function di()
    {
    }
    function noi()
    {
    }
}
class SEX extends halinh
{
    function bo()
    {
    }
}
//gọi thuộc tính và phương thức của lớp cha
class hoangbeo
{
    function getClass()
    {
        return 'hoangbeo';
    }
}
class giang extends hoangbeo
{
    var $name = 'gianglon';
    function getClass()
    {
        return 'gianglon';
    }
    function getMethod()
    {
        echo 'cammmm ' .$this -> getClass();
    }
    function getMethodParent()
    {
        echo 'dfdsp ' .parent::getClass();
    }
}
$class = new giang();
//kết quả trả về: đây là phương thức ăn của lớp trẻ con
$class -> getMethod();
echo "<br>";
//kết quả :Đây là phương thức ăn của lớp người lớn
$class -> getMethodParent();