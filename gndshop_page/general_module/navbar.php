<?php
	$sql_danhmucsp = "SELECT * FROM danhmucsp";
	$query_danhmucsp = mysqli_query($mysqli,$sql_danhmucsp);
	
?>

<!--== 2.BEGIN NAVBAR ==-->
	<div class="fluid-container">

        <div class="row">
        	<div class="col-12">
          		<nav class="navbar navbar-expand-lg navbar-dark navbar-mainbg">
          			<!----------------begin ---------------->
           			<a class="navbar-brand" href="index.php"><img src="gndshop_page/picture/logomoi1.png"></a>

           			<!----------------begin ---------------->
            		<a class="navbar-toggler" data-toggle="collapse" data-target="#navbar" >
              		<span class="navbar-toggler-icon"></span>
            		</a>

            		<!----------------begin ---------------->
            		<div class="collapse navbar-collapse injustify-content-center" id="navbar">
              			<ul class="navbar-nav">
              				<!----------------begin nav-item---------------->
               				<li class="nav-item">
                 				 <a class="nav-link" href="index.php?action2=home">
                 				 	<i class="fas fa-home"></i>HOME
                 				 </a>
                 			</li>
<?php
	while($row_danhmuc=mysqli_fetch_array($query_danhmucsp)){

?>
                 			<!----------------begin nav-item---------------->

               	 			<li class="nav-item dropdown menu-area">
                  				<a class="nav-link dropdown-toggle" href="index.php?action2=shopmenu&dmspnav=<?php echo $row_danhmuc['ID_DanhMucSp']?>" id="<?php echo $row_danhmuc['ID_DanhMucSp']?>" aria-haspopup="true" aria-expanded="false"><?php echo $row_danhmuc['Ten_DanhMucSp']?>
                  					<i class="fas fa-angle-down"></i>
                  				</a>
                  				<!----------------begin dropdown---------------->
                  				<div class="dropdown-menu mega-area" aria-labelledby="mega-one">
                 					<div class="row">
                 						
                     					<!----------------begin ---------------->
                     					<div class="col-sm-6 col-lg-6">
                     						<div class="nav_people">
                     							<img src="gndshop_page/picture/introduction11.jpg">
                     						</div>
                      						
                    					</div>

                    					<!----------------begin ---------------->
					                    <div class="col-sm-6 col-lg-3 menu_item_mega">
					                      	
				                     		<!-- <a href="gndshop_page/main_page/shop_page/shop.php" class="dropdown-item">Áo MU</a> -->
					           
					                    </div>

                   					</div>
                  				</div>
                			</li>
<?php
	}
?>


	            			<!----------------begin nav-item---------------->
	            			<li class="nav-item">
	                			<a class="nav-link" href="index.php?action2=aboutus">
	                  				<i class="far fa-calendar-alt"></i>GIỚI THIỆU
	                			</a>
	            			</li>

	            			<!----------------begin nav-item---------------->
	           		 		<li class="nav-item">
	                			<a class="nav-link" href="index.php?action2=contact">
	  								<i class="fas fa-id-badge"></i>LIÊN HỆ
	                			</a>
	            			</li>

	            			<!----------------begin nav-item---------------->
	                 		<li class="nav-item">
	                			<a class="nav-link" href="index.php?action2=cart">
	                 				<i class="fas fa-shopping-cart"></i>GIỎ HÀNG
	                			</a>
	            			</li>
              			</ul>
              			<form action="index.php?action2=timkiem" method="POST">
              			<div class="search">
              				
              					<input type="text" class="search__input" aria-label="search" placeholder="search" name="keyword">
    							<button class="search__submit" aria-label="submit search" type="submit"><i class="fas fa-search"></i></button>
              				
    						
 						</div>
 						</form>
            		</div>
          		</nav>
        	</div>
     	</div>
    </div>
<!--== end navbar ==-->
