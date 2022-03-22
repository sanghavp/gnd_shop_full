<?php
  $sql_lietke_sp = "SELECT * FROM sp";
  $query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
?>
<div class="container mt-2 text-left">
	<table class="table table-bordered">
		<tr>
			<th>STT</th>
			<th>Mã SP</th>
			<th>Danh Mục SP</th>
			<th>Loại SP</th>
			<th>Tên SP</th>
			<th>Giá SP</th>
			<th>Mô Tả SP</th>
			<th>Ảnh đại diện SP</th>
			<th>Ảnh mô tả SP</th>
			<th>Trạng Thái</th>
			<th>Tùy Chọn</th>

		</tr>
<?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_sp)){
  	$i++;
  	$idsanp = $row['ID_Sp'];
  ?>
  <tr>
  	<td><?php echo $i ?></td>
					<td><?php echo $row['ID_Sp'] ?></td>
					<td><?php echo $row['ID_DanhMucSp'] ?></td>
					<td><?php echo $row['ID_LoaiSp'] ?></td>
					<td><?php echo $row['Ten_Sp'] ?></td>
					<td><?php echo $row['Gia_Sp'] ?></td>
					<td><?php echo $row['Mota_Sp'] ?></td>
					<td style="width: 150px;"><img src="modules/quanlysp/product_images/<?php echo $row['Hinhanh_Sp'] ?>" width="100%"></td>
					<td>

							<div class="dropdown show">
							  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Xem</a>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
							  	<?php 
							  		$querypicdes= mysqli_query($mysqli,"SELECT * FROM sp WHERE ID_Sp='".$idsanp."'");

							  		while($row2 = mysqli_fetch_array($querypicdes)){
							  			$i=1;
							  			$images = unserialize($row2['Hinhanh_Mota']);
							  			if(number_format(count($images))>0){
							  			foreach ($images as $key => $value) {							  			
							  	?>
							    <a class="dropdown-item" href="#">
							    	<table border="1">
							    			<tr>
							    				<td><?php echo $i++ ?></td>
							    				<td>
							    					<img src="modules/quanlysp/product_images/<?php echo $value ?>" alt="" width="150px">
							    				</td>
							    			</tr>

							    	</table>

							    	
							    </a>
							    <?php 
							    	}}}
							     ?>
							    
							  </div>
							</div>
					</td>
					<td>
						<?php
							if($row['Trangthai_Sp']==1){
								echo "Còn hàng";
							}else{
								echo "Hết hàng";
							}
						?>
						

					</td>
					
   	<td>
   		<a class="btn btn-danger" href="modules/quanlysp/xulysp.php?idsp=<?php echo $row['ID_Sp'] ?>">Xóa</a>
   		<a class="btn btn-primary" href="?action=quanlysp&query=sua&idsp=<?php echo $row['ID_Sp'] ?>">Sửa</a>
   		
   	</td>
   
  </tr>
  <?php
  } 
  ?>
			
	</table>
	
</div>





 