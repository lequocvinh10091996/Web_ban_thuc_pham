<form action="modules/quanlychitietsp/xuly.php" method="post" enctype="multipart/form-data">
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center">Thêm chi tiết sản phẩm</div></td>
  </tr>
  <tr>
    <td width="115">Tên sản phâm</td>
    <td width="101"><input type="text" name="tensp"></td>
  </tr>
  <tr>
    <td>Giá sản phẩm</td>
    <td><input type="text" name="gia"></td>
  </tr>
  <tr>
    <td>Hình ảnh</td>
    <td><input type="file" name="hinhanh"></td>
  </tr>
  <tr>
    <td>Mô tả sản phẩm</td>
    <td><textarea name="motasp" cols="40" rows="15"></textarea></td>
  </tr>
  <?php
     $sql="select * from loaisp";
	 $run=mysql_query($sql); 
  ?>
  <tr>
    <td>Loại sản phẩm</td>
    <td><select name="loaisp">
        <?php
		  while($dong=mysql_fetch_array($run)){ 
		?>
        <option value="<?php echo $dong['id_loaisp'] ?>"><?php echo $dong['tenloaisp'] ?></option>
        <?php } ?>
    </select></td>
  </tr><!--loai san pham-->
  <?php
     $sql_hieusp="select * from hieusp";
	 $run_hieusp=mysql_query($sql_hieusp); 
  ?>
  <tr>
    <td>Hiệu sản phẩm</td>
    <td><select name="hieusp">
        <?php
		  while($dong_hieusp=mysql_fetch_array($run_hieusp)){ 
		?>
        <option value="<?php echo $dong_hieusp['id_hieusp'] ?>"><?php echo $dong_hieusp['tenhieu'] ?></option>
        <?php } ?>
    </select></td>
  </tr><!--hieu san pham-->
  <tr>
    <td colspan="2"><div align="center">
      <button name="them" value="Thêm">Thêm</button>
    </div></td>
  </tr>
</table>
</form>