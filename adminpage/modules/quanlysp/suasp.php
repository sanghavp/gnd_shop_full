<?php
	include("config/config.php");
	$sql_sua_sp = "SELECT * FROM sp WHERE ID_Sp='$_GET[idsp]' LIMIT 1";
	$query_sua_sp = mysqli_query($mysqli,$sql_sua_sp);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
	<div class="container">
	<div class="btn btn-success my-2 d-flex justify-content-center"> Sửa Sản Phẩm</div>
<?php
	while($row = mysqli_fetch_array($query_sua_sp)) {
?>
	<form method="POST" action="modules/quanlysp/xulysp.php?idsp=<?php echo $row['ID_Sp'] ?>" enctype="multipart/form-data">


		<h5>Nhập Mã Sản Phẩm</h5>
		<input type="text" class="form-control" name="id_sp" value="<?php echo $row['ID_Sp'] ?>">
		<h5>Nhập Tên Sản Phẩm</h5>
		<input type="text" class="form-control" name="ten_sp" value="<?php echo $row['Ten_Sp'] ?>">
		<h5>Nhập Giá Sản Phẩm</h5>
		<input type="text" class="form-control" name="gia_sp"  value="<?php echo $row['Gia_Sp'] ?>">

		<h5>Nhập Mô Tả Sản Phẩm</h5>
		<textarea name="mota_sp">
			<?php echo $row['Mota_Sp'] ?>
		</textarea>
		<script>
			CKEDITOR.replace('mota_sp');
		</script>
		

		<br>
		<h5>Chọn Danh Mục Sản Phẩm</h5>
			<select name="danhmuc_sp" class="form-control" id="danhmucsp">
				<?php
					$sql_danhmuc = "SELECT * FROM danhmucsp";
					$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
					while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
		    			if($row_danhmuc['ID_DanhMucSp']==$row['ID_DanhMucSp']){
		    		?>
		    		<option selected value="<?php echo $row_danhmuc['ID_DanhMucSp'] ?>"><?php echo $row_danhmuc['Ten_DanhMucSp'] ?></option>
		    		<?php
		    			}else{
		    		?>
		    		<option value="<?php echo $row_danhmuc['ID_DanhMucSp'] ?>"><?php echo $row_danhmuc['Ten_DanhMucSp'] ?></option>
		    		<?php
		    			}
		    		} 
		    		?>
			</select>

		<h5>Chọn Loại Sản Phẩm</h5>
			<select name="loai_sp" class="form-control" id="loaisp">
					<?php 
						$sql_loaisp= "SELECT * FROM loaisp";
						$query_loaisp = mysqli_query($mysqli,$sql_loaisp);
						while($row_loaisp = mysqli_fetch_array($query_loaisp)){
							if($row_loaisp['ID_LoaiSp']==$row['ID_LoaiSp']){

					?>

						<option selected value="<?php echo $row_loaisp['ID_LoaiSp'] ?>"><?php echo $row_loaisp['Ten_LoaiSp'] ?></option>
					<?php 
							}elseif($row_loaisp['ID_DanhMucSp']==$row['ID_DanhMucSp']){
					?>
						<option value="<?php echo $row_loaisp['ID_LoaiSp'] ?>"><?php 	echo $row_loaisp['Ten_LoaiSp'] ?></option>

					<?php 

							}
						}

					?>

			</select>

		
			<h5>Chọn ảnh đại diện sản phẩm</h5>
		<input type="file" name="img" class="form-control">
	  	<img src="modules/quanlysp/product_images/<?php echo $row['Hinhanh_Sp'] ?>" width="150px">
		
		<h5>Chọn ảnh đại mô tả của sản phẩm</h5>
		<input type="file" name="img2[]" class="form-control" multiple="multiple">
		<div class="dropdown my-2">
		  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		   	Xem Ảnh Mô Tả
		  </button>
		  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
		<?php 
			$image= unserialize($row['Hinhanh_Mota']);
			$i=1;
			foreach ($image as $key => $value){

		?>
		    <a class="dropdown-item" href="#">
		    	<table>
		    		<tr>
		    			<td><?php echo $i++?></td>
		    			<td >
		    				<img src="modules/quanlysp/product_images/<?php echo $value ?>" width="150px">
		    			</td>
		    		</tr>
		    	</table>
		    </a>
		<?php 
			}
		 ?>
		  </div>
		</div>

			

		

	  	<h5>Nhập vào trạng thái của sản phẩm</h5>	

		<select name="trangthai_sp" class="form-control">
			<?php
			if($row['Trangthai_Sp']==1){ 
			?>
			<option value="1" selected>Còn hàng</option>
			<option value="0">Hết hàng</option>
			<?php
			}else{ 
			?>
			<option value="1">Còn hàng</option>
			<option value="0" selected>Hết hàng</option>
			<?php
			} 
			?>

		</select>
<?php
}
?>
		<input type="submit" name="sua_sp" value="Sửa Sản Phẩm" class="btn btn-primary mt-2">
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
