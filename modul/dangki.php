			<?php
                    $conn = mysqli_connect("localhost","root","","btl");
					if(isset($_POST['signup'])){
						$name = $_POST['name'];
						$email = $_POST['email'];
						$password = $_POST['password'];
						$repassord = $_POST['repassword'];
						// kiểm tra xem email đã tồn tại chưa
						$sql_kt = "SELECT * FROM thanhvien WHERE email='$email'";
						$result_kt = mysqli_query($conn,$sql_kt);
						
						if ($name == "" || $email == "" || $password == "") { ?>
							<p> <?php echo "&#8250; Bạn vui lòng nhập đầy đủ thông tin *"; ?></p>
                        <?php
						} 
						elseif(mysqli_num_rows($result_kt)>0) { ?>
							<p> <?php echo "&#8250; Email đã tồn tại*"; ?> </p>	
							<?php }
						elseif($password != $repassord){ ?>
							<p> <?php echo "&#8250; Xác nhận mật khẩu sai*"; ?> </p>	
						<?php }
						else{
						$sql = "INSERT INTO thanhvien(name,email,password) VALUES('$name','$email','$password')";
						mysqli_query($conn,$sql);
						echo "&#8250; Đăng kí thành công";
						//header("location: ../signup.php");
						}
					}
            ?>