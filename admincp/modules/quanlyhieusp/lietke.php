<?php
   $sql="select * from hieusp order by id_hieusp desc";
   $run=mysql_query($sql); 
?>
<table width="100%" border="1">
  <tr>
    <td width="17">ID</td>
    <td width="71">Tên Hiệu</td>
    <td colspan="2">Quản Lý</td>
  </tr>
  <?php
    $i=0;
	while($dong=mysql_fetch_array($run)){
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $dong['tenhieu'] ?></td>
    <td width="21"><a href="index.php?quanly=quanlyhieusp&ac=sua&id=<?php echo $dong['id_hieusp'] ?>">Sửa</a></td>
    <td width="26"><a href="modules/quanlyhieusp/xuly.php?id=<?php echo $dong['id_hieusp'] ?>">Xóa</a></td>
  </tr>
  <?php
    $i++;
    }
  ?>
</table>
