<?php
  $sql="select * from chitietsp where id_sp='$_GET[id]'";
  $run=mysql_query($sql); 
  $dong=mysql_fetch_array($run);
?>

<form action="modules/quanlychitietsp/xuly.php?id=<?php echo $dong['id_sp'] ?>" method="post" enctype="multipart/form-data">
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center">Sửa chi tiết sản phẩm</div></td>
  </tr>
  <tr>
    <td width="115">Tên sản phâm</td>
    <td width="101"><input type="text" name="tensp" value="<?php echo $dong['tensp'] ?>"></td>
  </tr>
  <tr>
    <td>Giá sản phẩm</td>
    <td><input type="text" name="gia" value="<?php echo $dong['gia'] ?>"></td>
  </tr>
  <tr>
    <td>Hình ảnh</td>
    <td><input type="file" name="hinhanh"><img src="modules/quanlychitietsp/uploads/<?php echo $dong['hinhanh'] ?>" width="60" height="60"/></td>
  </tr>
  <tr>
    <td>Mô tả sản phẩm</td>
    <td><textarea name="motasp" cols="40" rows="15"><?php echo $dong['mota'] ?></textarea></td>
  </tr>
  <?php
     $sql_loaisp="select * from loaisp";
	 $run_loaisp=mysql_query($sql_loaisp); 
  ?>
  <tr>
    <td>Loại sản phẩm</td>
    <td><select name="loaisp">
        <?php
		  while($dong_loaisp=mysql_fetch_array($run_loaisp)){ 
		   if($dong['id_loaisp']==$dong_loaisp['id_loaisp']){
		?>
        <option selected="selected" value="<?php echo $dong_loaisp['id_loaisp'] ?>"><?php echo $dong_loaisp['tenloaisp'] ?></option>
        <?php }else{ ?>
           <option value="<?php echo $dong_loaisp['id_loaisp'] ?>"><?php echo $dong_loaisp['tenloaisp'] ?></option>
        <?php
		 }
		} 
		?>
    </select></td>
  </tr><!--loai san pham-->
  <?php
     $sql_hieusp="select * from hieusp";
	 $run_hieusp=mysql_query($sql_hieusp); 
  ?>
  <tr>
    <td>Loại sản phẩm</td>
    <td><select name="hieusp">
        <?php
		  while($dong_hieusp=mysql_fetch_array($run_hieusp)){ 
		   if($dong['id_hieusp']==$dong_hieusp['id_hieusp']){
		?>
        <option selected="selected" value="<?php echo $dong_hieusp['id_hieusp'] ?>"><?php echo $dong_hieusp['tenhieu'] ?></option>
        <?php }else{ ?>
           <option value="<?php echo $dong_hieusp['id_hieusp'] ?>"><?php echo $dong_hieusp['tenhieu'] ?></option>
        <?php
		 }
		} 
		?>
    </select></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <button name="sua" value="sua">Sửa</button>
    </div></td>
  </tr>
</table>
</form>