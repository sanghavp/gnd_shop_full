<?php

	if(isset($_SESSION['dangnhap'])){
		$user = $_SESSION['dangnhap'];
	}
	if(isset($_POST['xacnhandon'])){

		$idkh= $user['ID_dangky'];
		$madon = rand(0,9999);
		$diachi=$_POST['diachi_thanhtoan'];
		$sdt = $_POST['phone_contact'];
		$sql="INSERT INTO donhang(ID_khachhang,ma_donhang,diachi_khachhang,sdt_khachhang,status_donhang) VALUES('".$idkh."','".$madon."','".$diachi."','".$sdt."',1)";
		$query= mysqli_query($mysqli,$sql);
		if($query){
			if(isset($_SESSION['cart'])){
				foreach($_SESSION['cart'] as $key => $value){
					$sql1= "INSERT INTO chitietdonhang(ID_Sp,Size_Sp,Mausac_Sp,Soluong_Sp,ma_donhang,Gia_Sp) VALUES('".$value['id']."','".$value['size']."','".$value['color']."','".$value['soLuongSp']."','".$madon."','".$value['giaSp']."')";
					mysqli_query($mysqli,$sql1);
				}
			}
			unset($_SESSION['cart']);
			echo '<script language="javascript">';
			echo 'alert("Đặt hàng thành công! Cảm ơn quý khách")';
			echo '</script>';	

		}
		echo "<script>";
		echo ' window.open("index.php?action2=home","_self")';
		echo "</script>";

	}
	

 ?>

<!-- ===============begin ship================ -->

<div class="giaohang_overr">
<div class="fluid-container text-center mx-4" >
	<h1>THÔNG TIN MUA HÀNG</h1>
	<div class="row">
		<div class="checkout__ship">
			<div class="checkout__icon">
				<div class="checkout__step">
					<span class="action">
						<i class="fas fa-map-marker-alt text-primary"></i>
					</span>
					<div></div>
				</div>
				<p class="run1">Vận chuyển</p>
			</div>

			<div class="checkout__icon">
				<div class="checkout__step">
					<span>
						<i class="far fa-credit-card"></i>
					</span>
					<div></div>
				</div>
				<p class="run2">Thanh Toán</p>

			</div>

<!-- 		<div class="checkout__icon">
				<div class="checkout__step">
					<span>3</span>
					<div></div>
				</div>
				<p class="run3">Order Review</p>
			</div>

			<div class="checkout__icon">
				<div class="checkout__step">
					<span>4</span>
				</div>
				<p class="run4" >Order placed</p>
			</div> -->
		</div>
	</div>

	<div class="row">
		<div class="col-md-6 text-left p-0">
			<div class="checkout__shipping d-inline-flex ">
				<div class="checkout__shipping__left ">
					<P>Thông Tin Vận Chuyển</P>
				</div>
				<div class="checkout__shipping__right">
					<P>
						Đăng nhập hoặc tạo tài khoản
						<a class="" href="dangnhap.html">Đăng Nhập</a>
					</P>
				</div>
			</div>
			<hr class="p-0" style="width:90%;margin-left:0">
			<!-- ================================================= -->
			<form method="POST" action="">
				<div class="name_contact">
					<input class="form-input" placeholder=" " type="text" name="name_contact" value="<?php echo $user['tenguest'] ?>">
					<label class="form-label" for="">Họ và tên </span></label>
					<span></span>
				</div>
				<div class="email">
					<input class="form-input" placeholder=" " type="email" name="email" value="<?php echo $user['emailguest'] ?>">
					<label class="form-label" for="">Email</label>
					<span></span>

				</div>
				<div class="phone_contact">
					<input class="form-input" placeholder=" " type="tel" name="phone_contact" pattern="[0]{1}[1-9]{1}[0-9]{8}">
					<label class="form-label" for="">Số Điện Thoại</label>
					<span></span>

				</div>
				<div class="diachi_thanhtoan">
					<input class="form-input" placeholder=" " type="text" name="diachi_thanhtoan">
					<label class="form-label" for="">Địa chỉ</span></label>
					<span></span>

				</div>

			

			<!-- ======================================================= -->

			<!--Adress 2-->
    
 
            <!--Adress 1-->
			<!-- phương thức vận chuyển -->

			<div class="row justify-content-center p-3 complete_1">
				<input href="thanhtoan.html" type="submit" class="btn btn-success" value="Xác Nhận Đơn Hàng" name="xacnhandon"></input>
			</div>
			</form>
		</div>


		<div class="col-md-6 giaohang" style="">
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">Sản Phẩm</th>
			      <th scope="col">Đơn Giá</th>
			      <th scope="col">Số Lượng</th>
			      <th scope="col">Thành tiền</th>
			    </tr>
			  </thead>
			  <tbody>
				  	<?php
				  		
				  		$tongtien =0;
				  		if(isset($_SESSION['cart'])){
				  		foreach($_SESSION['cart'] as $key => $value){
					  		$thanhtien = $value['soLuongSp'] * $value['giaSp'];
					  		$tongtien = $tongtien + $thanhtien;
				  	?>
			    <tr>
			      <th scope="row"><?php echo $value['tenSp'] ?></th>
			      <td><?php echo number_format($value['giaSp'],0,'.',',').' VNĐ' ?></td>
			      <td><?php echo $value['soLuongSp'] ?></td>
			      <td><?php echo number_format($thanhtien,0,'.',',').' VNĐ'?></td>
			    </tr>
			  <?php 
			  	}}
			   ?>
			   <tr>
			   		<td colspan="4">Tổng Tiền: <?php echo number_format($tongtien,0,'.',',').' VNĐ'?></td>
			   </tr>
			  
			  </tbody>
			</table>
		</div>
	</div>

	<div class="row">


		<div class="col-md-4">
			
		</div>

	</div>

</div>
</div>
<!-- --------------end ship-------------- -->
