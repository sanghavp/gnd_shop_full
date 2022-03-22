<?php 
	$mysqli = new mysqli("localhost","root","","gndshop2");

	// Check connection
	if ($mysqli->connect_errno) {
	  echo "Kết nối lỗi" . $mysqli->connect_error;
	  exit();
	}
?>



