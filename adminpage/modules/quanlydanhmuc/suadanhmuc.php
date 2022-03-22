<?php 
	include("../adminpage/config/config.php");
	$id = $_GET['iddanhmuc'];
	$sql = "SELECT * FROM danhmucsp WHERE ID_DanhMucSp='".
	$id."' LIMIT 1";
	$query = mysqli_query($mysqli,$sql);
 ?>



<div class="p-2"> 
  <h4>VUI LÒNG ĐIỀN TÊN DANH MỤC</h4> 
  <?php 
  		while($row = mysqli_fetch_array($query)){
   ?>
  <form method="POST" action="modules/quanlydanhmuc/xulydanhmuc.php?id=<?php echo $row['ID_DanhMucSp']?>">  
    <input class="form-control" type="text" name="ten_danhmuc" value="<?php  echo $row['Ten_DanhMucSp'] ?>"><br>
    <input class="form-control btn btn-success mt-2"  type="submit" name="sua_danhmuc" value="Sửa Danh Mục">

  </form> 
<?php 
}
 ?>
</div>  

      