<?php
class Foo1
{
    //khai báo phương thức khởi tạo
    public function Foo() {
        echo 'Class Foo được khởi tạo';
    }
}
new Foo1();
//khởi tạo trong kế thừa
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
        echo 'Class Foo được khởi tạo';
        echo "<br>";
    }
    public function __destruct()
    {
        echo 'Class Foo được hủy';
    }
}
$foo = new Foo();
?>