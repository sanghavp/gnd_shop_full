
<?php
	if(isset($_GET['page'])){
		$page_current = $_GET['page'];
	}else{
		$page_current='';
	}
	if($page_current==''||$page_current==1){
		$begin = 0;
	}else{
		$begin = ($page_current*2)-2;
	}
	$iddm = $_GET['dmspnav'];
	$sql = "SELECT * FROM sp WHERE sp.ID_DanhMucSp='".$iddm."' LIMIT $begin,2" ;
	$query = mysqli_query($mysqli,$sql);

?>

<div class="row">
	<?php 
			$sql_dm_title= "SELECT * FROM danhmucsp WHERE danhmucsp.ID_DanhMucSp='".$iddm."'";
			$query_title= mysqli_query($mysqli,$sql_dm_title);
			$take_title = mysqli_fetch_array($query_title);
	?>
	<h5 class="ml-3"> SẢN PHẨM CỦA DANH MỤC: <?php echo $take_title['Ten_DanhMucSp'] ?></h5>
	<!-- filter-->
	<div class="col-12 d-inline-flex mb-2">
		
		<!-- filter left -->
		<div>
			<a href="#" class="btn active soft">
				<i class="bi bi-grid"></i>
			</a>
			<a href="#" class="btn btn-white soft">
				<i class="bi bi-view-stacked"></i>
			</a>
		</div>
		<!-- filter right -->
		<div class="ml-auto dropdown">
			<select name="" id="soft_dropdown" class="soft">
				<option value="">Sắp Xếp</option>
				<option value="">Tên A-Z</option>
				<option value="">Tên Z-A</option>
			</select>
		</div>
	</div>
<?php

	while($row=mysqli_fetch_array($query)){

?>
	<!------------ begin product --------------->
	<div class="col-md-3">
		<div class="Hproduct_card">
			<div class="Hproduct_top">
				<img src="adminpage/modules/quanlysp/product_images/<?php echo $row['Hinhanh_Sp'] ?>">
				<div class="overlay">
					<button type="button" class="btn btn-secondary">
						<a href="index.php?action2=chitietsp&idspct=<?php echo $row['ID_Sp'] ?>"><i class="fa fa-eye"></i></a>
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
				<h3><?php echo $row['Ten_Sp'] ?></h3>
				<h5><?php echo number_format($row["Gia_Sp"],0,",",".")." VNĐ" ?></h5>
				<form action="gndshop_page/main_page/cart_page/addcart.php?idsp=<?php echo $row['ID_Sp']?>&out=yes" method="POST">
				<button class="btn-success w-100 cardadd">
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
<?php
	$query_page =mysqli_query($mysqli,"SELECT * FROM sp WHERE sp.ID_DanhMucSp='".$iddm."'");
	$count_product = mysqli_num_rows($query_page);
	$page_product = ceil($count_product/2);
?>


<!-- Begin Shop-bottom-Bar -->
<div class="shop-bottom-bar d-flex align-items-center border-top pt-3 mt-3">
    <div class="mr-auto">Trang Hiện Tại: <?php echo $page_current ?> of <?php echo $page_product ?></div>
    <div class="ml-auto">
        <ul class="pagination">
        <?php 
        	$iddm = $_GET['dmspnav'];
        	for($i=1;$i<=$page_product;$i++){
        ?>
            <li class="page-item <?php if($i==$page_current){echo 'active';}else{ echo '';} ?>">
                <a class="page-link " href="index.php?action2=shopmenu&dmspnav=<?php echo $iddm ?>&page=<?php echo $i ?>"><?php echo $i ?></a>
            </li>
        <?php 
        	}
        ?>


        </ul>
    </div>
</div>
<!-- END Shop-bottom-Bar -->
