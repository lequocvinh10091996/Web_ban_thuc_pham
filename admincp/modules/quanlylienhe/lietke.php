<?php
   $sql="select * from lienhe order by id_lienhe desc";
   $run=mysql_query($sql); 
?>
<table width="100%" border="1">
  <tr>
    <td width="17">ID</td>
    <td width="71">Tên Công Ty</td>
    <td width="31">Số Điện Thoại</td>
    <td width="31">Địa Chỉ</td>
    <td width="31">Email</td>
    <td colspan="2">Quản Lý</td>
  </tr>
  <?php
    $i=0;
	while($dong=mysql_fetch_array($run)){
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $dong['tencongty'] ?></td>
    <td><?php echo $dong['sdt'] ?></td>
    <td><?php echo $dong['diachi'] ?></td>
    <td><?php echo $dong['email'] ?></td>
    <td width="21"><a href="index.php?quanly=quanlylienhe&ac=sua&id=<?php echo $dong['id_lienhe'] ?>">Sửa</a></td>
    <td width="26"><a href="modules/quanlylienhe/xuly.php?id=<?php echo $dong['id_lienhe'] ?>">Xóa</a></td>
  </tr>
  <?php
    $i++;
    }
  ?>
</table>
