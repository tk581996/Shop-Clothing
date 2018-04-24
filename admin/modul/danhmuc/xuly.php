			<?php
                    $conn = mysqli_connect("localhost","root","","btl");
					// thêm
					if(isset($_POST['them'])){
						$tenloai = $_POST['tenloai'];
						// kt xem tên danh mục đã tồn tại chưa
						$sql_kt = "SELECT * FROM danhmuc WHERE tenloai='$tenloai'";
						$result_kt = mysqli_query($conn,$sql_kt);
						if(mysqli_num_rows($result_kt)>0){
								echo " Tên danh mục đã tồn tại. Hãy chọn tên khác để khách hàng không bị nhầm lẫn !";
							}
						else{
						$sql = "INSERT INTO danhmuc(tenloai) VALUES('$tenloai')";
						mysqli_query($conn,$sql);
						header("location: ../../admin.php?ac=danhmuc");
						}
					}
					//sửa
					elseif(isset($_POST['sua'])){
						$tenloai = $_POST['tenloai'];
						$msloai = $_POST['msloai'];
						$sql = "UPDATE danhmuc SET tenloai='$tenloai',msloai = $msloai WHERE msloai = '$_GET[msloai]'";
						mysqli_query($conn,$sql);
						header("location: ../../admin.php?ac=suadanhmuc&msloai=$_GET[msloai]");
						
					}
					// xóa
					else{
						$msloai = $_GET['msloai'];
						$sql = "DELETE FROM danhmuc WHERE msloai = '$msloai'";
						mysqli_query($conn,$sql);
						header("location: ../../admin.php?ac=danhmuc");	
					}
            ?>