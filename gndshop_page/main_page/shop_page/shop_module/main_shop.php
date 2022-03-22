<div >
	<?php
		if(isset($_GET['loaispnav'])){
			include("loaisp.php");
		}elseif(isset($_GET['dmspnav'])){
			include("danhmuc.php");
		}
	?>
</div>