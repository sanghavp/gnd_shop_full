<?php
   include ("config/config.php");
?>
<div class="container"> 
<h1>Thêm loại sản phẩm</h1>

<br>
<form action="./modules/quanlyloaisp/xulyloaisp.php" method="post" class="col-6">
   Nhập mã danh mục sản phẩm:
   <select name="Cate_ID" class="form-control">
      <?php
         $sql = "SELECT * FROM danhmucsp";
         $result = mysqli_query($mysqli, $sql);
         
         if (mysqli_num_rows($result) > 0) {
         // output data of each row
         while($row = mysqli_fetch_assoc($result)) {
            echo "<option value='".$row["ID_DanhMucSp"]."'>".$row["Ten_DanhMucSp"]."</option>";
         }
         }
      ?>
   </select>
   Nhập loại sản phẩm:
   <input type="text" name="Product_Type" class="form-control">
   <br>
   <button type="submit" name="Add_Type" class="btn btn-primary">Thêm</button>
</form>
</div>
