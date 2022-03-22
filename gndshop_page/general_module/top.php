<?php 
    if(isset($_GET['dangxuatguest']) && $_GET['dangxuatguest']==1){
        unset($_SESSION['dangnhap']);
    }

 ?>

<!--== 1.BEGIN TOP ==-->
	<div class="fluid-container top" id="top">
        <div class="row">

        	<!----------------begin ---------------->
            <div class="col-md-6" class="top_contact">
                <a class="btn btn-sm btn-success welcome_top">Welcome</a>
                    &emsp;
                <a class="top_contact" href="mailto:gndshop@gmail.com">
                    <i class="far fa-envelope"></i>
                        gndshop@gmail.com
                </a>
                    &emsp;
                <a class="top_contact" href="tel:0">
                    <i class="fas fa-phone"></i>
                        + 01 234 567 88
                </a>
            </div>

            <!----------------begin ---------------->
            <div class="col-md-2">
            </div>

            <!----------------begin ---------------->
            <div class="col-md-4">
                <ul id="top_head">
                    <?php 
                
                        if(isset($_SESSION['dangnhap'])){
                    ?>
                        <li><a class="top_contact" href="?dangxuatguest=1">Đăng Xuất: <?php echo $_SESSION['dangnhap']['tenguest']?></a></li>

                    <?php
                        }else{

                    ?>
                        <li><a class="top_contact" href="#"></a></li>

                     <?php 
                        }
                    ?>
                    
                    <li><a href="index.php?action2=dangky">Đăng Ký</a></li>
                    <li><a href="index.php?action2=dangnhap">Đăng Nhập</a></li>
                </ul>
            </div>
        </div>
    </div>
<!--== end top ==-->