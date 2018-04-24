<?php
session_start();
//kiểm tra người dùng đã đăng nhập hay chưa hoặc đăng nhập k phải admin thì chuyển về đăng nhập
if(!isset($_SESSION['email']) || $_SESSION['email']!='admin@gmail.com') {
	header('Location: ../login.php');
}
?>
<!DOCTYPE HTML>
<html>
<head>
		<title>ADMIN</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="images/x-icon" href="../images/TK.png" />
        <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<div class="admin">
            <!-- Start banner -->
            <div class="banner"> QUẢN LÝ MUA HÀNG </div>
            <!-- End banner -->
            
            <!-- Start mid-girds -->
            <div class="mid-grids-top"> DANH MỤC CHỨC NĂNG </div>
  			<div class="mid-grids-function" style="width:94%; padding-left:5%">
   	  			<div class="mid-grids-menu"><a href="admin.php?ac=danhmuc">Quản lý danh mục</a> </div>
                <div class="mid-grids-menu"><a href="admin.php?ac=sanpham">Quản lý sản phẩm</a></div>
                <div class="mid-grids-menu"><a href="admin.php?ac=thanhvien">Quản lý người dùng</a></div>
                <div class="mid-grids-menu"><a href="admin.php?ac=donhang">Quản lý đơn hàng</a></div>
                <div class="mid-grids-menu"><a href="admin.php?ac=thongtingiaohang">Quản lý thông tin giao hàng</a></div>
                <div class="mid-grids-menu"><a href="admin.php?ac=doanhthu">Thống kê</a></div>
                <div class="mid-grids-menu"><a href="admin.php?ac=logout">Log out</a> </div>
            </div>
            
            <div class="main-body">
            	<?php
					// thêm, liệt kê sửa xóa của bảng danh mục
					if($_GET['ac'] == 'danhmuc'){
							include("modul/danhmuc/them.php");
							include("modul/danhmuc/lietke.php");
					}
					elseif($_GET['ac'] == 'suadanhmuc'){
							include("modul/danhmuc/sua.php");
							include("modul/danhmuc/lietke.php");
					} 
					// thêm, liệt kê sửa xóa của bảng sản phẩm			
					elseif($_GET['ac'] == 'sanpham'){
						include("modul/sanpham/them.php");
						include("modul/sanpham/lietke.php");
					}
					elseif($_GET['ac'] == 'suasanpham'){
						include("modul/sanpham/sua.php");
						include("modul/sanpham/lietke.php");
					}
					// thêm, liệt kê, sửa, xóa của bảng người dùng
					elseif($_GET['ac'] == 'thanhvien'){
						include("modul/thanhvien/lietke.php");
					}
					// liệt kê, xóa bảng đơn hàng
					elseif($_GET['ac'] == 'donhang'){
						include("modul/donhang/lietke.php");
					}
					// liệt kê bảng thông tin nhận hàng
					elseif($_GET['ac'] == 'thongtingiaohang'){
						include("modul/thongtingiaohang/lietke.php");
					}
					elseif($_GET['ac'] == 'doanhthu'){
						include("modul/thongkedoanhthu/lietke.php");
					}
					elseif($_GET['ac'] == 'logout'){
						session_destroy(); // hàm xóa session hiện tại
						header("location: ../login.php");
					}
				?>
            </div>
        	<!-- End mid-grids -->
		</div>
</body>
</html>