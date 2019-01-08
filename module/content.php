<div class="content">
       <div class="left">
              <?php include('module/left/danhsach.php');
			?>
       </div>
        <div class="right">
           <?php
			  if(isset($_GET['xem'])){
				  $tam=$_GET['xem'];
			  }else{
				  $tam='';
			  }if($tam=='chitietloaisanpham'){
				  include('module/right/chitietloaisanpham.php');
			  }
			  elseif($tam=='chitietsanpham'){
				  include('module/right/chitietsanpham.php');
			  }elseif($tam=='lienhe'){
				  include('module/right/lienhe.php');
			  }
			  elseif($tam=='thongbaomua'){
				  include('module/right/thongbaomua.php');
			  }
			  elseif($tam=='mua'){
				  include('module/right/mua.php');
			  }
			  elseif($tam=='giohang'){
				  include('module/right/cart.php');
			  }elseif(isset($_POST['search'])){
				  include('module/right/search.php');
			  }
			  else
				   include('module/right/tatcasanpham.php');
			  
			?>
       </div>
         </div><!--kết thúc content-->
         <div class="clear"></div>