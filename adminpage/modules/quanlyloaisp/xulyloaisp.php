<?php
   require "../../config/config.php";
   // Thêm loại sản phẩm
   if(isset($_POST["Add_Type"])) {
      $sql = "INSERT INTO loaisp(ID_DanhMucSp, Ten_LoaiSp)
      VALUES (".$_POST["Cate_ID"].", '".$_POST["Product_Type"]."')";

      if (mysqli_query($mysqli, $sql)) {
      header("Location:../../index.php?action=quanlyloaisp&query=them");
      } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
   }
   // Xóa sản phẩm
   if(isset($_GET["task"]) && $_GET["task"] == "delete") {
      $sql = "DELETE FROM loaisp WHERE ID_LoaiSp=".$_GET["ID_LoaiSP"]."";

      if ($mysqli->query($sql) === TRUE) {
      // echo "Record deleted successfully";
      header("Location:../../index.php?action=quanlyloaisp&query=xem");
      } else {
      echo "Error deleting record: " . $conn->error;
      }
   }
   
?>