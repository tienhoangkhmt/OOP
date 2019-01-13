<?php
require 'database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script type="text/javascript">
       $(document).ready(function () {
          $("p").alert("Yeu cau nhap lai") ;
       });
    </script>
</head>
<body>
<form>
    <label>Tim kiem</label>
    <input type="search" name="search">
    <input type="submit" name="submit">
</form>
<?php
    if(isset($_REQUEST['submit'])){
        $search=$_REQUEST['search'];
        if ($search==""){
            echo "yeu cau nhap lai";
        }else {
            $db = new Database();
            $conn = Database::$connection;
            $sql = "SELECT * FROM tourdulich WHERE tentour LIKE '%$search%'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $hoang= "<a href='cau6.php' id='hoang'>";
                    $hoang .= $row['matour'];
                    $hoang.="<br>";
                    $hoang .= $row['tentour'];
                    $hoang.="<br>";
                    $hoang .= $row['gia'];
                    $hoang.="<br>";
                    $hoang .= $row['thoigianchay'];
                    $hoang.="<br>";
                    $hoang .= $row['songay'];
                    $hoang.="<br>";
                    $hoang .= $row['tinhtrang'];
                    $hoang.="<br>";
                    $hoang.="</a>";
                  echo $hoang;
                }
            }
        }
        }
?>
</body>
</html>