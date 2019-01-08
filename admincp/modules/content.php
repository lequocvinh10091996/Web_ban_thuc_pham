<div class="content">
        <?php
		  if(isset($_GET['quanly'])){
			  $tam=$_GET['quanly'];
		  }
		  else{
			  $tam='';
		  }if($tam=='quanlyloaisp'){
			  include('modules/quanlyloaisp/main.php');
		  }if($tam=='quanlychitietsp'){
			  include('modules/quanlychitietsp/main.php');
		  }if($tam=='quanlyhieusp'){
			  include('modules/quanlyhieusp/main.php');
		  }if($tam=='quanlylienhe'){
			  include('modules/quanlylienhe/main.php');
		  }if($tam=='donhang'){
			  include('modules/donhang/main.php');
		  }
		?>
        <div class="clear"></div>
        </div>
