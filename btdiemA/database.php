<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 1/10/2019
 * Time: 8:05 PM
 */
class Database{
    public static $connection=NULL;
    public function __construct()
    {
        /**
         * Lan chay thu 2
         */
        if(self::$connection){
            return self::$connection;
        }

        $this->ketnoi();

        return self::$connection;

    }

    function ketnoi(){
        $servername="localhost";
        $username="root";
        $password="";
        $db="ptuweb";
        // ket noi vs csdl
        self::$connection = new mysqli($servername,$username,$password,$db);
        // kiem tra ket noi
        //
        if (self::$connection->connect_error){
            die("co loi xay ra". self::$connection->connect_error);

        }

    }
}
?>