<?php
	if(isset($_SESSION['cart'])){
		$cart=$_SESSION['cart'];
	}
	

?>
<!-- ===============begin cart==================== -->
	<div class="fluid-container">
		<div class="cart_banner">
			<img src="gndshop_page/picture/giohang.jpg" alt="">
			<!-- <div class="cart_inner">
				<h1>Giỏ Hàng</h1>	
			</div> -->
		</div>
	</div>
	<div class="fluid-container mx-3 mt-3">
		<p>
				<?php 
					if(isset($_SESSION['dangnhap'])){
						echo "Xin chào ".$_SESSION['dangnhap']['tenguest'];
					}else{
						echo " ";
					}

				?>
		</p>
		<div class="row mb-2">
			<div class="col-md-9 cart__container mb-2">
				<table class="table text-center">
				  <thead>

				    <tr>
				      <th scope="col">STT</th>
				      <th scope="col">Hình ảnh</th>
				      <th scope="col">Tên Sản Phẩm</th>
				      <th scope="col">Size</th>
				      <th scope="col">Màu Sắc</th>
				      <th scope="col">Số lượng</th>
				      <th scope="col">Giá</th>
				      <th scope="col">Thành Tiền</th>
				      <th scope="col">Xóa</th>
				    
				    </tr>
				  </thead>
				  <tbody>
				  	<?php
				  		$i = 0;
				  		$tongtien =0;
				  		if(isset($_SESSION['cart'])){
				  			foreach($cart as $key => $value){
					  		$thanhtien = $value['soLuongSp'] * $value['giaSp'];
					  		$tongtien = $tongtien + $thanhtien;
					  		$i++;	  	
				  	?>
				    <tr>
				      <td><?php echo $i?></td>
				      <td>
				      	<img width="250px" src="adminpage/modules/quanlysp/product_images/<?php echo $value['hinhAnhSp'] ?>"
                            alt="">	
				      </td>
				      <td><?php echo $value['tenSp'] ?></td>
				      <td>
				      	<?php 
				      		 $size = $value['size'];
				      		 if($size==1){
				      		 	echo "S";
				      		 }elseif($size==2){
				      		 	echo "M";
				      		 }elseif($size==3){
				      		 	echo "L";
				      		 }elseif($size==4){
				      		 	echo "XL";
				      		 }elseif($size==5){
				      		 	echo "XXL";
				      		 }

				      	 ?>

				      </td>
				      <td>
				      	<?php 
				      		 $color = $value['color'];
				      		 if($color=='do'){
				      		 	echo "Đỏ";
				      		 }elseif($color=='xanh'){
				      		 	echo "Xanh";
				      		 }elseif($color=='vang'){
				      		 	echo "Vàng";
				      		 }elseif($color=='den'){
				      		 	echo "Đen";
				      		 }

				      	 ?>

				      </td>

				      <td >
				        <div class="cart__number ">
	                        <a class="cart__prev" id="cart_prev2" href="gndshop_page/main_page/cart_page/addcart.php?tru=<?php echo $value['id'] ?>">-</a>
	                        <div class="" id="cart_num2"><?php echo $value['soLuongSp'] ?></div>
	                        <a class="cart__next" id="cart_prev2" href="gndshop_page/main_page/cart_page/addcart.php?cong=<?php echo $value['id'] ?>">+</a>
                    	</div>		
				      </td>
				      <td><?php echo number_format($value['giaSp'],0,'.',',').' VNĐ' ?></td>
				      <td><?php echo number_format($thanhtien,0,'.',',').' VNĐ'?></td>
				      <td>
				      	<a href="gndshop_page/main_page/cart_page/addcart.php?xoacart=<?php echo $value['id'] ?>" class="btn btn-danger">Xóa</a>
				      </td>

				    </tr>
				    <?php 
				    	}}
				    ?>
				    <tr>
				    	<td colspan="8" class="text-center">
				    		<a href="gndshop_page/main_page/cart_page/addcart.php?xoatatca=1" class="btn btn-danger m-2 p-2">Xóa Tất Cả</a>
				    	</td>

				    </tr>
			
				  </tbody>
				</table>
			</div>

			

			<div class="col-md-3">
				<div class="cart__right p-1">
				<div class="cart__top row">
					<div class="col-md-6">
						Tạm tính
					</div>
					<div class="col-md-6 totalprice_cart" >
						<?php echo number_format($tongtien,0,'.',',').' VNĐ' ?>
					</div>

                </div>
                <div class="cart__center row">
                   <div class="col-md-6">
						<h5>Thành Tiền</h5>	
					</div>
					<div class="col-md-6">
						<h5 class="totalprice_cart"><?php echo number_format($tongtien,0,'.',',').' VNĐ' ?></h5>
					</div>
                </div>
                <div class="ml-1 text-center cart__bottom">
                	<?php

                		if(isset($_SESSION['dangnhap'])&&$i>=1){
                	?>
                			<a href='?action2=thanhtoan' class='btn btn-danger mb-1'>Thanh Toán Ngay</a>
                	<?php 
                		}else if(isset($_SESSION['dangnhap'])&&$i<1){
                	?>
                		<a href='?action2=home' class='btn btn-danger mb-1'>Thêm Sản Phẩm Vào Giỏ</a>
                	<?php 
                		}else{
                	?>
                		
                			<a href='?action2=dangky' class='btn btn-danger mb-1'>Đăng Ký Để Thanh Toán</a>
                	<?php 
                		}
                	
                	?>
                	
                	<a href="index.php?action2=home" class="btn btn-info mb-1">Tiếp tục mua sắm</a>
                	
                </div>
                </div>
			</div>
		</div>
	
			
		
	</div>
