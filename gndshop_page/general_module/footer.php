<?php 
	$danhmuc = mysqli_query($mysqli,"SELECT * FROM danhmucsp ORDER BY ID_DanhMucSp");
	$loaisp = mysqli_query($mysqli,"SELECT * FROM loaisp ORDER BY ID_LoaiSp");
 ?>
<!--== BEGIN FOOTER ==-->
	<div class="page-footer">
		<!-----------------footer_top------------------>
  		<div class="footer_top">
    		<div class="container">
      			<div class="row py-4 d-flex align-items-center">
        			<div class="col-md-12 text-center">
            			<a href="#"><i class="fab fa-facebook-f white-text mr-4"> </i></a>
            			<a href="#"><i class="fab fa-twitter white-text mr-4"> </i></a>
            			<a href="#"><i class="fab fa-google-plus-g white-text mr-4"> </i></a>
            			<a href="#"><i class="fab fa-linkedin-in white-text mr-4"> </i></a>
            			<a href="#"><i class="fab fa-instagram white-text"> </i></a>
           			</div>
     			</div>
    		</div>
  		</div>
  		<!-----------------footer_info------------------>
		<div class="fluid-container info_footer">
    		<div class="container text-center text-md-left pt-5">
    			<div class="row">
    				<!-----------------foote_col1------------------>
      				<div class="col-md-3 mx-auto mb-4">
        				<h6 class="text-uppercase font-weight-bold">SHOP</h6>
        				<hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 125px;height: 2px">
        				<p class="mt-2">Cửa Hàng Chúng Tôi Luôn Cung Các Sản Phẩm Chất Lượng Đến Các Quý Khách Hàng, Cảm Ơn Quý Khách Đã Ghé Qua Shop!</p>
      				</div>

      				<!-----------------foote_col2------------------>
      				<div class="col-md-2 mx-auto mb-4">
        				<h6 class="text-uppercase font-weight-bold">SẢN PHẨM</h6>
        				<hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 85px; height: 2px">

         				<ul class="list-unstyled">
         					<?php 
         						while($row1 = mysqli_fetch_array($loaisp)){
         					 ?>
            				<li class="my-2"><a href="#"><?php echo $row1['Ten_LoaiSp'] ?></a></li>
            				<?php 
            					}

            				 ?>
          				</ul>
      				</div>

      				<!-----------------foote_col3------------------>
      				<div class="col-md-2 mx-auto mb-4">
        				<h6 class="text-uppercase font-weight-bold">LINK DANH MỤC</h6>
        				<hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 110px; height: 2px">
          				<ul class="list-unstyled">
          					<li class="my-2"><a href="#">Home</a></li>
          					<?php 
          						while($row2 = mysqli_fetch_array($danhmuc)){
          					 ?>
            					<li class="my-2"><a href="#"><?php echo $row2['Ten_DanhMucSp'] ?></a></li>
            				<?php 
            					}
            				?>
            				<li class="my-2"> <a href="#">Liên Hệ</a></li>
            			</ul>
      				</div>
      				<!-----------------foote_col4------------------>
      				<div class="col-md-3 mx-auto mb-4">
        				<h6 class="text-uppercase font-weight-bold">LIÊN HỆ</h6>
        				<hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 75px; height: 2px">
          				<ul class="list-unstyled">
            				<li class="my-2"><i class="fas fa-home mr-3"></i>Hà Nội, Việt Nam</li>
            				<li class="my-2"><i class="fas fa-envelope mr-3"></i> gndshop@gmail.com</li>
            				<li class="my-2"><i class="fas fa-phone mr-3"></i> + 01 234 567 88</li>
            				<li class="my-2"><i class="fas fa-print mr-3"></i> + 01 234 567 89</li>
          				</ul>
      				</div>
    			</div>
  			</div>
		</div>

 		<!-----------------footer_coppyright------------------>
  		<div class="footer-copyright py-1">
  			<div class="container">
  				<div class="row">
  					<div class="col-md-3 mx-auto text-left">
  						<p>&copy; Copyright
    						<a href="#">gndshop.com</a>
    					</p>
  					</div>
  					<div class="col-md-2 mx-auto"></div>
  					<div class="col-md-2 mx-auto"></div>
  					<div class="col-md-3 mx-auto">
  						<img src="gndshop_page/picture/payments.png">
  					</div>
  				</div>
  			</div>
  		</div>
	</div>
<!--== end footer ==-->