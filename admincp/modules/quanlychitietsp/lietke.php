<?php
  $sql="select * from chitietsp,loaisp,hieusp where loaisp.id_loaisp=chitietsp.id_loaisp and chitietsp.id_hieusp=hieusp.id_hieusp order by chitietsp.id_sp desc";
  $run=mysql_query($sql);
?>

<table width="100%" border="1">
  <tr>
    <td width="16">ID</td>
    <td width="47">Tên sản phẩm</td>
    <td width="37">Hình ảnh</td>
    <td width="37">Giá</td>
    <td width="34">Loại sản phẩm</td>
    <td width="34">Hiệu sản phẩm</td>
    <td colspan="2">Quản lý</td>
  </tr>
  <?php
  $i=0;
    while($dong=mysql_fetch_array($run)){ 
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $dong['tensp']; ?></td>
    <td><img src="modules/quanlychitietsp/uploads/<?php echo $dong['hinhanh'] ?>" width="60" height="60"></td>
    <td><?php echo $dong['gia']; ?></td>
    <td><?php echo $dong['tenloaisp']; ?></td>
    <td><?php echo $dong['tenhieu']; ?></td>
    <td width="32"><a href="index.php?quanly=quanlychitietsp&ac=sua&id=<?php echo $dong['id_sp'] ?>">Sửa</a></td>
    <td width="59"><a href="modules/quanlychitietsp/xuly.php?id=<?php echo $dong['id_sp'] ?>">Xóa</a></td>
  </tr>
  <?php
    $i++;
   } 
   ?>
</table>
