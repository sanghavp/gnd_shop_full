<?php 
	$sql = "SELECT * FROM donhang,dangky WHERE donhang.ID_khachhang=dangky.id_dangky";
	$query = mysqli_query($mysqli,$sql);
?>
<div class="fluid-container mt-2 text-center mx-3">
	<table class="table table-bordered">
		<tr>
			<th>STT</th>
			<th>Mã Đơn Hàng</th>
			<th>Tên Khách Hàng</th>
			<th>Số Điện Thoại</th>
			<th>Email</th>
			<th>Địa Chỉ</th>
			<th>Tình Trạng</th>
			<th>Tùy Chọn</th>

		</tr>
<?php 
	$i =1;
	while($row=mysqli_fetch_array($query)){
?>
  <tr>
  	<td><?php echo $i++ ?></td>
  	<td><?php echo $row['ma_donhang'] ?></td>
  	<td><?php echo $row['tenguest'] ?></td>
  	<td><?php echo $row['sdt_khachhang'] ?></td>
  	<td><?php echo $row['emailguest'] ?></td>
  	<td><?php echo $row['diachi_khachhang'] ?></td>
  	<td>
  			<?php 
  					if($row['status_donhang']==1){
  						echo '<a href="modules/quanlydonhang/xulydonhang.php?codeCart='.$row['ma_donhang'].'">Đơn hàng mới</a>';
  					}else{
  						echo "Đã Xem";
  					}

  			?>	
	  </td>
					
   	<td>
   		<a class="btn btn-primary" href="index.php?action=quanlydh&query=xemchitietdh&iddh=<?php echo $row['ma_donhang'] ?>">Xem chi tiết</a>
   		
   	</td>
  </tr>
<?php 
}
 ?>		
	</table>
	
</div>





 