<?php
		$conn = mysqli_connect("localhost","root","","btl");
		// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
		if (isset($_POST['login'])) {
			// lấy thông tin người dùng
			$email = $_POST['email'];
			$password = $_POST["password"];
			//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt mà người dùng cố tình thêm vào 
			$email = strip_tags($email);
			$email = addslashes($email);
			$password = strip_tags($password);
			$password = addslashes($password);
			if ($email == "" || $password =="") { ?>
				<p> <?php echo "&#8250; Bạn chưa điền Email hoặc password"; ?> </p>
			<?php }
			elseif($email == "admin@gmail.com" and $password == "admin") {
				$_SESSION['email'] = $email; // lưu tên đăng nhập
				header('location: admin/admin.php?ac');
			}
			else{
				$sql = "SELECT * FROM thanhvien WHERE email = '$email' AND password = '$password' ";
				$result = mysqli_query($conn,$sql);
				$num_rows = mysqli_num_rows($result);
				if ($num_rows==0) { ?>
					<p> <?php echo "&#8250; Email hoặc mật khẩu không đúng !"; ?> </p>
				<?php }
				else{
					//tiến hành lưu tên đăng nhập vào session để xử lý về sau này
					$_SESSION['email'] = $email;
					header("location: user/home.php?ac");
				}
			}
		}
?>