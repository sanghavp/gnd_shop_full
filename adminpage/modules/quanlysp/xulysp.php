<?php 
	$mysqli = new mysqli("localhost","root","","gndshop2");

	// Check connection
	if ($mysqli->connect_errno) {
	  echo "Kết nối lỗi" . $mysqli->connect_error;
	  exit();
	}

?>


<?php
		$product_id = $_POST["id_sp"];
		$cate_id = $_POST["danhmuc_sp"];
		$type_cate_id= $_POST["loai_sp"];
		$product_name = $_POST["ten_sp"];
		$price = $_POST["gia_sp"];
		$description= $_POST["mota_sp"];
		$status = $_POST["trangthai_sp"];
		//xuly hinh anh
		$hinhanh = $_FILES['img']['name'];
		$hinhanh_tmp = $_FILES['img']['tmp_name'];
		$hinhanh = time().'_'.$hinhanh;
		$files = $_FILES['img2'];
		$file_names = $files['name'];
		$file_tmp = $files['tmp_name'];
	
		//thêm mới sản phẩm
	if(isset($_POST["insert_sp"]))
	{		

	//them
	$sql = "INSERT INTO sp(ID_Sp,Ten_Sp,ID_DanhMucSp,ID_LoaiSp,Gia_Sp,Mota_Sp,Hinhanh_Sp,Hinhanh_Mota,Trangthai_Sp) VALUES('".$product_id."','".$product_name."','".$cate_id."','".$type_cate_id."','".$price."','".$description."','".$hinhanh."','".serialize($file_names)."','".$status."')";
	mysqli_query($mysqli,$sql);
	move_uploaded_file($hinhanh_tmp,'product_images/'.$hinhanh);
	// nhiều ảnh
	$count = count($file_names);
	for($i=0;$i<$count;$i++){
		move_uploaded_file($file_tmp[$i],'product_images/'.$file_names[$i]);
	}
	header('Location:../../index.php?action=quanlysp&query=them');
	
	}elseif(isset($_POST['sua_sp'])){
		$id = $_GET['idsp'];
		if(!empty($_FILES['img']['name'])){
			$unpic = mysqli_query($mysqli,"SELECT * FROM sp WHERE ID_Sp='".$id."' LIMIT 1");
			while($rowunpic = mysqli_fetch_array($unpic)){
				echo $rowunpic['Hinhanh_Sp'];
				unlink('product_images/'.$rowunpic['Hinhanh_Sp']);

			}
			
			$sql_sua = "UPDATE sp SET ID_Sp='".$product_id."',Ten_Sp='".$product_name."',Gia_Sp='".$price."',Mota_Sp='".$description."',ID_DanhMucSp='".$cate_id."',ID_LoaiSp='".$type_cate_id."',Hinhanh_Sp='".$hinhanh."' WHERE ID_Sp='".$id."'";
			mysqli_query($mysqli,$sql_sua);
			move_uploaded_file($hinhanh_tmp,'product_images/'.$hinhanh);
			
		}else if(!empty($_FILES['img2']['name'][0])){
			$unpic2 = mysqli_query($mysqli,"SELECT * FROM sp WHERE ID_Sp='".$id."' LIMIT 1");
			while($rowunpic2 = mysqli_fetch_array($unpic2)){
				$images2 = unserialize($rowunpic2['Hinhanh_Mota']);
				foreach($images2 as $key => $value){
					unlink('product_images/'.$value);
				}

			}

			$sql_sua = "UPDATE sp SET ID_Sp='".$product_id."',Ten_Sp='".$product_name."',Gia_Sp='".$price."',Mota_Sp='".$description."',ID_DanhMucSp='".$cate_id."',ID_LoaiSp='".$type_cate_id."',Hinhanh_Mota='".serialize($file_names)."' WHERE ID_Sp='".$id."'";
			mysqli_query($mysqli,$sql_sua);
			$count = count($file_names);
			for($i=0;$i<$count;$i++){
				move_uploaded_file($file_tmp[$i],'product_images/'.$file_names[$i]);
			}
		}else{
			$sql_sua3 = "UPDATE sp SET ID_Sp='".$product_id."',Ten_Sp='".$product_name."',Gia_Sp='".$price."',Mota_Sp='".$description."',ID_DanhMucSp='".$cate_id."',ID_LoaiSp='".$type_cate_id."' WHERE ID_Sp='".$id."'";
			mysqli_query($mysqli,$sql_sua3);
		}
		header("Location:../../index.php?action=quanlysp&query=xem");

	}else{
		$idsp=$_GET['idsp'];
		$sql = "SELECT * FROM sp WHERE ID_Sp = '$idsp' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		while($row = mysqli_fetch_array($query)){
			unlink('product_images/'.$row['Hinhanh_Sp']);
			$images = unserialize($row['Hinhanh_Mota']);
			foreach($images as $key => $value){
				unlink('product_images/'.$value);
			}
		}
		$sql_xoa = "DELETE FROM sp WHERE ID_Sp='".$idsp."'";
		mysqli_query($mysqli,$sql_xoa);
		header("Location:../../index.php?action=quanlysp&query=xem");
		
	}

	
?>