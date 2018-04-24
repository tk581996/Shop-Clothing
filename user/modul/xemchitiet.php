					<?php 
						$mssp = $_GET['mssp'] ;
                        $sql_sanpham = "SELECT * FROM sanpham WHERE mssp = '$mssp'";
                        $result_sanpham = mysqli_query($conn,$sql_sanpham);
						$dong = mysqli_fetch_array($result_sanpham);
					?>
                            <div class="pic-detail"> 
                                <div class="pic-detail-left"><img src="../images/product/<?php echo $dong['anh'] ?>" height="560" width="560"></div>
                                <div class="pic-detail-right"> 
									<div class="tensp"><p><?php echo $dong['tensp'] ?></p></div>
                                    <div class="gia"><p><?php echo $dong['gia'] ?> Vnđ</p></div>
                                    <div class="mota"><p><?php echo $dong['mota'] ?></p></div>
                                    <div class="muahang">
                                    	<form action="modul/xuly.php?msloai=<?php echo $_GET['msloai'] ?>&mssp=<?php echo $mssp ?>" method="post">
                                            <table width="200" >
                                              <tr>
                                                <th scope="row" style="color:#000" width="78px"><span style="margin-left:10px">Size</span></th>
                                                <td>
                                                    <select name="size" id="size">
                                                        <option>S</option>
                                                        <option>M</option>
                                                        <option>L</option>
                                                        <option>XL</option>
                                                    </select>
                                            	</td>
                                              </tr>
                                              <tr>
                                                <th scope="row" style="color:#000"><span style="margin-left:10px">Số lượng</span></th>
                                                <td><input name="soluong" type="text" size="5" id="soluong"/></td>
                                              </tr>
                                              <tr>
                                                <th colspan="2" scope="row"><input type="submit" name="themvaogio" value="THÊM VÀO GIỎ" id="muahang"/></th>
                                              </tr>
                                            </table>

                                    	</form>
                                    </div>
                                </div>
                            </div>
					