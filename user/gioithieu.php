<?php
session_start();
//kiểm tra người dùng đã đăng nhập hay chưa nếu chưa thì chuyển về đăng nhập
if(!isset($_SESSION['email'])) {
	 header('Location: ../login.php');
}
?>
<!DOCTYPE HTML>
<html>
<head>
		<title>TK SHOP</title>
        <!-- cho nó có cái ảnh -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="images/x-icon" href="../images/TK.png" />
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link href="css/style2.css" rel="stylesheet" type="text/css">
        <link href="../../SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
</head>
    <!--end head-->
	<body>
		<!---start-wrap---->
			<!---start-header---->
			<div class="header">
				<div class="wrap">
				<div class="header-left">
					<div class="mylogo">
						<a href="home.php?ac"><img src="images/TK.png"></a>
					</div>
				</div>
				<div class="header-right">
					<div class="top-nav">
					  <ul id="MenuBar1" class="MenuBarHorizontal">
                        	<li><a href="home.php?ac">Trang chủ</a></li>
                            <li><a href="gioithieu.php?ac"> Thông tin nhóm </a></li>
                            <li><a href="cuahang.php?ac&msloai&mssp&trang&sx">Cửa hàng</a></li>
                            <li><a href="lienhe.php?ac">Liên hệ</a></li>
                      </ul>
                      <p>&nbsp;</p>
                      <p>&nbsp;</p>
			      </div>
                    <div class="sign-ligin-btns-style2">
                        <div class="img"></div>
                        <?php
							// lấy thông tin tên user từ $_SESSION['email']
							$conn = mysqli_connect("localhost","root","","btl");
							$email = $_SESSION['email'];
							$sql = "SELECT * FROM thanhvien WHERE email = '$email'";
							$result = mysqli_query($conn,$sql);
							$dong = mysqli_fetch_array($result);
							
							// lấy số sp từ giỏ hàng
							$sql_gh = "SELECT * FROM giohang WHERE id = '$dong[id]'";
							$result_sql_gh = mysqli_query($conn,$sql_gh);
						?>
                        <div class="user">
                        	<a href="home.php?ac=user">
								<?php 
									echo "Xin chào,<br/>";
									echo $dong['name'];
								?></a>
							<a href="home.php?ac=logout"> | Log out</a>
                            <a href="home.php?ac=giohang"> | <img src="images/icon_handbag.png">(<?php echo mysqli_num_rows($result_sql_gh) ?>)</a>
                        <?php 
							if($_GET['ac'] == 'logout') {
								session_destroy(); // hàm xóa session hiện tại
								header("location: ../login.php");
							}
						?>
                        </div>
                    </div>
				<div class="clear"> </div>
				</div>
				<div class="clear"> </div>
			</div>
			</div>
			<!---//End-header---->
            <a id='gioithieu'></a>
            <div class="header-style2"></div> <!-- để header k đè lên ảnh nền -->
					<!---start-mid-grids--->
					<div class="mid-grids-style2-gioithieu">
                            <div class="team"> </div>
                            <div class="font1">
                            	<a href="#minhhung">&#8250; Nguyễn Minh Hùng - 20142095</a>
                            </div>
                      		<div class="font2">
                            	<a href="#anhhieu">&#8250; Đỗ Anh Hiếu</a>
                            </div>
                            <div class="font3">
                            	<a href="#quochung">&#8250; Bùi Quốc Hưng</a>
                            </div>
                    </div>
                    <a id="minhhung"></a>
                    <div class="mid-grids">
                    	<div class="wrap">
						  <div class="mid-grids-left">
							<p><img src="images/team/nmhung.jpg" width="277" height="300" title="leader"  /></p>
						</div>
						<div class="mid-grids-right">
							<ul class="fea">
								<li><a><i><h3> Nguyễn Minh<span> Hùng </span> </h3></i></a></li>
								<li><a><i>&#8226; Mssv : 20142095</i></a></li>
								<li><a><i>&#8226; Nhiệm vụ: ....</i></a></li>
                                <li><a><i>&#8226; Liên lạc FB dưới đây</i></a></li>
							</ul>
							<div class="social-icons"> 
								<li><a class="facebook" href="https://www.facebook.com/lsttb.mnmcp"> </a></li>
								<li><a class="youtube" href="https://www.youtube.com/watch?v=Rm_K5OW8MiY"> </a></li>
							</div>
						</div>
                        
							<div class="clear"> </div>
					  	</div>
	  				</div>
                    <a id="anhhieu"></a>
                    <div class="mid-grids">
                    	<div class="wrap">
						  <div class="mid-grids-left">
							<p><a id="anhhieu"></a><img src="images/team/dahieu.jpg" width="277" height="300" title="ngulol-1"  /></p>
						</div>
						<div class="mid-grids-right">
							<ul class="fea">
								<li><a><i><h3> Đỗ Anh<span> Hiếu </span> </h3></i></a></li>
								<li><a><i>&#8226; Mssv : </i></a></li>
								<li><a><i>&#8226; Nhiệm vụ: ....</i></a></li>
                                <li><a><i>&#8226; Liên lạc FB dưới đây</i></a></li>
							</ul>
							<div class="social-icons"> 
								<li><a class="facebook" href="https://www.facebook.com/profile.php?id=100003655016117&fref=ts"> </a></li>
								<li><a class="youtube" href="https://www.youtube.com/watch?v=Rm_K5OW8MiY"> </a></li>
							</div>
						</div>
                        
							<div class="clear"> </div>
					  	</div>
	  				</div>
                    <a id="quochung"></a>
                    <div class="mid-grids">
                    	<div class="wrap">
						  <div class="mid-grids-left">
							<p><a id="quochung"></a><img src="images/team/bqhung.jpg" width="277" height="300" title="ngulol-2"  /></p>
						</div>
						<div class="mid-grids-right">
							<ul class="fea">
								<li><a><i><h3> Bùi Quốc<span> Hưng </span> </h3></i></a></li>
								<li><a><i>&#8226; Mssv : </i></a></li>
								<li><a><i>&#8226; Nhiệm vụ: ....</i></a></li>
                                <li><a><i>&#8226; Liên lạc FB dưới đây</i></a></li>
							</ul>
							<div class="social-icons"> 
								<li><a class="facebook" href="https://www.facebook.com/6lood.Archduke"> </a></li>
								<li><a class="youtube" href="https://www.youtube.com/watch?v=Rm_K5OW8MiY"> </a></li>
							</div>
						</div>
                        
							<div class="clear"> </div>
					  	</div>
	  				</div>
                    
                    
                    
                    
	  <!---//End-mid-grids--->
				<!---start-bottom-footer-grids---->
				<div class="footer-grids">
					<div class="wrap">
					  <div class="footer-grid">
						<h3>Liên kết nhanh</h3>
						  <ul>
							  <li><a href="home.php?ac">Trang chủ</a></li>
							  <li><a href="gioithieu.php?ac">Thông tin nhóm</a></li>
						  </ul>
					  </div>
					  <div class="footer-grid">
						<h3>Thêm</h3>
						  <ul>
							  <li><a href="#">FAQ</a></li>
							  <li><a href="#">Hỗ trợ</a></li>
							  <li><a href="#">Điều khoản</a></li>
						  </ul>
					  </div>
					  <div class="footer-grid">
						<h3>Liên hệ với chúng tôi</h3>
						  <ul class="social-icons">
							  <li><a class="facebook" href="https://www.facebook.com/lsttb.mnmcp"> </a></li>
                              <li><a class="youtube" href="https://www.youtube.com/watch?v=Rm_K5OW8MiY"> </a></li>
							  <li></li>
						  </ul>
					  </div>
						<div class="footer-grid">
							<h3>Rate us!</h3>
							<p>Hãy cho chúng tôi biết về sự hài lòng của bạn với trang web này!</p>
							<form>
								<input type="text" class="text" value="Your Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Name';}">
								<input type="text" class="text" value="Your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Email';}">
								<p>
                                <label>
                                    <input type="radio" name="RadioGroup1" value="1" id="RadioGroup1_0">
                                    Hài lòng !</label>
                                  <br>
                                  <label>
                                    <input type="radio" name="RadioGroup1" value="0" id="RadioGroup1_1">
                                    Chưa hài lòng !</label>
                                  <br>
                                </p>
                              <input type="submit" value="Confirm" />
							</form>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<!---//End-bottom-footer-grids---->
	</div>
			<!----//End-content--->
		<!---//End-wrap---->
    <script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"../SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
        </script>
</body>
</html>

