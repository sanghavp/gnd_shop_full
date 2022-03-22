<?php 
	$mysqli = new mysqli("localhost","root","","gndshop2");

	// Check connection
	if ($mysqli->connect_errno) {
	  echo "Kết nối lỗi" . $mysqli->connect_error;
	  exit();
	}
?>

<?php
	
	if(isset($_GET['codeCart'])){
		$code_cart = $_GET['codeCart'];
	}
	mysqli_query($mysqli,"UPDATE donhang SET status_donhang=0 WHERE ma_donhang='".$code_cart."'");
	header("Location:../../index.php?action=quanlydh&query=xemdh");


?>