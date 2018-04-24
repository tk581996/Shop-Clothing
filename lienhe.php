<!DOCTYPE HTML>
<html>
<head>
		<title>TK SHOP</title>
        <!-- cho nó có cái ảnh -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="images/x-icon" href="images/TK.png" />
		<link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/style2.css">
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
                            <li><a href="gioithieu.php"> Thông tin nhóm </a></li>
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
				
				</div>
					<div class="clear"> </div>
				</div>
			</div>
			<!---//End-header---->
            <div class="header-style2"></div>
			<!-- start mid-grids-->
            <div class="mid-grids-style2-lienhe">
            	<div class="lienhe-left">
                	<p style="font-size:24px; color:#F69; padding:20px; border-bottom:solid 1px #CCCCCC">Thông tin doanh nghiệp</p>
                    <p style="font-size:16px; padding-top:10px; font-style:italic "> <img src="images/icon-phone.png" height="17" width="17" style="margin-right:10px"> Gọi 0167-229-8758 </p>
                    <p style="font-size:16px; padding-top:10px; font-style:italic "> <img src="images/icon-diachi.png" height="17" width="17" style="margin-right:10px"> Làng Việt kiều Châu Âu, Mộ Lao, Hà Đông, Hà Nội. </p>
                    
                
                </div>
            	<div class="lienhe-right">
                  	<iframe src="https://www.google.com/maps/d/embed?mid=1JCrmCSPnLbyx0hNspT8EY5ZiSQM" width="640" height="480"></iframe>
                </div>
             </div>
            
            <!-- end mid-grids-->
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

