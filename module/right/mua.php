
<?php
   if(isset($_POST['mua'])){
	   $tenkhachhang=$_POST['tenkhachhang'];
	   $email=$_POST['email'];
	   $diachi=$_POST['diachi'];
	   $dienthoai=$_POST['dienthoai'];
	   if($tenkhachhang!="" && $email!="" && $diachi!="" && $dienthoai!=""){
	   $sql_mua="insert into mua (tenkhachhang,email,diachi,dienthoai) values ('$tenkhachhang','$email','$diachi','$dienthoai')";
	   $run_query=mysql_query($sql_mua);
	   if($run_query){
		   //header('location:index.php?xem=thongbaomua');
		   echo "<script>alert('Mua thanh cong!!!');</script>";
	   }
	   }
	   else{
		   echo "<script>alert(' Xin dien du thong tin vao!!');</script>";
	   }
   }
?>

<h1 style="text-align:center;background:#F90;">Đăng Ký Mua</h1>
<form action="index.php?xem=mua" method="post" enctype="multipart/form-data">
<table width="200" border="1" style="text-align:center; margin-left:250px; border-color:#F90; border-style:dotted; border-width:5px;">
  <tr style="border-color:#F00; border-style:solid;">
    <td colspan="2" style="border-color:#F90; border-style:solid;"><div align="center">Đăng ký Mua</div></td>
  </tr>
  <tr style="border-color:#F90; border-style:solid;">
    <td style="border-color:#F90; border-style:solid;">Tên khác hàng</td>
    <td style="border-color:#F90; border-style:solid;"><input type="text" name="tenkhachhang" size="30"></td>
  </tr>
  <tr>
    <td style="border-color:#F90; border-style:solid;">Email</td>
    <td style="border-color:#F90; border-style:solid;"><input type="text" name="email" size="30"></td>
  </tr>
  <tr>
    <td style="border-color:#F90; border-style:solid;">Đại chỉ</td>
    <td style="border-color:#F90; border-style:solid;"><input type="text" name="diachi" size="30"></td>
  </tr>
  <tr>
    <td style="border-color:#F90; border-style:solid;">Điện thoại</td>
    <td style="border-color:#F90; border-style:solid;"><input type="text" name="dienthoai" size="30"></td>
  </tr>
  <tr>
    <td colspan="2" style="border-color:#F90; border-style:solid;"><div align="center">
      <input type="submit" name="mua" value="Mua">
    </div></td>
  </tr>
</table>
</form>


