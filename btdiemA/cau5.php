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
                   $data[]=$row;

                    }
                if(!empty($data)){
                    foreach ($data as $hoang){?>
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <div class="card-body">
                                    <a href="cau6.php">
                                    <h2><?php echo $hoang['matour'] ?></h2>
                                        <h2>  <p class="card-text">Ten Tour :<?php echo $hoang['tentour'] ?></p></h2>
                                    <p class="card-text"> Gia Tien :<?php echo $hoang['gia'] ?></p>
                                    <p class="card-text">Thoi Gian Chay :<?php echo $hoang['thoigianchay'] ?></p>
                                    <p class="card-text"> So ngay o :<?php echo $hoang['songay'] ?></p>
                                    <p class="card-text"> Tinh Trang (con/het)<?php echo $hoang['tinhtrang'] ?></p>
                                    </a>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Them</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <?php
                    }
                }
            }

        }
    }

?>
</body>
</html>