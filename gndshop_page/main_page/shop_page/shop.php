
<!--== 5.BEGIN HEAD ==-->
    <div class="fluid-container">
      <div class="row align-items-center" id="head_shop">
        <img src="gndshop_page/picture/testjpg.jpg" alt="">
      </div>
    </div>
<!--== end head ==-->
<!-- BEGIN SHOP -->
	<div class="fluid-container shop">
		<div class="row">
			<!-- BEGIN SIDEBAR -->
			<?php 
				include("shop_module/sidebar.php");

			?>
			<!------ end sidebar----- -->

			<!-- ====PRODUCT_SHOP=== -->
			<div class="col-md-9">
				<?php 
					include("shop_module/main_shop.php");
				?>
				
				
			</div>
			<!-- end col-9 -->
		</div>
	</div>

<!-- ---end shop---- -->