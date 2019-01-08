<?php
  include('../config.php');
  $id=$_GET['id'];
  $tenkhachhang=$_POST['tenkhachhang'];
  $email=$_POST['email'];
  $dienthoai=$_POST['dienthoai'];
  $diachi=$_POST['diachi'];
  if($_POST['sua']){
	  //sua
	  $sql="update mua set tenkhachhang='$tenkhachhang', email='$email', dienthoai='$dienthoai', diachi='$diachi' where id_donhang='$id'";
	  mysql_query($sql);
	  header('location:../../index.php?quanly=donhang&ac=sua&id='.$id);
   }else{
	  //xoa
	  $sql="delete from mua where id_donhang=$id";
	  mysql_query($sql);
	  header('location:../../index.php?quanly=donhang&ac=them');
   }
?>