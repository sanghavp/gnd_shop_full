<?php
	 $sql_xemdanhmuc = "SELECT * FROM danhmucsp ORDER BY ID_DanhMucSp";
	 $query_xemdanhmuc = mysqli_query($mysqli,$sql_xemdanhmuc);
?>
<div class="p-2">
	<h4>DANH SÁCH DANH MỤC</h4>
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">STT</th>
	      <th scope="col">ID Danh Mục</th>
	      <th scope="col">Tên Danh Mục</th>
	      <th scope="col">Tùy Chọn</th>
	    </tr>
	  </thead>
	  <tbody>
		<?php 
			$i = 0;
			while($row = mysqli_fetch_array($query_xemdanhmuc)){
			$i++;
 		?>
	  

	    <tr>
	      <th scope="row"><?php echo $i ?></th>
	      <td><?php echo $row['ID_DanhMucSp'] ?></td>
	      <td><?php echo $row['Ten_DanhMucSp'] ?></td>

	      <td>
	      		<a href="?action=quanlydanhmuc&query=sua&iddanhmuc=<?php echo $row['ID_DanhMucSp'] ?>"class="btn btn-primary px-4">Sửa</a>
	      		<a href="modules/quanlydanhmuc/xulydanhmuc.php?iddanhmuc=<?php echo $row['ID_DanhMucSp'] ?>" class="btn btn-danger px-4">Xóa</a>

	      </td>
	    </tr>
	    <?php 
	    	}
	    ?>
	  </tbody>
	</table>
</div>
