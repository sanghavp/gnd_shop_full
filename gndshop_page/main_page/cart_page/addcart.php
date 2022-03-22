<?php
	session_start();
	// session_destroy();
	// die();
?>
<?php
	include("../../../adminpage/config/config.php");
	if(isset($_GET['idsp']) && $_GET['out']){
		$id = $_GET['idsp'];	
		$out = $_GET['out'];
	
	$sql = "SELECT * FROM sp WHERE '".$id."'=ID_Sp";
	$query = mysqli_query($mysqli,$sql);
	$product = mysqli_fetch_array($query);

	$items = [
		'id' => $product['ID_Sp'],
		'tenSp' => $product['Ten_Sp'],
		'hinhAnhSp' => $product['Hinhanh_Sp'],
		'giaSp' => $product['Gia_Sp'],
		'soLuongSp' => 1,
		'size' => " ",
		'color' => " ",
	];
	
	if(isset($_SESSION['cart'][$id])&&$out=='yes'){
			$_SESSION['cart'][$id]['soLuongSp'] +=1;
		
	}elseif(isset($_SESSION['cart'][$id])&&$out=='no'){
		$_SESSION['cart'][$id]['soLuongSp'] += $_POST['quantity'];
		$_SESSION['cart'][$id]['size'] = $_POST['size'];
		$_SESSION['cart'][$id]['color'] = $_POST['color'];

	}elseif(!isset($_SESSION['cart'][$id])&&$out=='no'){
		$_SESSION['cart'][$id] = $items;
		$_SESSION['cart'][$id]['soLuongSp'] = $_POST['quantity'];
		$_SESSION['cart'][$id]['size'] = $_POST['size'];
		$_SESSION['cart'][$id]['color'] = $_POST['color'];


	}
	else{
			$_SESSION['cart'][$id] = $items;
			$_SESSION['cart'][$id]['size'] = 1;
			$_SESSION['cart'][$id]['color'] = "do";
			
	}
	


	header("Location:../../../index.php?action2=home");
	}
?>

<?php 
//xoa toan bo
	if(isset($_GET['xoatatca']) && $_GET['xoatatca']==1){
		unset($_SESSION['cart']);
		header("Location:../../../index.php?action2=cart");
	}
//xoa mot cai
	if(isset($_GET['xoacart'])){
		$idcart = $_GET['xoacart'];
		unset($_SESSION['cart'][$idcart]);
		header("Location:../../../index.php?action2=cart");
	}
//them so luong
	if(isset($_GET['cong'])){
		$idcong=$_GET['cong'];
			$_SESSION['cart'][$idcong]['soLuongSp'] +=1;	
		header("Location:../../../index.php?action2=cart");
		
	}
	if(isset($_GET['tru'])){
		$idcong=$_GET['tru'];
		if($_SESSION['cart'][$idcong]['soLuongSp']<=1){
			$_SESSION['cart'][$idcong]['soLuongSp']=1;
		}else{

			$_SESSION['cart'][$idcong]['soLuongSp'] -=1;	
		}
		header("Location:../../../index.php?action2=cart");
	}


 ?>