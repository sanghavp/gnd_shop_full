<?php 
    $mysqli = new mysqli("localhost","root","","gndshop2");

    // Check connection
    if ($mysqli->connect_errno) {
      echo "Kết nối lỗi" . $mysqli->connect_error;
      exit();
    }
?>



            <?php
                $key = $_GET['iddm'];
                $sql = "SELECT * FROM loaisp WHERE ID_DanhMucSp='".$key."'";
            
                $result = mysqli_query($mysqli, $sql);

                if (mysqli_num_rows($result) > 0) {
                  // output data of each row
                  while($row = mysqli_fetch_assoc($result)) 
                  {
                      echo "<option value='".$row["ID_LoaiSp"]."'>".$row["Ten_LoaiSp"]."</option>";
                  }
                }
            ?>