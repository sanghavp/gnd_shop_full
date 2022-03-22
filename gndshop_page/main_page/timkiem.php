<?php
	if(isset($_POST['keyword'])){
		$keyword = $_POST['keyword'];
	}
	$sql = "SELECT * FROM sp WHERE sp.Ten_Sp LIKE '%".$keyword."%'";
	$query = mysqli_query($mysqli,$sql);


?>
<!--== 5.BEGIN HEAD ==-->
    <div class="fluid-container">
      <div class="row align-items-center" id="head_shop">
        <img src="gndshop_page/picture/testjpg.jpg" alt="">
      </div>
    </div>
<!--== end head ==-->
<!-- BEGIN SHOP -->
	<div class="fluid-container shop">
		<div class="row">
			<!-- BEGIN SIDEBAR -->
			<?php 
				include("shop_page/shop_module/sidebar.php");

			?>
			<!------ end sidebar----- -->

			<!-- ====PRODUCT_SHOP=== -->
			<div class="col-md-9">
				<h3>Kết quả Tìm kiếm: <?php echo $keyword ?></h3>
				<h5>
					<?php 
						if(mysqli_num_rows($query)==0){
							echo "Không có sản phẩm bạn cần tìm kiếm!";
						}
					?>
						
				</h5>
				<div class="row">
<?php 
	while($row=mysqli_fetch_array($query)){

?>
							<!------------ begin product --------------->
							<div class="col-md-3">
								<div class="Hproduct_card">
									<div class="Hproduct_top">
										<img src="adminpage/modules/quanlysp/product_images/<?php echo $row['Hinhanh_Sp'] ?>">
										<div class="overlay">
											<button type="button" class="btn btn-secondary">
												<a href="index.php?action2=chitietsp&idspct=<?php echo $row['ID_Sp'] ?>"><i class="fa fa-eye"></i></a>
											</button>
											<button type="button" class="btn btn-secondary">
												<i class="fa fa-heart-o"></i>
											</button>
											<button type="button" class="btn btn-secondary">
												<i class="fa fa-shopping-cart"></i>
											</button>
										</div>
										<div class="sale">
											sale
										</div>				
									</div>
									<div class="Hproduct_content text-center">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-alt"></i>
										<i class="fa fa-star-o"></i>
										<h3><?php echo $row['Ten_Sp'] ?></h3>
										<h5><?php echo $row['Gia_Sp'] ?></h5>
										<button class="btn-success w-100 cardadd">
											<i class="fa fa-shopping-cart text-white"></i>Thêm Vào Giỏ
										</button>
									</div>
								</div>
							</div>
					<!-- ============= -->
<?php 
	}
?>
				</div>				
			</div>
			<!-- end col-9 -->
		</div>
	</div>

<!-- ---end shop---- -->