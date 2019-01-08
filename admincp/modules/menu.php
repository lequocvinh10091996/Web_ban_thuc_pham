<?php
   if(isset($_GET['ac']) && $_GET['ac']=='logout'){
	   unset($_SESSION['dangnhap']);
	   header('location:login.php');
   }
?>
<div class="menu">
          <ul>
             <li><a href="index.php">Trang Chủ</a></li>
             <li><a href="index.php?quanly=quanlyloaisp&ac=them">Quản Lý Loại Sản Phẩm</a></li>
             <li><a href="index.php?quanly=quanlychitietsp&ac=them">Quản Lý Chi Tiết Sản Phẩm</a></li>
             <li><a href="index.php?quanly=quanlyhieusp&ac=them">Quản Lý Hiệu Sản Phẩm</a></li>
             <li><a href="index.php?quanly=quanlylienhe&ac=them">Quản Lý Liên Hệ</a></li>
             <li><a href="index.php?quanly=donhang&ac=them"> Xem Đơn Hàng</a></li>
             <li><a href="index.php?ac=logout">Đăng Xuất</a></li>
          </ul>
        </div>