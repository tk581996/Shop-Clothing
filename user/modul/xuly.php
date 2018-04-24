			<?php // xử lý thông tin lấy từ xemchitiet vào bảng giỏ hàng
					session_start();
					
                    $conn = mysqli_connect("localhost","root","","btl");
					// lấy id của user đang sử dụng
					$email = $_SESSION['email'];
					$sql_thanhvien_id = "SELECT * FROM thanhvien WHERE email = '$email'";
					$result_sql_thanhvien_id = mysqli_query($conn,$sql_thanhvien_id);
					$dong_result_sql_thanhvien_id = mysqli_fetch_array($result_sql_thanhvien_id);
					// lấy giá của sp đang chọn
					$mssp = $_GET['mssp'];
					$sql_sanpham_gia = "SELECT * FROM sanpham WHERE mssp = $mssp";
					$result_sql_sanpham_gia =  mysqli_query($conn,$sql_sanpham_gia);
					$dong_result_sql_sanpham_gia = mysqli_fetch_array($result_sql_sanpham_gia);
					
					// thêm
					if(isset($_POST['themvaogio'] )){
						if($_POST['soluong'] == ''){
							 echo "&raquo; Bạn cần nhập số lượng hàng mua";
						} 
						else {
						$id = $dong_result_sql_thanhvien_id['id'];
						$mssp = $_GET['mssp'];
						$size = $_POST['size'];
						$soluong = $_POST['soluong'];
						$gia = $dong_result_sql_sanpham_gia['gia'];
						$tongtien = $gia*$soluong;
						$sql = "INSERT INTO giohang(id,mssp,soluong,size,gia,tongtien) VALUES('$id','$mssp','$soluong','$size','$gia','$tongtien.000')";
						mysqli_query($conn,$sql);
						$msloai = $_GET['msloai'];
						header("location: ../cuahang.php?ac&msloai=$msloai&mssp=$mssp");
						}
					}
            ?>