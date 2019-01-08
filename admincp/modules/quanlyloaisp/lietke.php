<?php
   $sql="select * from loaisp order by id_loaisp desc";
   $run=mysql_query($sql); 
?>
<table width="100%" border="1" >
  <tr>
    <td width="17">ID</td>
    <td width="71">Tên Sản Phẩm</td>
    <td colspan="2">Quản Lý</td>
  </tr>
  <?php
    $i=0;
	while($dong=mysql_fetch_array($run)){
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $dong['tenloaisp'] ?></td>
    <td width="21"><a href="index.php?quanly=quanlyloaisp&ac=sua&id=<?php echo$dong['id_loaisp'] ?>">Sửa</a></td>
    <td width="26"><a href="modules/quanlyloaisp/xuly.php?id=<?php echo $dong['id_loaisp'] ?>">Xóa</a></td>
  </tr>
  <?php
    $i++;
    }
  ?>
</table>
