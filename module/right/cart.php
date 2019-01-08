<h1 style="background-color:#F90; text-align:center;">Giỏ Hàng Của Bạn</h1>
<?php
  $temmaychu='localhost';
  $tentaikhoan='root';
  $pass='';
  $csdl='webbanthucpham';
  $conn=mysql_connect($temmaychu,$tentaikhoan,$pass,$csdl) or die('không kết nối được');
  mysql_select_db($csdl,$conn); 
?>
<?php
  session_start();
  //session_destroy();
  //them san pham moi
  if(isset($_GET['add']) && !empty($_GET['add'])){
	  $id=$_GET['add'];
	  @$_SESSION['cart_'.$id]+=1;
	  header('location:index.php?xem=giohang');
  }
  //cong san pham
  if(isset($_GET['them'])){
	  $_SESSION['cart_'.$_GET['them']]+=1;
	  header('location:index.php?xem=giohang');
  }
  //tru san pham
  if(isset($_GET['tru'])){
	  $_SESSION['cart_'.$_GET['tru']]--;
	  header('location:index.php?xem=giohang');
  }
  //xoa san pham
  if(isset($_GET['xoa'])){
	  $_SESSION['cart_'.$_GET['xoa']]=0;
	  header('location:index.php?xem=giohang');
  }
  //hien thi san pham
  $thanhtien=0;
  $tongtien=0;
  foreach($_SESSION as $name => $value){
	  if($value>0){
		  if(substr($name,0,5)=='cart_'){
			  $id=substr($name,5,strlen($name-5));
			  $sql="select * from chitietsp where id_sp='".$id."'";
			  $query=mysql_query($sql);
			  while($dong=mysql_fetch_array($query)){
				  $tongtien=$dong['gia']*$value;
			  echo '<p style="float:right;margin-right:170px;margin-top:30px;color:red;">=>Tổng tiền của món hàng: '.$tongtien.' VNĐ</p>';
			  echo '<table width="367" border="1" height="100" style="text-align:center;">
					  <tr>
						<td width="81"><img src="admincp/modules/quanlychitietsp/uploads/'.$dong['hinhanh'].'" width="70" height="70" /></td>
						<td width="83">'.$dong['tensp'].'</td>
						<td width="50" style="text-align:center;font-size:20px;"><a href="index.php?xem=giohang&them='.$id.'">+ </a>'.$value.'<a href="index.php?xem=giohang&tru='.$id.'"> -</a></td>
						<td width="50">'.$dong['gia'].'</td>
						<td width="10"><a href="index.php?xem=giohang&xoa='.$id.'">X</a></td>
					  </tr>
					</table><br/><br/>';
			  }
			  $temp_value=$value;
		  }
		  $thanhtien+=$tongtien;
	  }
  }
  
  if($thanhtien==0){
	  echo 'Giỏ hàng trống';
  }else{
	  echo '<p>Thông tin đơn hàng:</p><br>';
	  echo '<p style="margin-left:30px;color:red">Tổng tiền phải trả= '.$thanhtien.' VNĐ</p>';
	  echo '<a href="index.php?xem=mua"><img src="image/dat-hang.png" height="150" width="150" style="float:right" /></a>';
  }
?>

