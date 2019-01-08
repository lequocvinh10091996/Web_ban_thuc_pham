<?php
  $temmaychu='localhost';
  $tentaikhoan='root';
  $pass='';
  $csdl='webbanthucpham';
  $conn=mysql_connect($temmaychu,$tentaikhoan,$pass,$csdl) or die('không kết nối được');
  mysql_select_db($csdl,$conn); 
?>