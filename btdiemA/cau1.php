
<?php
//Tạo CSDL
//Bước 1: Tạo kết nối đến CSDL
$con=mysqli_connect("localhost","root","");
// Kiểm tra kết nối
if (mysqli_connect_errno($con)){
    echo "<br>Không thể kết nối đến CSDL: " . mysqli_connect_error($con);
    echo "<br>Không thể kết nối đến CSDL: Mã lỗi là " . mysqli_connect_errno($con);
}
//Bước 2: Xây dựng truy vấn, Chạy các câu lệnh
$sql="CREATE DATABASE IF NOT EXISTS ptudweb";
//echo $sql;
if (mysqli_query($con,$sql)){//Bước 3: Xử lý kết quả trả về
    echo "CSDL ptudweb đã được tạo";
}else{
    echo "<br>Lỗi khi tạo CSDL: " . mysqli_connect_error($con);
    echo "<br>Lỗi khi tạo CSDL: Mã lỗi là " . mysqli_connect_errno($con);
}
//Tạo bảng
$con=mysqli_connect("localhost","root","","ptudweb");

$sql="CREATE TABLE IF NOT EXISTS monan(mamonan int(6) NOT NULL AUTO_INCREMENT PRIMARY KEY, tenmonan varchar(30), mieuta varchar(100), gia int (10), tinhtrang boolean)";
echo $sql;
if (mysqli_query($con,$sql)){//Bước 3: Xử lý kết quả trả về
    echo "Bảng monan đã được tạo";
}else{
    echo "<br>Lỗi khi tạo Bảng: " . mysqli_connect_error($con);
    echo "<br>Lỗi khi tạo Bảng: Mã lỗi là " . mysqli_connect_errno($con);
}
$sql="CREATE TABLE IF NOT EXISTS banan(maban int(6) NOT NULL AUTO_INCREMENT PRIMARY KEY, kihieuban varchar(30), danhsachmamonan varchar(100), soluong int(6), tinhtrang boolean)";
if (mysqli_query($con,$sql)){//Bước 3: Xử lý kết quả trả về
    echo "Bảng banan đã được tạo";
}else{
    echo "<br>Lỗi khi tạo Bảng: " . mysqli_connect_error($con);
    echo "<br>Lỗi khi tạo Bảng: Mã lỗi là " . mysqli_connect_errno($con);
}

//thêm vào cơ sở dữ liệu

$sql = "INSERT INTO monan(tenmonan,mieuta,gia,tinhtrang) VALUES('trung ran','ngon',3000,1)";
mysqli_query($con,$sql);

$sql = "INSERT INTO monan(tenmonan,mieuta,gia,tinhtrang) VALUES('trung ran','ngon',3000,1)";
mysqli_query($con,$sql);

$sql = "INSERT INTO monan(tenmonan,mieuta,gia,tinhtrang) VALUES('trung ran','ngon',3000,1)";
mysqli_query($con,$sql);

$sql = "INSERT INTO monan(tenmonan,mieuta,gia,tinhtrang) VALUES('trung ran','ngon',3000,1)";
mysqli_query($con,$sql);
