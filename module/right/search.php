<?php
    if(isset($_POST['search'])){
	 $search=$_POST['searchtext'];
    $sql_search="select * from chitietsp where tensp LIKE '%$search%'";
    $query_search=mysql_query($sql_search);
	}
?>

          <p style="text-align:center;color:white;background:#F90;padding:auto">Sản Phẩm Tìm Thấy</p>
          
                   <div class="sanphamgioithieu">
                        <?php
						  if($count=mysql_num_rows($query_search)==0){  
						?>
                          <p>Không Tìm Thấy Sản Phẩm Nào</p>
                        <?php
						  }else{
						?>
                        <ul>
                        <?php
						  while($dong_search=mysql_fetch_array($query_search)){ 
						?>
                            <li><a href="index.php?xem=chitietsanpham&id=<?php echo $dong_search['id_sp'] ?>"><img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_search['hinhanh'] ?>" width="100" height="100" />
                            <p style="color:#000"><?php echo $dong_search['tensp'] ?></p>
                            <p style="color:#F63">Giá Sản Phẩm: <?php echo $dong_search['gia'] ?></p>
                            <p style="color:#F63;">Chi Tiết Sản Phẩm</p>
                            </a></li><!--kết thúc 1 sản phẩm-->
                            <?php
						      }
						    }
							?>
                        </ul>
                </div><!--Search tên-->