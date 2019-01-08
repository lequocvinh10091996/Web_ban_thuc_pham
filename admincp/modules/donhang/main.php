<div class="left">
    <?php
	  if(isset($_GET['ac'])){
		  $tam=$_GET['ac'];
	  }else{
		  $tam='';
	  }
	  if($tam=='sua'){
		  include('modules/donhang/sua.php');
	  }
    ?>
</div>
<div class="right">
    <?php
	  include('modules/donhang/lietke.php');
	?>
</div>