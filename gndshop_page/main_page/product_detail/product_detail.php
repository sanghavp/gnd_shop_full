<div id="top_detail_pro" style="margin-top:100px">
	

</div>


<!-- BEGIN SHOP -->
	<div class="fluid-container shop">
		<div class="row">
			<?php 
				include("gndshop_page/main_page/shop_page/shop_module/sidebar.php");

			
			?>
			
			<!------ end sidebar----- -->

			<!-- ====PRODUCT_SHOP=== -->
			<div class="col-md-9">
			<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="row" style="margin-top: 30px;">
					<div class="col-md-12 col-lg-6 col-xm-12">
						<?php
							if(isset($_GET['idspct'])){
								$idsp = $_GET['idspct'];
								$sql = "SELECT * FROM sp WHERE ID_Sp='".$idsp."'";
								$result = mysqli_query($mysqli, $sql);
								if (mysqli_num_rows($result) > 0) {
									// output data of each row
									// khởi tạo biến lưu ảnh
									while($row = mysqli_fetch_assoc($result)) {
										$images = unserialize($row["Hinhanh_Mota"]);
										$imgShow = '';
										$imgShowNav = '';
										foreach($images as $key => $value){
											if($key==0){
												$value= $row['Hinhanh_Sp'];
											}
											
											$imgShow .="<div  style='height: 420px;display: flex; justify-content: center; align-items: center;'>

																<img src='./adminpage/modules/quanlysp/product_images/".$value."' style='height:420px;'>
																
															</div>";
											$imgShowNav .="<div style='display: flex; justify-content: center; align-items: center;'>
																<img src=' ./adminpage/modules/quanlysp/product_images/".$value."' style='width:80%;height:220px;'>
															</div>";
										}
							
						?>
						<div class="showprd-img">

							<?php echo $imgShow?>
						</div>
						
						<div class="showprd-img__nav">
							<?php echo $imgShowNav?>
						</div>
						<?php
									}
								}
							}
						?>
					</div>
					<div class="col-md-12  col-lg-6 col-xm-12">
						<div class="options">
						<?php
							if(isset($_GET['idspct'])){
								$idsp = $_GET['idspct'];
								$sql = "SELECT * FROM sp WHERE ID_Sp='".$idsp."'";
								$result = mysqli_query($mysqli, $sql);
								if (mysqli_num_rows($result) > 0) {
									// output data of each row
									// khởi tạo biến lưu ảnh
									while($row = mysqli_fetch_assoc($result)) {
										
							
						?>
							<h1 class="product-name"><?php echo $row["Ten_Sp"]?></h1>
							<form action="gndshop_page/main_page/cart_page/addcart.php?idsp=<?php echo $row['ID_Sp'] ?>&out=no" method="POST">
								<div class="detail-brand">
									<b>Loại sản phẩm:&nbsp;</b><a href="#" style="text-decoration:none; "><h2 style="font-size: 16px;margin-bottom:0px;color:coral">
										<?php
											$show_cate = "SELECT * FROM loaisp WHERE ID_LoaiSp='".$row["ID_LoaiSp"]."' LIMIT 1";
											$kq = mysqli_query($mysqli, $show_cate);
											if (mysqli_num_rows($kq) > 0) {
												// output data of each row
												while($thamchieu2 = mysqli_fetch_assoc($kq)) {
													echo $thamchieu2["Ten_LoaiSp"];
												}
											}

										?>
									</h2></a>
								</div>
								<div class="detail-category">
									<b>Danh mục sản phẩm:&nbsp;</b><a href="#" style="text-decoration:none; "><h2 style="font-size: 16px;margin-bottom:0px;color:coral">
										<?php
											$show_cate = "SELECT * FROM danhmucsp WHERE ID_DanhMucSp='".$row["ID_DanhMucSp"]."' LIMIT 1";
											$kq = mysqli_query($mysqli, $show_cate);
											if (mysqli_num_rows($kq) > 0) {
												// output data of each row
												while($thamchieu = mysqli_fetch_assoc($kq)) {
													echo $thamchieu["Ten_DanhMucSp"];
												}
											}

										?>
									</h2></a>
								</div>
								<div class="detail-status">
									<b style="color: red;">Trạng thái: &nbsp;</b><span style="color: red;"><?php
										if($row["Trangthai_Sp"]!=0){
											echo "Còn hàng";
										}else{
											echo "hết hàng";
										}			
									?></span>
								</div>
								<div class="detail-size">
									<label style="float: left;margin-right:2px">Size </label>
									<select  name="size" class="form-control" >
										<option value="1">S</option>
										<option value="2">M</option>
										<option value="3">L</option>
										<option value="4">XL</option>
										<option value="5">XXL</option>
									</select>
									
								</div>

								<div class="detail-size mt-2">
												
									<label style="float: left;margin-right:2px">Màu</label>
									<select  name="color" class="form-control" >
										<option value="do">Màu đỏ</option>
										<option value="xanh">Màu xanh</option>
										<option value="vang">Màu vàng</option>
										<option value="den">Màu đen</option>
										
									</select>
									
								</div>
								<div class="detail-quantity my-2">
									<div class="input-group">
										<span style="float: left; margin-right:2px">Số Lượng</span>
										<span class="input-group-btn">
											<button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
												<i class="fas fa-minus"></i>
											</button>
										</span>
										<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
										<span class="input-group-btn">
											<button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
												<i class="fas fa-plus"></i>
											</button>
										</span>
									</div>
								</div>
								<p class="detail-price">
									<b style="color: red;">
										<?php
											echo number_format($row["Gia_Sp"],0,",",".")." VNĐ";
										?>
									</b>
								</p>
								<div class="detail-cart">
								<p>
									<a href="?action2=contact" class="btn btn-success ">Liên Hệ</a>
								</p>
								<p><button class="btn btn-danger "><i class="i fa fa-shopping-cart"></i>&nbsp; Thêm vào giỏ hàng</button></p>
								</div>
							</form>
							
						</div>
						
					</div>
				</div>
				<div class="row view-detail">
					<div class="detail-details">
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
							<a class="nav-link active text-dark" data-toggle="tab" href="#home">Mô tả sản phẩm</a>
							</li>
							<li class="nav-item">
							<a class="nav-link text-dark" data-toggle="tab" href="#menu1">Nhận xét Sản Phẩm</a>
							</li>
						</ul>
					
						<!-- Tab panes -->
						<div class="tab-content">
							<div id="home" class="container tab-pane active"><br>
								<h3>Mô tả sản phẩm</h3>
								<p>
									<?php echo $row["Mota_Sp"]?>
								</p>
							</div>
							<div id="menu1" class="container tab-pane fade"><br>
								<h3>Nhận xét Sản Phẩm</h3>
								<p>Nhận xét đang cập nhật</p>
							</div>
						</div>
					</div>
				</div>
				<?php
									}
								}
							}
						?>
				<!-- ==================== -->
				
				<div class=" row detail-comment">
					<div class="comment-banner">
						<p><b>NHẬN XÉT SẢN PHẨM</b></p>
					</div>
					<span class="border"></span>
					<!-- thêm bình luận trên FB -->
					<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="" data-numposts="3">
					</div>
				</div>
				<!-- ================================	 -->
				<div class="product-most row">
					<div class="product-intro col-12">
						<div>
							<h2><b>SẢN PHẨM TƯƠNG TỰ</b></h2>
							<div class="triangle"></div>
						</div>
					</div>
					<?php
						$idsp = $_GET['idspct'];
						$query = mysqli_query($mysqli,"SELECT * FROM sp WHERE ID_Sp='".$idsp."'");
						$keyword = mysqli_fetch_array($query)['Ten_Sp'];
						$keyword_cvt = substr($keyword,0,1);
						$sptuongtu = mysqli_query($mysqli,"SELECT * FROM sp WHERE Ten_Sp LIKE '".$keyword_cvt."%' LIMIT 8");
						while($rowsp=mysqli_fetch_array($sptuongtu)){

					 ?>

					<div class="most-item col-sm-6 col-md-6 col-lg-3">
						<div class="Hproduct_card">
							<div class="Hproduct_top">
								<img src="adminpage/modules/quanlysp/product_images/<?php 	echo $rowsp['Hinhanh_Sp'] ?>">
								<div class="overlay">
									<button type="button" class="btn btn-secondary">
									<a href="index.php?action2=chitietsp&idspct=<?php $rowsp['ID_Sp'] ?>"><i class="fa fa-eye"></i></a>
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
								<h3><?php echo $rowsp['Ten_Sp'] ?></h3>
								<h5><?php echo number_format($rowsp['Gia_Sp'],0,".",",")." VNĐ" ?></h5>
								<form method="POST" action="gndshop_page/main_page/cart_page/addcart.php?idsp=<?php echo $rowsp['ID_Sp']?>&out=yes">
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

			
				
			</div>
			<!-- end col-9 -->
		</div>
	</div>
