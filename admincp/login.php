<style>
  h2 a{
	  text-decoration:none;
  }
</style>
<h2><a href="../index.php">Trang Chủ</a></h2>
<script>
function kiemtra(){
	usr=document.forms[0].username.value;
	pas=document.forms[0].password.value;
	if(usr==""){alert("chua nhap Username");
	usr=document.forms[0].username.focus();
	}
	else if(pas==""){alert("chua nhap Password");
	pas=document.forms[0].password.focus();
	}
	else{
		document.forms[0].submit();}
	}
</script>
<?php
  include('modules/config.php');
  session_start();
  if(isset($_POST['username'])){
	  $username=$_POST['username'];
	  $password=$_POST['password'];
	  $sql="select * from admin where username='$username' and password='$password' limit 1";
	  $query=mysql_query($sql);
	  $num=mysql_num_rows($query);
	  if($num>0){
		  $_SESSION['dangnhap']=$username;
		  header('location:index.php');
	  
	  }
	  else echo "<script> alert('mat khau sai')</script>";
  }
?>
<form action="" method="post" >
<center>
<table width="200" border="1" style="width:300px; border-radius:10px 10px 10px 10px;box-shadow:5px 5px #FF9900;">
  <tr>
    <td colspan="2" style="background:#F90;"><div align="center">Đăng nhập</div></td>
  </tr>
  <tr>
    <td>Username</td>
    <td ><input name="username" type="text" size="32"></td>
  </tr>
  <tr>
    <td>Password</td>
    <td ><input name="password" type="text" size="33"></td>
  </tr>
  <tr>
    <td colspan="2">
      <div align="center">
        <input type="button" name="login" id="button" value="Đăng nhập" onClick="kiemtra();">
      </div>
    </td>
  </tr>
</table>

</center>
</form>