<?php
	$iddh= $_GET['iddh'];
	$sql = "SELECT * FROM donhang,chitietdonhang,sp WHERE donhang.ma_donhang='".$iddh."' AND donhang.ma_donhang=chitietdonhang.ma_donhang AND sp.ID_Sp=chitietdonhang.ID_Sp";
	$query = mysqli_query($mysqli,$sql);


?>
<div class="fluid-container mt-2 text-center mx-3">
	<table class="table table-bordered">
		<tr>
			<th>STT</th>
			<th>Mã Đơn Hàng</th>
			<th>Tên Sản Phẩm</th>
			<th>Size</th>
			<th>Màu sắc</th>
			<th>Số Lượng</th>
			<th>Đơn Giá</th>
			<th>Thành Tiền</th>

		</tr>
<?php
	$tongtien=0;
	$i =1;
	while($row=mysqli_fetch_array($query)){
	$thanhtien = $row['Soluong_Sp'] * $row['Gia_Sp'];
	$tongtien += $thanhtien;
?>
  <tr>
  	<td><?php echo $i++ ?></td>
  	<td><?php echo $row['ma_donhang'] ?></td>
  	<td><?php echo $row['Ten_Sp'] ?></td>
		 <td>
				      	<?php 
				      		 $size = $row['Size_Sp'];
				      		 if($size==1){
				      		 	echo "S";
				      		 }elseif($size==2){
				      		 	echo "M";
				      		 }elseif($size==3){
				      		 	echo "L";
				      		 }elseif($size==4){
				      		 	echo "XL";
				      		 }elseif($size==5){
				      		 	echo "XXL";
				      		 }

				      	 ?>

			</td>
      <td>
      	<?php 
      		 $color = $row['Mausac_Sp'];
      		 if($color=='do'){
      		 	echo "Đỏ";
      		 }elseif($color=='xanh'){
      		 	echo "Xanh";
      		 }elseif($color=='vang'){
      		 	echo "Vàng";
      		 }elseif($color=='den'){
      		 	echo "Đen";
      		 }

      	 ?>

      </td>
  	<td><?php echo $row['Soluong_Sp'] ?></td>
  	<td><?php echo number_format($row['Gia_Sp'],0,".",",")." VNĐ" ?></td>
	
   	<td>
   		<?php echo  number_format($thanhtien,0,".",",")." VNĐ" ?>
   		
   	</td>
  </tr>
<?php 
}
 ?>		
 	<tr>
 		<td colspan="6">
 			Tổng Tiền: <?php echo number_format($tongtien,0,".",",")." VNĐ"; ?>
 		</td>
 	</tr>
	</table>
	
</div>





 