<?php
	// session_start();
	// session_destroy();
	// die();
	if(isset($_POST['register'])){
		$nameRe = $_POST['name'];
		$emailRe = $_POST['email'];
		$passwordRe = md5($_POST['password']);
		$sql = "INSERT INTO dangky(tenguest,emailguest,matkhauguest) VALUES('".$nameRe."','".$emailRe."','".$passwordRe."')";
		if($emailRe==""|| $passwordRe==""||$nameRe==""){
			echo "<script>";
			echo ' window.open("index.php?action2=dangky","_self")';
			echo "</script>";
		}else{
			$query = mysqli_query($mysqli,$sql);
			$_SESSION['dangky'] = $nameRe;
			echo '<script language="javascript">';
			echo 'alert("Đăng ký thành công!")';
			echo '</script>';
			echo "<script>";
			echo ' window.open("index.php?action2=home","_self")';
			echo "</script>";
		}

	}

?>

<div style="height:200px">
	
</div>
<!-- ===============Begin Register=========== -->
	<div class="login">
		<div class="title-head">
			<h1>Đăng kí tài khoản</h1>
		</div>
		<div class="social-register">
			<p class="social-text">Nếu chưa có tài khoản hãy đăng kí tại đây</p>
			<div class="social">
				<a class="social-fb" href="#">
				<img src="gndshop_page/picture/fb-btn.svg">
				</a>
				<a class="social-gg" href="#">
					<img src="gndshop_page/picture/gp-btn.svg">
				</a>
			</div>
		</div>
		<div class="form">
			<form method="POST">
				<div class="first-name">
					<input class="form-input" placeholder=" " type="text" name="name">
					<label class="form-label" for="">Họ Và Tên</label>
					<span></span>
				</div>
				<div class="email">
					<input class="form-input" placeholder=" " type="email" name="email">
					<label class="form-label" for="">Email</label>
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
				<div class="register-btn">
					<button class="btn-reg" type="submit" name="register">Đăng kí</button>
					<a href="index.php?action2=dangnhap">Đăng nhập</a>
				</div>
			</form>
		</div>
	</div>
