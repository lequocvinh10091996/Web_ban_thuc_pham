<?php
   $sql="select * from mua order by id_donhang desc";
   $run=mysql_query($sql); 
?>
<table width="100%" border="1" style="width:200px;">
  <tr>
    <td width="40">ID</td>
    <td width="113">Tên Khách Hàng</td>
    <td width="103">Số Điện Thoại</td>
    <td width="74">Địa Chỉ</td>
    <td width="66">Email</td>
    <td colspan="2">Quản Lý</td>
  </tr>
  <?php
    $i=0;
	while($dong=mysql_fetch_array($run)){
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $dong['tenkhachhang'] ?></td>
    <td><?php echo $dong['dienthoai'] ?></td>
    <td><?php echo $dong['diachi'] ?></td>
    <td><?php echo $dong['email'] ?></td>
    <td width="56"><a href="index.php?quanly=donhang&ac=sua&id=<?php echo $dong['id_donhang'] ?>">Sửa</a></td>
    <td width="166"><a href="modules/donhang/xuly.php?id=<?php echo $dong['id_donhang'] ?>">Xóa</a></td>
  </tr>
  <?php
    $i++;
    }
  ?>
</table>
