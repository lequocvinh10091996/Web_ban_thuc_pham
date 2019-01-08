<?php
  $sql_lienhe="select * from lienhe";// where id_lienhe='$_GET[id]'";
  $query_lienhe=mysql_query($sql_lienhe);  
?>

<h1>Liên hệ tại đây</h1>
                      <div class="cacsanpham">
                        <ul>
                            <?php
							  while($dong_lienhe=mysql_fetch_array($query_lienhe)){
                            ?>
                            <li>
                            <p style="color:#000">Tên công ty: <?php echo $dong_lienhe['tencongty'] ?></p>
                            <p style="color:#000">Số điện thoại: <?php echo $dong_lienhe['sdt'] ?></p>
                            <p style="color:#000">Địa chỉ: <?php echo $dong_lienhe['diachi'] ?></p>
                            <p style="color:#000">Email: <?php echo $dong_lienhe['email'] ?></p>
                            </li><!--kết thúc liên hệ-->
                            <p>----------------------------</p><br />
                            <?php
							  }
                            ?>
                        </ul>
                        </div>
                
