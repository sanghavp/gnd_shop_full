<div class="fluid-container">
	<?php
	
		if(isset($_GET['action2'])){
			$dirpage=$_GET['action2'];
		}else{
			$dirpage='';
		}
		if($dirpage=='shopmenu'){
			include("shop_page/shop.php");
		}else if($dirpage=='aboutus'){
			include("aboutus_page/aboutus.php");
		}else if($dirpage=='contact'){
			include("contact_page/contact.php");
		}else if($dirpage=='cart'){
			include("cart_page/cart.php");
		}else if($dirpage=="chitietsp"){
			include("product_detail/product_detail.php");
		}else if($dirpage=="dangky"){
			include("dangky.php");
		}else if($dirpage=="dangnhap"){
			include("dangnhap.php");
		}else if($dirpage=="timkiem"){
			include("timkiem.php");
		}else if($dirpage=="thanhtoan"){
			include("thanhtoan.php");
		}else{
			include("home_page/home.php");
		}
	?>
</div>