<?php
  include('../config.php');
  $id=$_GET['id'];
  $tencongty=$_POST['tencongty'];
  $sdt=$_POST['sdt'];
  $diachi=$_POST['diachi'];
  $email=$_POST['email'];
  if(isset($_POST['them'])){
	  //them
	  $sql="insert into lienhe (tencongty,sdt,diachi,email) values ('$tencongty','$sdt','$diachi','$email')";
	  mysql_query($sql);
	  header('location:../../index.php?quanly=quanlylienhe&ac=them');
   }elseif($_POST['sua']){
	  //sua
	  $sql="update lienhe set tencongty='$tencongty', sdt='$sdt', diachi='$diachi', email='$email' where id_lienhe='$id'";
	  mysql_query($sql);
	  header('location:../../index.php?quanly=quanlylienhe&ac=sua&id='.$id);
   }else{
	  //xoa
	  $sql="delete from lienhe where id_lienhe=$id";
	  mysql_query($sql);
	  header('location:../../index.php?quanly=quanlylienhe&ac=them');
   }
?>