<?php
  
      $mysqli = new mysqli("localhost","root","","gndshop2");

      // Check connection
      if ($mysqli->connect_errno) {
        echo "Kết nối lỗi" . $mysqli->connect_error;
        exit();
      }


   if(isset($_POST["UpdateLSP"])) {
      $sql = "UPDATE loaisp SET Ten_LoaiSp='".$_POST["Update_Type"]."' WHERE ID_LoaiSp=".$_POST["ID_lsp"]."";
      
      if (mysqli_query($mysqli, $sql)) {
         header("Location:../../index.php?action=quanlyloaisp&query=xem");
      } else {
      echo "Error updating record: " . mysqli_error($mysqli);
      }
   }
?>

<h1>Cập nhật tên loại sản phẩm</h1>

<br>
<form action="./modules/quanlyloaisp/updateloaisp.php" method="post" class="col-6">
   <?php
        if(isset($_GET["task"]) && $_GET["task"] == "update") {
         $sql = "SELECT * FROM loaisp where ID_LoaiSp=".$_GET["ID_update"]."";
         $result = $mysqli->query($sql);
         
         if ($result->num_rows > 0) {
         // output data of each row
            while($row = $result->fetch_assoc()) {
            echo "Sửa loại sản phẩm:";
            echo "<input type='hidden' name='ID_lsp' value='".$row["ID_LoaiSp"]."'>";
            echo "<input type='text' name='Update_Type' class='form-control' value='".$row["Ten_LoaiSp"]."'>";
            echo "<button type='submit' name='UpdateLSP' class='btn btn-primary'>Cập nhật</button>";
            }
         }
      }
      
   ?>
</form>
