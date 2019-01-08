<div class="left">
    <?php
	  if(isset($_GET['ac'])){
		  $tam=$_GET['ac'];
	  }else{
		  $tam='';
	  }if($tam=='them'){
		  include('modules/quanlylienhe/them.php');
	  }if($tam=='sua'){
		  include('modules/quanlylienhe/sua.php');
	  }
    ?>
</div>
<div class="right">
    <?php
	  include('modules/quanlylienhe/lietke.php');
	?>
</div>