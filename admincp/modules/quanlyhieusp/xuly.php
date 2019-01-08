<?php
  include('../config.php');
  $id=$_GET['id'];
  $tenhieu=$_POST['tenhieu'];
  if(isset($_POST['them'])){
	  //them
	  $sql="insert into hieusp (tenhieu) values ('$tenhieu')";
	  mysql_query($sql);
	  header('location:../../index.php?quanly=quanlyhieusp&ac=them');
   }elseif($_POST['sua']){
	  //sua
	  $sql="update hieusp set tenhieu='$tenhieu' where id_hieusp='$id'";
	  mysql_query($sql);
	  header('location:../../index.php?quanly=quanlyhieusp&ac=sua&id='.$id);
   }else{
	  //xoa
	  $sql="delete from hieusp where id_hieusp=$id";
	  mysql_query($sql);
	  header('location:../../index.php?quanly=quanlyhieusp&ac=them');
   }
?>