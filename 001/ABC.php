
<?php
//lập trình hướng thủ tục
function getPersonnel() {
    $name = 'hoangbeo';
    $age = 20;
    return $name.$age;
}
//lập trình hướng đối tượng
class Personnel {
    private $name = 'hoanglon';
    private $age = 20;
    public function getPersonnel()
    {
        return $this->name.'-'.$this -> age;
    }
}
?>