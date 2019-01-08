<?php
  $sql="select * from lienhe where id_lienhe='$_GET[id]'";
  $run=mysql_query($sql);
  $dong=mysql_fetch_array($run); 
?>
<form action="modules/quanlylienhe/xuly.php?id=<?php echo $dong['id_lienhe'] ?>" method="post" enctype="multipart/form-data">
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center">Sửa Liên Hệ</div></td>
  </tr>
  <tr>
    <td width="134">Tên Công Ty</td>
    <td ><input type="text" name="tencongty" value="<?php echo $dong['tencongty'] ?>"></td>
  </tr>
  <tr>
    <td>Số Điện Thoại</td>
    <td><input type="text" name="sdt" value="<?php echo $dong['sdt'] ?>"></td>
  </tr>
  <tr>
    <td>Địa Chỉ</td>
    <td><input type="text" name="diachi" value="<?php echo $dong['diachi'] ?>"></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="text" name="email" value="<?php echo $dong['email'] ?>"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="sua" id="sua" value="Sửa">
    </div></td>
  </tr>
</table>
</form>