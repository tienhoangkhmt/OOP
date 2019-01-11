<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 1/11/2019
 * Time: 2:23 PM
 */
require 'database.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script type="text/javascript">
        alert('Chao Admin')
    </script>
</head>
<body>
<form>
    <label>Matour</label><br>
    <input type="text" name="matour" placeholder="nhap ma tour vao day"><br>
    <label>Ten tour</label><br>
    <input type="text" name="tour" placeholder="nhap tour can them vao day"><br>
    <label>Gia</label>
    <input type="number" name="gia" placeholder="nhap gia"><br>
    <label>Thoi Gian Chay</label><br>
    <input type="text" name="thoigian" placeholder="nhap thoi gian "><br>
    <label>So Ngay</label><br>
    <input type="number" name="songay" placeholder="nhap so ngay "><br>
    <label>Tinh trang(con/het)</label><br>
    <input type="text" name="tinhtrang" placeholder="nhap con hoac het">
    <input type="submit" name="btn_submit" value="submit">
</form>
<?php
if(isset($_REQUEST['btn_submit'])){
    // lay du lieu tu input
    $ma=$_REQUEST['matour'];
    $tour=$_REQUEST['tour'];
    $gia=$_REQUEST['gia'];
    $thoigian=$_REQUEST['thoigian'];
    $songay=$_REQUEST['songay'];
    $tinhtrang=$_REQUEST['tinhtrang'];
    // kiem tra xem input co rong khong
    if ($ma==""||$tour=="" || $gia==""|| $thoigian==""||$songay==""||$tinhtrang==""){
        echo "yeu cau nhap lai";
    }else{
        $db=new Database();
        $conn=Database::$connection;
        $sql="INSERT INTO tourdulich(`matour`,`tentour`,`gia`,`thoigianchay`,`songay`,`tinhtrang`) VALUE('$ma','$tour','$gia','$thoigian','$songay','$tinhtrang') ";
        if($conn->query($sql)== TRUE){
            echo " them thanh cong";
        }else{
            echo mysqli_errno($conn) . mysqli_error($conn);
        }
    }
}
?>
</body>
</html>
