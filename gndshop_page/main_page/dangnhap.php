<?php 
	if(isset($_POST['dangnhapguest'])){
		$emailguest = $_POST['email'];
		$passwordguest = md5($_POST['password']);
		$sql = "SELECT * FROM dangky WHERE '".$emailguest."'=emailguest AND '".$passwordguest."'=matkhauguest LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		$row = mysqli_num_rows($query);
		if($row>0){
			$row_data = mysqli_fetch_array($query);
			$_SESSION['dangnhap'] = $row_data;
			$user = $_SESSION['dangnhap'];
			echo "<script>";
			echo ' window.open("index.php?action2=home","_self")';
			echo "</script>";
		}else{

?>
		<div class="alert alert-warning alert-dismissible fade show" style="margin-top:100px" role="alert">
		  <strong>Warning!</strong> Tài khoản hoặc mật khẩu của quý khách không đúng
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>
	

<?php
		}


	}

?>
<div style="height:200px">
	
</div>
<!-- ===============Begin Login=========== -->
	<div class="login">
		<div class="title-head">
			<h1>Đăng nhập tài khoản</h1>
		</div>
		<div class="social">
			<a class="social-fb" href="#">
				<img src="gndshop_page/picture/fb-btn.svg">
			</a>
			<a class="social-fb" href="#">
				<img src="gndshop_page/picture/gp-btn.svg">
			</a>
		</div>
		<div class="form">
			<form method="POST">
				<div class="email">
					<input class="form-input" placeholder=" " type="email" name="email">
					<label class="form-label" for="">Email</span></label>
					<span></span>
				</div>
				<div class="pass">
					<input class="form-input" placeholder=" " type="password" name="password">
					<label class="form-label" for="">Mật khẩu</label>
					<span></span>

				</div>
			<!-- 	<div class="repass">
					<input class="form-input" placeholder=" " type="password" name="repass">
					<label class="form-label" for="">Nhập lại mật khẩu</label>
					<span></span>

				</div> -->
				<div class="login-btn">
					<button class="btn-log" type="submit" name="dangnhapguest">Đăng nhập</button>
					<a href="quenmatkhau.html" class="forgot-pass">Quên mật khẩu ?</a>
				</div>
				<p class="no-acc">
					Bạn chưa có tài khoản ? đăng kí <a href="index.php?action2=dangky">tại đây</a>
				</p>
			</form>
		</div>
	</div>


<!-- ===============end Login============= -->