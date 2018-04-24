<!DOCTYPE HTML>
<html>
<head>
		<title>TK SHOP</title>
        <!-- cho nó có cái ảnh -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="images/x-icon" href="images/TK.png" />
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link href="css/style2.css" rel="stylesheet" type="text/css">
</head>
    <!--end head-->
	<body>
		<!---start-wrap---->
			<!---start-header---->
			<div class="header">
				<div class="wrap">
				<div class="header-left">
					<div class="mylogo">
						<a href="home.php"><img src="images/TK.png"></a>
					</div>
				</div>
				<div class="header-right">
					<div class="top-nav">
					  <ul id="MenuBar1" class="MenuBarHorizontal">
                        <li><a href="home.php">Trang chủ</a></li>
                        <li><a href="#gioithieu"> Thông tin nhóm </a></li>
                        <li><a href="cuahang.php?msloai&mssp&trang">Cửa hàng</a></li>
                        <li><a href="lienhe.php">Liên hệ</a></li>
                      </ul>
                      <p>&nbsp;</p>
                      <p>&nbsp;</p>
			      </div>
                 <div class="sign-ligin-btns-style2">
                        <div class="signup"><a href="signup.php">Đăng kí</a></div>
                        <div class="login"><a href="login.php">Đăng nhập</a></div>
                  </div>
				<div class="clear"> </div>
				</div>
				<div class="clear"> </div>
			</div>
			</div>
			<!---//End-header---->
            <div class="header-style2"></div> <!-- để header k đè lên ảnh nền -->
			<!-- Start-mid-grids -->
            <div class="mid-grids-style2-signup">
				<form method="post">
                		<table width="522" border="0">
                                  <tr>
                                    <th height="67" colspan="2" style="text-align:center;color:#09F;font-size:24px" scope="row">ĐĂNG KÍ</th>
                                  </tr>
                                  <tr>
                                    <th width="138" height="40" style="text-align:right" scope="row">Họ tên *</th>
                                    <td width="374"><input type="text" name="name" id="dki"></td>
                          		  </tr>
                                  <tr>
                                    <th height="40" style="text-align:right" scope="row">Địa chỉ email *</th>
                                    <td><input type="email" name="email" id="dki"></td>
                                  </tr>
                                  <tr>
                                    <th height="40" style="text-align:right" scope="row">Mật khẩu *</th>
                                    <td><input type="password" name="password" id="dki"></td>
                                  </tr>
                                  <tr>
                                    <th height="40" style="text-align:right" scope="row">Xác nhận mật khẩu *</th>
                                    <td><input type="password" name="repassword" id="dki"></td>
                                  </tr>
                                  <tr>
                                  	<th scope="row"></th>
                                  	<td><input type="submit" name="signup" value="Đăng kí" id="dki"></td>
                                  </tr>
                        </table>

                </form>
                	<div class="warning-signup" >
                	<?php
							include("modul/dangki.php");
            		?>
                    </div>
            </div>
                    
                    
                    
	  		<!---//End-mid-grids--->
				<!---start-bottom-footer-grids---->
				<div class="footer-grids">
					<div class="wrap">
					  <div class="footer-grid">
						<h3>Liên kết nhanh</h3>
						  <ul>
							  <li><a href="home.php">Trang chủ</a></li>
							  <li><a href="gioithieu.php">Thông tin nhóm</a></li>
							  <li><a href="#">Đămg nhập</a></li>
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

