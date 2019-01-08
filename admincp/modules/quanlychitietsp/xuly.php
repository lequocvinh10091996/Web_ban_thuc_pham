<?php
  include('../config.php');
  $id=$_GET['id'];
  $tensp=$_POST['tensp'];
  $gia=$_POST['gia'];
  $mota=$_POST['motasp'];
  $loaisp=$_POST['loaisp'];
  $hieusp=$_POST['hieusp'];
  $hinhanh=$_FILES['hinhanh']['name'];
  $hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
  move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
  if(isset($_POST['them'])){
	  //them
	  $sql="insert into chitietsp (tensp,mota,gia,id_loaisp,id_hieusp,hinhanh) values ('$tensp','$mota','$gia','$loaisp','$hieusp','$hinhanh')";
	  mysql_query($sql);
	  header('location:../../index.php?quanly=quanlychitietsp&ac=them');
   }elseif($_POST['sua']){
	  //sua
	  if($hinhanh!=''){
	  $sql="update chitietsp set tensp='$tensp',mota='$mota',gia='$gia',id_loaisp='$loaisp',id_hieusp='$hieusp',hinhanh='$hinhanh' where id_sp='$id'";
	  }else{
		  $sql="update chitietsp set tensp='$tensp',mota='$mota',gia='$gia',id_loaisp='$loaisp',id_hieusp='$hieusp' where id_sp='$id'";
	  }
	  mysql_query($sql);
	  header('location:../../index.php?quanly=quanlychitietsp&ac=sua&id='.$id);
   }else{
	  //xoa
	  $sql="delete from chitietsp where id_sp=$id";
	  mysql_query($sql);
	  header('location:../../index.php?quanly=quanlychitietsp&ac=them');
   }
?>