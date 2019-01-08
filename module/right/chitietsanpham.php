<?php
  $sql_chitietsp="select * from chitietsp where id_sp='$_GET[id]'";
  $query_chitietsp=mysql_query($sql_chitietsp);
  $dong_chitietsp=mysql_fetch_array($query_chitietsp); 
?>
<a href="index.php?xem=giohang&add=<?php echo $dong_chitietsp['id_sp'] ?>"><img src="image/huong-dan-dat-hang-10.gif" height="150" width="150" style="float:right" /></a>
<ul style="float:right; margin-top:150px; margin-right:300px;"><li>Tên: <?php echo $dong_chitietsp['tensp'] ?></li><li>Giá: <?php echo $dong_chitietsp['gia'].' VNĐ'?></li></ul><br />
  <img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_chitietsp['hinhanh']  ?>" width="200" height="200" />
  <br />
  <p style="background-color:#F90; text-align:center">Giới thiệu sản phẩm</p><?php echo $dong_chitietsp['mota'] ?>
  
