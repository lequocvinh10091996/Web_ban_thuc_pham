<?php
  $sql_all="select * from chitietsp";
  $query_all=mysql_query($sql_all); 
?>
             <p style="text-align:center;color:white;background:#F90;padding:10px">Sản Phẩm Giới Thiệu</p>
                   <div class="sanphamgioithieu">
                        <ul>
                        <?php
						  while($dong_all=mysql_fetch_array($query_all)){ 
						?>
                            <li><a href="index.php?xem=chitietsanpham&id=<?php echo $dong_all['id_sp'] ?>" ><img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_all['hinhanh'] ?>" width="100" height="100" />
                            <p style="color:#000"><?php echo $dong_all['tensp'] ?></p>
                            <p style="color:#F63">Giá Sản Phẩm: <?php echo $dong_all['gia'] ?></p>
                            </a></li><!--kết thúc sản phẩm thứ nhất-->
                            <?php
						  }
							?>
                        </ul>
                </div>