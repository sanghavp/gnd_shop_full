

<?php
	$sql_danhmucsp = "SELECT * FROM danhmucsp";
	$query_danhmucsp = mysqli_query($mysqli,$sql_danhmucsp);
	
?>

<!-- BEGIN SIDEBAR -->
<div class="col-md-3 sidebar">
	<!-- category -->
	<div class="card border-success text-dark">
			<div class="card-header bg-success text-white">DANH MỤC SẢN PHẨM</div>
			<div class="card-body">
<?php
	while($row_danhmuc=mysqli_fetch_array($query_danhmucsp)){

?>

				
				<?php
					$danhmucsp = $row_danhmuc['ID_DanhMucSp'];
				 ?>
			
				<a class="btn d-block" data-toggle="collapse" data-target="#target1" href="index.php?action2=shopmenu&dmspnav=<?php echo $row_danhmuc['ID_DanhMucSp']?>" id="men"><?php echo $row_danhmuc['Ten_DanhMucSp']?></a>

				<div class="collapse" id="target1">
<?php
	$sql_loaisp = "SELECT * FROM loaisp WHERE ID_DanhMucSp='".$danhmucsp."'";
	$query_loaisp = mysqli_query($mysqli,$sql_loaisp);
	while($rowloaisp=mysqli_fetch_array($query_loaisp)){
 ?>
					<li>
						<a href="index.php?action2=shopmenu&dmspnav=<?php echo $row_danhmuc['ID_DanhMucSp']?>&loaispnav=<?php echo $rowloaisp['ID_LoaiSp']?>">
								<?php  echo $rowloaisp['Ten_LoaiSp'] ?>
							
						</a>
					</li>


<?php 
	}
?>
				</div>
				
<?php
	}
?>
			</div>
	</div>
	<!-- end category -->

	<!-- COLOR -->
	<div class="card border-success text-dark">
			<div class="card-header bg-success text-white">MÀU</div>
			<div class="card-body">
				<!-- màu đỏ -->
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
					<label class="form-check-label1" for="flexCheckDefault">Màu Đỏ</label>
			</div>
			<!-- màu xanh -->
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
					<label class="form-check-label2" for="flexCheckDefault">Màu Xanh</label>
			</div>

			<!-- màu vàng -->
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
					<label class="form-check-label3" for="flexCheckDefault">Màu Vàng</label>
			</div>

			<!-- màu đen -->
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
					<label class="form-check-label4" for="flexCheckDefault">Màu Đen</label>
			</div>
			</div>
	</div>
	<!-- end COLOR -->

	<!-- prices -->
	<div class="card border-success text-dark">
			<div class="card-header bg-success text-white "data-toggle="collapse" data-target="#target4">GIÁ</div>
			<div class="card-body">
				<!-- men -->
			<a class="btn d-block" data-toggle="collapse" data-target="#target4" id="men">Giá Các Sản Phẩm</a>
			<div class="collapse" id="target4">
				<input type="radio" name="price" class="mr-2">200.000VND - 500.000VND</br>
				<input type="radio" name="price" class="mr-2">500.000VND - 1.000.000VND</br>
				<input type="radio" name="price" class="mr-2">1.000.000VND - 1.500.000VND</br>
				<input type="radio" name="price" class="mr-2">1500.000VND - 3.000.000VND</br>
				<input type="radio" name="price" class="mr-2">> 3.000.000VND</br>
				<input type="radio" name="price" class="mr-2">Tất Cả Giá</br>
			</div>
			</div>
	</div>
	<!-- end prices -->

	<!-- sidebar_ending -->
	<div class="card border-success text-dark">
			<div class="card-header bg-success text-white">
				<marquee class="text-center" direction="up">Lựa chọn Sản Phẩm</marquee>
			</div>
	</div>
	<!-- end sidebar_ending -->
	<div class="card sidebar_khuyenmai mt-3 w-100">
		<img src="gndshop_page/picture/product4.jpg"  alt="">
		<div class="khuyenmai_content">
			<h5>Khuyến mãi 50%</h5>
			<a href="shop.html" class="btn btn-success" id="xemthem">Xem Thêm</a>
		</div>
	</div>

</div>
<!------ end sidebar----- -->