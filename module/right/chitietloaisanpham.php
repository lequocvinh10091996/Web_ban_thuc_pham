<?php
  $sql_chitiet="select * from chitietsp where id_loaisp='$_GET[id]'";
  $query=mysql_query($sql_chitiet); 
?><!--loai san pham->
<?php
  $sql_chitiethieu="select * from chitietsp where id_hieusp='$_GET[id]'";
  $query_hieu=mysql_query($sql_chitiethieu); 
?><!--hieu san pham->

<?php
    $sql_loaisp="select * from loaisp where id_loaisp='$_GET[id]'";
    $query_loaisp=mysql_query($sql_loaisp);
	$dong_loaisp=mysql_fetch_array($query_loaisp); 
?><!--loai san pham-->
<?php
    $sql_hieusp="select * from hieusp where id_hieusp='$_GET[id]'";
    $query_hieusp=mysql_query($sql_hieusp);
	$dong_hieusp=mysql_fetch_array($query_hieusp); 
?><!--hieu san pham-->

          <p style="text-align:center;color:white;background:#F90;padding:auto"><?php echo $dong_loaisp['tenloaisp'] ?></p>
          
                   <div class="sanphamgioithieu">
                        <ul>
                        <?php
						  while($dong_chitiet=mysql_fetch_array($query)){ 
						?>
                            <li><a href="index.php?xem=chitietsanpham&id=<?php echo $dong_chitiet['id_sp'] ?>"><img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_chitiet['hinhanh'] ?>" width="100" height="100" />
                            <p style="color:#000"><?php echo $dong_chitiet['tensp'] ?></p>
                            <p style="color:#F63">Giá Sản Phẩm: <?php echo $dong_chitiet['gia'] ?></p>
                            <p style="color:#F63;">Chi Tiết Sản Phẩm</p>
                            </a></li><!--kết thúc 1 sản phẩm-->
                            <?php
						  }
							?>
                        </ul>
                </div><!--loai san pham-->
                 <p style="text-align:center;color:white;background:#F90;padding:auto"><?php echo $dong_hieusp['tenhieu'] ?></p>
          
                   <div class="sanphamgioithieu">
                        <ul>
                        <?php
						  while($dong_chitiethieu=mysql_fetch_array($query_hieu)){ 
						?>
                            <li><a href="index.php?xem=chitietsanpham&id=<?php echo $dong_chitiethieu['id_sp'] ?>"><img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_chitiethieu['hinhanh'] ?>" width="100" height="100" />
                            <p style="color:#000"><?php echo $dong_chitiethieu['tensp'] ?></p>
                            <p style="color:#F63">Giá Sản Phẩm: <?php echo $dong_chitiethieu['gia'] ?></p>
                            <p style="color:#F63;">Chi Tiết Sản Phẩm</p>
                            </a></li><!--kết thúc 1 sản phẩm-->
                            <?php
						  }
							?>
                        </ul>
                </div><!--hieu san pham-->