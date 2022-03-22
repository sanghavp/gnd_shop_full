

<?php

	include("../../config/config.php");
	// thêm danh mục sản phẩm
	if(isset($_POST['them_danhmuc'])){
		$ten_danhmuc = $_POST["ten_danhmuc"];
		$sql_themdanhmuc = "INSERT INTO danhmucsp(Ten_DanhMucSp) VALUES ('".$ten_danhmuc."')";
		mysqli_query($mysqli,$sql_themdanhmuc);
		header("Location:../../index.php?action=quanlydanhmuc&query=them");
	}elseif(isset($_POST['sua_danhmuc'])){
		$danhmucnew = $_POST['ten_danhmuc'];
		$id = $_GET['id'];
		$query = mysqli_query($mysqli,"UPDATE danhmucsp SET Ten_DanhMucSp='".$danhmucnew."' WHERE ID_DanhMucSp='".$id ."'");
		header("Location:../../index.php?action=quanlydanhmuc&query=xem");
	}else{
		$id_danhmuc = $_GET['iddanhmuc'];
		$sql_xoadanhmuc = "DELETE FROM danhmucsp WHERE  ID_DanhMucSp='".$id_danhmuc."'";
		mysqli_query($mysqli,$sql_xoadanhmuc);
		header("Location:../../index.php?action=quanlydanhmuc&query=xem");
	}
    
?>