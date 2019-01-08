<?php
   $sql_loaisp="select * from loaisp";
   $query=mysql_query($sql_loaisp); 
?>
<?php
   $sql_hieusp="select * from hieusp";
   $query_hieusp=mysql_query($sql_hieusp); 
?>
                  <p style="text-align:center;color:white;background:#F90;padding:10px">Loại Sản Phẩm</p>
                  <div class="cacsanpham">
                       <ul style="border:1px solid #000; background:#FF6;">
                       <?php
					     while($dong_sp=mysql_fetch_array($query)){ 
					   ?>
                          <li style="border:1px solid #000;background:#F90;padding:3px; margin-top:5px; border-width:2px; width:100px;text-align:center;margin-left:50px;"><a href="index.php?xem=chitietloaisanpham&id=<?php echo $dong_sp['id_loaisp'] ?>"><?php echo $dong_sp['tenloaisp'] ?></a></li>
                          <?php
						   }
						  ?>
                       </ul>
                  </div><!-- kết thúc loại sản phẩm-->
                  <p style="text-align:center;color:white;background:#F90;padding:10px">Thương Hiệu của Sản Phẩm</p>
                  <div class="cacsanpham">
                       <ul style="border:1px solid #000; background:#FF6;">
                       <?php
					     while($dong_hieusp=mysql_fetch_array($query_hieusp)){ 
					   ?>
                          <li style="border:1px solid #000;background:#F90;padding:3px; margin-top:5px; border-width:2px; width:100px;text-align:center;margin-left:50px;"><a href="index.php?xem=chitietloaisanpham&id=<?php echo $dong_hieusp['id_hieusp'] ?>"><?php echo $dong_hieusp['tenhieu'] ?></a></li>
                          <?php
						   }
						  ?>
                       </ul>
                  </div><!--kết thúc thương hiệu sản phẩm-->