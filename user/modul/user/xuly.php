			<?php
                    $conn = mysqli_connect("localhost","root","","btl");
					// update
					if(isset($_POST['update'])){
						$id = $_GET['id'];
						$name = $_POST['name'];
						$password = $_POST['password'];
						if($password == ""){ // TH khong co password moi thi chi cap nhat ten
							$sql = "UPDATE thanhvien SET name='$name' WHERE id = $id";
							mysqli_query($conn,$sql);
							header("location: ../../home.php?ac=user");
						}	
						else{
						$sql = "UPDATE thanhvien SET name='$name',password = '$password' WHERE id = $id";
						mysqli_query($conn,$sql);
						header("location: ../../home.php?ac=user");
						}
					}
					elseif(isset($_POST['thanhtoan'])){
						// thông tin nhận hàng
						$nguoinhan = $_POST['nguoinhan'];
						$diachi = $_POST['diachi'];
						$sdt = $_POST['sdt'];
						$thanhpho = $_POST['thanhpho'];
						if( $nguoinhan =="" ||$diachi =="" || $sdt =="" || $thanhpho =="" || $thanhpho =="-- Chọn quận huyện --"){
							echo "&#8250; Bạn vui lòng nhập đầy đủ thông tin nhận hàng *";
						}
						else {
							$id = $_GET['id'];
							// sql copy dữ liệu từ bảng giohang, sp, thanhvien vào bảng donhang
							$sql ="INSERT INTO donhang(msgh,tenkh,tensp,size,soluong,gia,tongtien)
									SELECT msgh,name,tensp,size,soluong,gia,tongtien
									FROM giohang
									NATURAL JOIN thanhvien
									NATURAL JOIN sanpham
									WHERE id = $id";
							mysqli_query($conn,$sql);
							// insert data vào thongtinnhanhang
							$sql_gh = "SELECT * FROM giohang NATURAL JOIN donhang";
							$result_sql_gh = mysqli_query($conn,$sql_gh);
							while($dong_result_sql_gh = mysqli_fetch_array($result_sql_gh)){
							$msgh = $dong_result_sql_gh['msgh'];
							$sql_ttnh = "INSERT INTO thongtingiaohang(msgh,nguoinhan,sdt,diachi,thanhpho) VALUES($msgh,'$nguoinhan',$sdt,'$diachi','$thanhpho')";
							mysqli_query($conn,$sql_ttnh);
							} // end while ?>
							<p style="color:#F36;font-size:36px;text-align:center"> <?php echo " MUA HÀNG THÀNH CÔNG !!"; ?> </p>
                            <br />
                            <a href="../../cuahang.php?ac&msloai&mssp&trang"><p style="color:#06C;font-size:18px;text-align:center">&raquo; Click vào đây để tiếp tục mua sắm nào &laquo;</p></a>
                            <?php
						} // end else
					}// end elseif
					else{
						$msgh = $_GET['msgh'];
						$sql = "DELETE FROM giohang WHERE msgh = '$msgh'";
						mysqli_query($conn,$sql);
						header("location: ../../home.php?ac=giohang");
					}
            ?>