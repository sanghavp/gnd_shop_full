
<?php
	include("home_module/slide.php");
	include("home_module/introduction.php");    
   	include("home_module/head.php");
   	include("home_module/page_welcome.php");
?>
<!-- =============Giá sốc cuối tuần ============ -->

	<div class="fluid-container">
		<div class="deal row">
			<div class="deal_head col-12">
				<div class="row">
					<div class="col-md-6">
						<i class="fas fa-bolt" style="color:coral"></i>
					 	GIÁ SỐC CUỐI TUẦN 
					</div>
					<div class="col-md-6 text-right" id="demo">
					
					</div>
				</div>
			</div>
			<div class="deal_content">
				<div id="carouselExampleIndicators5" class="carousel slide" data-ride="carousel">

					<!-------------slide inner------------>

					<div class="carousel-inner">
						<!-- carousel-items -->
						<div class="carousel-item active">
							<div class="row">
								<?php 
									$query2 = mysqli_query($mysqli,"SELECT * FROM sp ORDER BY RAND() LIMIT 6");
									while($row2=mysqli_fetch_array($query2)){

								 ?>
								<div class="col-md-2">
								<div class="Hproduct_card">
									<div class="Hproduct_top">
										<img src="adminpage/modules/quanlysp/product_images/<?php echo $row2['Hinhanh_Sp'] ?>">
										<div class="overlay">
											<button type="button" class="btn btn-secondary">
											<a href="index.php?action2=chitietsp&idspct=<?php echo $row2['ID_Sp'] ?>"><i class="fa fa-eye"></i></a>
											</button>
											<button type="button" class="btn btn-secondary">
											<i class="fa fa-heart-o"></i>
											</button>
											<button type="button" class="btn btn-secondary">
												<a href="?action2=cart">
													<i class="fa fa-shopping-cart"></i>	
												</a>
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
										<h3><?php echo $row2['Ten_Sp'] ?></h3>
										<!-- <s><h5>356.000VND</h5></s> -->
										<h5><?php echo $row2['Gia_Sp'] ?></h5>
										<form method="POST" action="gndshop_page/main_page/cart_page/addcart.php?idsp=<?php echo $row2['ID_Sp']?>&out=yes">
											<button class="btn-success w-100 cardadd" type="submit">
												<i class="fa fa-shopping-cart text-white"></i>Thêm Vào Giỏ
											</button>	
										</form>
									</div>
								</div>
								</div>
								<?php 
									}
								 ?>
								<!-- ====================================== -->
							</div>
						</div>
						<!-- carousel-items -->
						<div class="carousel-item">
							<div class="row">
								<?php
									$query3 = mysqli_query($mysqli,"SELECT * FROM sp ORDER BY RAND() LIMIT 6");
									while($row3=mysqli_fetch_array($query3)){

								 ?>


								<div class="col-md-2">
								<div class="Hproduct_card">
									<div class="Hproduct_top">
										<img src="adminpage/modules/quanlysp/product_images/<?php echo $row3['Hinhanh_Sp'] ?>">
										<div class="overlay">
											<button type="button" class="btn btn-secondary">
											<a href="index.php?action2=chitietsp&idspct=<?php echo $row3['ID_Sp'] ?>"><i class="fa fa-eye"></i></a>
											</button>
											<button type="button" class="btn btn-secondary">
											<i class="fa fa-heart-o"></i>
											</button>
											<button type="button" class="btn btn-secondary">
												<a href="?action2=cart">
													<i class="fa fa-shopping-cart"></i>	
												</a>
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
										<h3><?php echo $row3['Ten_Sp'] ?></h3>
										<!-- <s><h5>356.000VND</h5></s> -->
										<h5><?php echo $row3['Gia_Sp'] ?></h5>
										<form method="POST" action="gndshop_page/main_page/cart_page/addcart.php?idsp=<?php echo $row3['ID_Sp']?>&out=yes">
											<button class="btn-success w-100 cardadd" type="submit">
												<i class="fa fa-shopping-cart text-white"></i>Thêm Vào Giỏ
											</button>	
										</form>
									</div>
								</div>
								</div>
								<!-- ====================================== -->
								<?php 
									}
								 ?>
								<!-- ====================================== -->
							</div>
						</div>
					</div>
					<!-------------slide controller------------>
					<a class="carousel-control-prev" href="#carouselExampleIndicators5" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" ></span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators5" role="button" data-slide="next">
					<span class="carousel-control-next-icon"></span>
					</a>
				</div>
			</div>
		</div>
	</div>
<!-- ================================================= -->

<!--== 6.FEATURE PRODUCT ==-->
	<div class="fluid-container feature">
		<h1>SẢN PHẨM NỔI BẬT</h1>
	</div>
<!--- end feature product --->

<!--== 7.HOME_PRODUCT ==-->
	<div class="fluid-container over_home_product">
		<div class="product_side product_side1">
			<li>
				<img src="gndshop_page/picture/doaiavatar.jpg" title="Sản Phẩm Mới ra">
			</li>
		</div>
		<div class="product_side product_side2">
			<li>
				<img src="gndshop_page/picture/ngocavatar.jpg" title="Sản Phẩm Mới ra">
			</li>
		</div>
		<div class="product_side product_side3">
			<li>
				<img src="gndshop_page/picture/ngoanavatar.jpg" title="Sản Phẩm Mới ra">
			</li>
		</div>
		<div class="product_side product_side4">
			<li>
				<img src="gndshop_page/picture/sangavatar.jpg" title="Sản Phẩm Mới ra">
			</li>
		</div>

			
	<div class="fluid-container home_product">
		<!-- <h2>Sản Phẩm mới</h2> -->
		<div class="row">
<?php
	$sql = "SELECT * FROM sp ORDER BY RAND() LIMIT 12";
	$query = mysqli_query($mysqli,$sql);	
	while($row = mysqli_fetch_array($query)){
		
?>
			<!------------ begin product --------------->
			<div class="col-md-2">
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
								<a href="?action2=cart">
									<i class="fa fa-shopping-cart"></i>	
								</a>
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
						<h5><?php echo number_format($row["Gia_Sp"],0,",",".")." VNĐ" ?></h5>
						<form method="POST" action="gndshop_page/main_page/cart_page/addcart.php?idsp=<?php echo $row['ID_Sp']?>&out=yes">
							<button class="btn-success w-100 cardadd" type="submit">
								<i class="fa fa-shopping-cart text-white"></i>Thêm Vào Giỏ
							</button>	
						</form>
						
					</div>
				</div>
			</div>
<?php 	
	}
?>

		</div>
	</div>
	</div>
<?php 
	include("gndshop_page/general_module/endfeatureproduct.php");

?>