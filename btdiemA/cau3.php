<?php
require_once 'database.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form>
    <label>TAI KHOAN</label><br>
    <input type="text" name="username" placeholder="nhap username">
    <br>
    <label>MAT KHAU</label><br>
    <input type="password" name="password" placeholder="nhap passoword">
    <br>
    <input name="btn_submit" type="submit" value="Đăng nhập">
</form>
<?php

//kiem tra da submit chua
if (isset($_REQUEST["btn_submit"])) {
    // lay du lieu trong input
    $TK = $_REQUEST["username"];
    $MK = $_REQUEST["password"];
    // kiem tra tk MK co de trong khong
    if ($TK == "" || $MK =="") {
        echo "username hoặc password bạn không được để trống!";
    }else{
        // khoi tao doi tuong
        $db=new Database();
        // truy  cap den bien static $connection = null
        $conn = Database::$connection;
        $sql = "select * from nguoidung where tentaikhoan = '$TK' and matkhau= '$MK' ";
        // truy vaan
        $result = $conn->query($sql);
        $num_rows = mysqli_num_rows($result);// lay du lieu $sql tra ve cac hang trong bang
        $row =mysqli_fetch_array($result);
        if ($num_rows==0) {
            echo "tên đăng nhập hoặc mật khẩu không đúng !";
        }else if($row['cap']== "1")//lay du lieu trong cot MANGUOIDUNG
            {
            header('Location: admin.php');
        }else{
            header('Location: cau4.php');
        }
    }
}
?>
</body>
</html>