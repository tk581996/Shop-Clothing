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
        <link href="css/style2.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="../../SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
		<script src="../../SpryAssets/SpryMenuBar.js" type="text/javascript"></script> <!-- cái này để hiện các tính năng trong menubar -->
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
            <div class="header-style2"></div>
			<!----start-mid-grids---->
			<?php
                 $conn = mysqli_connect("localhost","root","","btl");
            ?>
			<div class="mid-grids-style2">
           	 	<!-- danh sách danh mục mặt hàng -->
            	<div class="mid-grids-left">
                <?php 
					$sql_danhmuc = "SELECT * FROM danhmuc ORDER BY msloai ASC";
					$result_danhmuc = mysqli_query($conn,$sql_danhmuc);
				?>
                	<ul class="menu">
                    			<li><a href="cuahang.php?ac&msloai&mssp&trang&sx"> Tất cả mặt hàng </a></li>
                    <?php while($dong_danhmuc = mysqli_fetch_array($result_danhmuc)) {?>
                    			<li><a href="cuahang.php?ac&msloai=<?php echo $dong_danhmuc['msloai']?>&mssp&trang&sx"> <?php echo $dong_danhmuc['tenloai']; ?></a></li>
                    <?php } ?>

                    </ul>
                </div>
                <!-- danh sách các sản phẩm -->
                <div class="mid-grids-right">
                
                <?php 
					if($_GET['mssp'] == ''){
							if($_GET['msloai'] != '' ) {
								$msloaidanhmuc = $_GET['msloai'];
								$sql_dondanhmuc = "SELECT * FROM danhmuc WHERE msloai = $msloaidanhmuc";
								$result_dondanhmuc = mysqli_query($conn,$sql_dondanhmuc);
								$dong_dondanhmuc = mysqli_fetch_array($result_dondanhmuc); ?>
								<p><?php echo $dong_dondanhmuc['tenloai']; ?></p>
                                <ul id="MenuBar2" class="MenuBarHorizontal">
								  <li style="margin-left:8px"><a href="#"  style="width:128px;margin-left:3px"><p style="font-size:14px">Sắp xếp sp theo :</p></a>
								    <ul>
								      <li><a href="#" style="font-size:14px; padding:5px">&raquo; Giá sp tăng dần</a></li>
								      <li><a href="#" style="font-size:14px; padding:5px">&raquo; Giá sp giảm dần</a></li>
							        </ul>
							      </li>
				  				</ul>
                                <br />
                                <br />
								<?php 
								include("modul/xemtungloai.php");
								include("modul/trangtungloai.php");
							}
							else{ ?>
								<p>Tất cả mặt hàng</p>
								<ul id="MenuBar2" class="MenuBarHorizontal">
								  <li style="margin-left:8px"><a href="#"  style="width:128px;margin-left:3px"><p style="font-size:14px">Sắp xếp sp theo :</p></a>
								    <ul>
								      <li><a href="cuahang.php?ac&msloai&mssp&trang&sx=asc" style="font-size:14px; padding:5px">&raquo; Giá sp tăng dần</a></li>
								      <li><a href="cuahang.php?ac&msloai&mssp&trang&sx=desc" style="font-size:14px; padding:5px">&raquo; Giá sp giảm dần</a></li>
							        </ul>
							      </li>
				  				</ul>
                                <br />
                                <br />
				  <?php 
				  				if($_GET['sx'] == 'asc'){
									include("modul/xemtatca-asc.php");
									include("modul/trangtatca-asc.php");
								}
								elseif($_GET['sx'] == 'desc'){
									include("modul/xemtatca-desc.php");
									include("modul/trangtatca-desc.php");
								}
								else {
								include("modul/xemtatca.php");
								include("modul/trangtatca.php");
								}
							}
					}
					else{
							include("modul/xemchitiet.php");
					}
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
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgDown:"../../SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../../SpryAssets/SpryMenuBarRightHover.gif"});
    </script>
</body>
</html>


