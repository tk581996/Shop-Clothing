					<?php
						$num = 8;
						$trang = $_GET['trang'];
						if($trang == ""){
							$trang = 1;	
						}
						$batdau = ($trang - 1)* $num;
                        $sql_sanpham = "SELECT * FROM sanpham ORDER BY gia DESC limit $batdau,$num";// lấy 16 sp bắt đầu từ batdau
                        $result_sanpham = mysqli_query($conn,$sql_sanpham);
                        while($dong_sanpham = mysqli_fetch_array($result_sanpham)) { ?>
                            <div class="menu-pic"> 
                                <a href="cuahang.php?ac&msloai&mssp=<?php echo $dong_sanpham['mssp'] ?>"> <img src="../images/product/<?php echo $dong_sanpham['anh'] ?>" height="220px" width="220px"> </a>
                                <div class="pic">
                                    <p><span><?php echo $dong_sanpham['tensp'] ?></span></p>
                                    <p><?php echo $dong_sanpham['gia'] ?>đ</p>
                                </div>
                            </div>
                  	<?php } ?>
					