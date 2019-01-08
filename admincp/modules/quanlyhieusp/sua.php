<?php
  $sql="select * from hieusp where id_hieusp='$_GET[id]'";
  $run=mysql_query($sql);
  $dong=mysql_fetch_array($run); 
?>
<form action="modules/quanlyhieusp/xuly.php?id=<?php echo $dong['id_hieusp'] ?>" method="post" enctype="multipart/form-data">
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center">Sửa Hiệu Sản Phẩm</div></td>
  </tr>
  <tr>
    <td width="134">Tên Hiệu Sản Phẩm</td>
    <td ><input type="text" name="tenhieu" value="<?php echo $dong['tenhieu'] ?>"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="sua" id="sua" value="Sửa">
    </div></td>
  </tr>
</table>
</form>