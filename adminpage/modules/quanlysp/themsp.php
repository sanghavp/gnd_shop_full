<?php 
	include("config/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
	<div class="container">
	<div class="btn btn-primary my-2 d-flex justify-content-center"> Thêm Sản Phẩm</div>
	<form method="POST" action="modules/quanlysp/xulysp.php" enctype="multipart/form-data">
		<h5>Nhập Mã Sản Phẩm</h5>
		<input type="text" class="form-control" name="id_sp">
		<h5>Chọn Danh Mục Sản Phẩm</h5>
			<select name="danhmuc_sp" class="form-control" id="danhmucsp">
				<option value="#">---Chọn Danh Mục Sản Phẩm---</option>
				<?php
					$sql = "SELECT * FROM danhmucsp order by ID_DanhMucSp DESC";
				
					$result = mysqli_query($mysqli, $sql);

					if (mysqli_num_rows($result) > 0) {
					  // output data of each row
					  while($row = mysqli_fetch_assoc($result)) 
					  {
						  echo "<option value='".$row["ID_DanhMucSp"]."'>".$row["Ten_DanhMucSp"]."</option>";
					  }
					}
				?>
				
			</select>
		<h5>Chọn Loại Sản Phẩm</h5>
			<select name="loai_sp" class="form-control" id="loaisp">
					<option value="#">---Chọn Loại Sản Phẩm---</option>
			</select>

		<h5>Nhập Tên Sản Phẩm</h5>
		<input type="text" class="form-control" name="ten_sp">
		<h5>Nhập Giá Sản Phẩm</h5>
		<input type="text" class="form-control" name="gia_sp">
		<h5>Nhập Mô Tả Sản Phẩm</h5>
		<textarea name="mota_sp"></textarea>
		<script>
			CKEDITOR.replace('mota_sp');
		</script>
		<h5>Chọn ảnh đại diện sản phẩm</h5>
		<input type="file" name="img" class="form-control">
		<h5>Chọn ảnh đại mô tả của sản phẩm</h5>
		<input type="file" name="img2[]" class="form-control" multiple="multiple">
		<h5>Nhập vào trạng thái của sản phẩm</h5>	
    	<select name="trangthai_sp" class="form-control">
    		<option value="1">Còn hàng</option>
    		<option value="0">Hết hàng</option>
    	</select>
    	<br>
		<input type="submit" name="insert_sp" value="Thêm Sản Phẩm" class="btn btn-primary mt-2">
 
	</form>
</div>
	<script>
		$(document).ready(function(){
			$("#danhmucsp").change(function(){
				var x = $(this).val();
				$.get("modules/quanlysp/dataajax.php",{iddm:x},function(data){
					$("#loaisp").html(data);
				})
			})
		})
	</script>

	
</body>
</html>
