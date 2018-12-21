<?php
class Foo1
{
    public function  __destruct()
    {
        //echo 'Class Foo được hủy';
        echo "<br>";
    }
}
$foo = new Foo1();
//một class có đầy đủ phương thức khởi tạo và phưởng thức hủy
class Foo2
{
    public function __construct()
    {
        echo 'Class Foo được khởi tạo';
        echo "<br>";
    }
    public function getMessage()
    {
        echo 'Đây là class Foo';
        echo "<br>";
    }
    public function __destruct()
    {
        echo 'Class Foo được hủy';
        echo "<br>";
    }
}
$foo = new Foo2();
$foo -> getMessage();
//khỏi tạo và hủy kế thừa
class Bar
{
    public function __construct()
    {
        echo 'Class Bar được khởi tạo';
    }
    public function __destruct()
    {
        echo 'Class Bar được hủy';
    }
}
class Foo extends Bar
{
    public function __construct()
    {
        parent::__construct();
        echo 'Class Foo được khởi tạo';
    }
    public function __destruct()
    {
        parent::__destruct();
        echo 'Class Foo được hủy';
    }
}
$foo = new Foo();
?>