<?php
    require 'database.php';
    session_start();
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
        <label>Gia</label><br>
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

        $ho = new Database();
        $conn=Database::$connection;
        $matour="";
        $tinhtrang="";
        $songay="";
        $tour="";
        $thoigian="";
        $gia="";
   if($_SERVER["REQUEST_METHOD"] == 'REQUEST') {
       if (isset($_REQUEST['matour'])) {
           $matour = $_REQUEST['matour'];
       }
       if (isset($_REQUEST['tour'])) {
           $tour = $_REQUEST['tour'];
       }
       if (isset($_REQUEST['thoigian'])) {
           $thoigian = $_REQUEST['thoigian'];
       }
       if (isset($_REQUEST['gia'])) {
           $gia = $_REQUEST['gia'];
       }
       if (isset($_REQUEST['songay'])) {
           $songay = $_REQUEST['songay'];
       }
       if (isset($_REQUEST['tinhtrang'])) {
           $tinhtrang = $_REQUEST['tinhtrang'];
       }

       if (isset($matour) && isset($tour) && isset($thoigian) && isset($gia) && isset($songay) && isset($tinhtrang)) {
               $sql = "INSERT INTO tourdulich (matour,tentour,thoigianchay,gia,songay,tinhtrang) VALUES ('$matour','$tour','$thoigian','$gia','$songay','$tinhtrang')";
               //       $sql= mysqli_query($conn,"INSERT INTO tourdulich (tentour, tomtatlichtrinh) VALUES ('$tour', '$lichtrinh')");
           if(isset($_REQUEST['submit'])){
               if ($conn->query($sql) == true) {
                   echo "them thanh cong";
               } else {
                   echo mysqli_errno($conn) . mysqli_error($conn);
               }
               $conn->close();

           }

       }

   }
    ?>
</body>
</html>
