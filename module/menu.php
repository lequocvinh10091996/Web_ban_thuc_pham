<?php
   $sql_lienhe="select * from lienhe";
   $query_lienhe=mysql_query($sql_lienhe);
   $dong_lienhe=mysql_fetch_array($query_lienhe);
?>
<div class="menu">
            <ul>
                <li ><a href="index.php">Trang Chủ</a></li>
                <li><a href="index.php?xem=lienhe&id=<?php echo $dong_lienhe['id_lienhe'] ?>">Liên Hệ</a></li>
                <li><a href="admincp/index.php" >Đăng Nhập Quản Lý</a></li>
                <form action="index.php" method="post" enctype="multipart/form-data">
                  <div class="searchform">
                      <input type="submit" id="searchbtn" name="search" value="Tìm Kiếm"  />
                      <input type="text" id="searchf" name="searchtext" size="25" placeholder="Tên sản phẩm..."/>
                  </div>
                </form>
            </ul>
         </div>