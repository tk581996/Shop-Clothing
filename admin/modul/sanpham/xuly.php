			<?php
                    $conn = mysqli_connect("localhost","root","","btl");
					// lấy giá trị của mã số loại trong danhmuc
					$danhmuc = $_POST['danhmuc'];
					$sql2 = "SELECT * FROM danhmuc WHERE tenloai='$danhmuc'";
					$result2 = mysqli_query($conn,$sql2);
					$dong = mysqli_fetch_array($result2);
					// thêm
					if($_POST['them'] != "" ){
						$tensp = $_POST['tensp'];
						$msloai = $dong['msloai'];
						$anh = $_POST['anh'];
						$mota = $_POST['mota'];
						$gia = $_POST['gia'];
						// kt xem đã có sp trong cửa hàng hay chưa
						$sql_kt = "SELECT * FROM sanpham WHERE anh='$anh'";
						$result_kt = mysqli_query($conn,$sql_kt);
						if(mysqli_num_rows($result_kt)>0){
								echo " Đã tồn tại sản phẩm trong cửa hàng !";
						}
						else{
						$sql = "INSERT INTO sanpham(tensp,msloai,anh,mota,gia) VALUES('$tensp','$msloai','$anh','$mota','$gia')";
						mysqli_query($conn,$sql);
						header("location: ../../admin.php?ac=sanpham");
						}
					}
					//sửa
					elseif($_POST['sua'] != "" ){
						$tensp = $_POST['tensp'];
						$msloai = $dong['msloai'];
						$thuonghieu = $_POST['thuonghieu'];
						$anh = $_POST['anh'];
						$mota = $_POST['mota'];
						$gia = $_POST['gia'];
							if($_POST['anh'] != "") {
							$sql = "UPDATE sanpham SET tensp='$tensp',msloai='$msloai',anh='$anh',mota='$mota',gia='$gia' WHERE mssp = $_GET[mssp]"; }
							else{
							$sql = "UPDATE sanpham SET tensp='$tensp',msloai='$msloai',mota='$mota',gia='$gia' WHERE mssp = $_GET[mssp]";				}
							mysqli_query($conn,$sql);
							header("location: ../../admin.php?ac=sanpham");
					}
					// xóa
					else{
						$mssp = $_GET['mssp'];
						$sql = "DELETE FROM sanpham WHERE mssp = '$mssp'";
						mysqli_query($conn,$sql);
						header("location: ../../admin.php?ac=sanpham");	
					}
            ?>