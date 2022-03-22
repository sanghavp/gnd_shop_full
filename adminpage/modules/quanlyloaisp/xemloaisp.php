<?php
   include("config/config.php");
?>

   <div class="container">
      <h1>Loại Sản Phẩm</h1>
      <table class="table table-bordered">
         <tr>
            <th>Mã loại sản phẩm</th>
            <th>Mã danh mục sản phẩm</th>
            <th>Loại sản phẩm</th>
            <th>Hành động</th>
         </tr>
         <?php
            $sql = "SELECT * FROM loaisp order by ID_LoaiSp DESC";
            $result = mysqli_query($mysqli, $sql);
            
            if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
               echo "<tr>";
               echo "<td>".$row["ID_LoaiSp"]."</td>";
               echo "<td>".$row["ID_DanhMucSp"]."</td>";
               echo "<td>".$row["Ten_LoaiSp"]."</td>";
               echo "<td><a href='./modules/quanlyloaisp/xulyloaisp.php?task=delete&ID_LoaiSP=".$row["ID_LoaiSp"]."' class='btn btn-danger'>Xóa</a><a href='index.php?action=quanlyloaisp&query=sua&task=update&ID_update=".$row["ID_LoaiSp"]."' class='btn btn-warning'>Sửa</a></td>";
               echo "</tr>";
              }
            } else {
              echo "0 results";
            }
         ?>
      </table>
   </div>
