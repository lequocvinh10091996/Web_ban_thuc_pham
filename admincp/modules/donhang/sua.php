<?php
  $sql="select * from mua where id_donhang=$_GET[id]";
  $run=mysql_query($sql);
  $dong=mysql_fetch_array($run); 
?>
<form action="modules/donhang/xuly.php?id=<?php echo $dong['id_donhang'] ?>" method="post" enctype="multipart/form-data">
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center">Sửa đơn hàng</div></td>
  </tr>
  <tr>
    <td width="134">Tên Khách Hàng</td>
    <td ><input type="text" name="tenkhachhang" value="<?php echo $dong['tenkhachhang'] ?>"></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="text" name="email" value="<?php echo $dong['email'] ?>"></td>
  </tr>
  <tr>
    <td>Số Điện Thoại</td>
    <td><input type="text" name="dienthoai" value="<?php echo $dong['dienthoai'] ?>"></td>
  </tr>
  <tr>
    <td>Địa Chỉ</td>
    <td><input type="text" name="diachi" value="<?php echo $dong['diachi'] ?>"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="sua" id="sua" value="Sửa">
    </div></td>
  </tr>
</table>
</form>