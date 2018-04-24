<?php 
		$conn = mysqli_connect("localhost","root","","btl");
		$sql = "SELECT * FROM sanpham ORDER BY mssp ASC";
		$result = mysqli_query($conn,$sql);
		
?>
<form action="modul/sanpham/xuly.php" method="post">
<table align="left" width="1265" height="97" border="1" style="margin-top:50px; border-collapse::collapse" >
  <tr>
    <th width="61" height="42" align="center" style="background-color:#000; color:#FFF">MSSP</th>
    <td width="222" align="center" style="background-color:#000; color:#FFF">TÊN SẢN PHẨM</td>
    <td width="109" align="center" style="background-color:#000; color:#FFF">MÃ SỐ LOẠI</td>
    <td width="374" align="center" style="background-color:#000; color:#FFF">MÔ TẢ</td>
    <td width="90" align="center" style="background-color:#000; color:#FFF">GIÁ</td>
    <td width="149" align="center" style="background-color:#000; color:#FFF">ẢNH</td>
    <td width="98" align="center" style="background-color:#000; color:#FFF">NGÀY THÊM</td>
    <td colspan="2" align="center" style="background-color:#000; color:#FFF">CHỨC NĂNG</td>
  </tr>
  <?php while($dong = mysqli_fetch_array($result)) { ?>
  <tr>
    <th width="61" height="47" align="center"><?php echo $dong['mssp'] ?></th>
    <td width="222" align="center"><?php echo $dong['tensp'] ?></td>
    <td width="109" align="center"><?php echo $dong['msloai'] ?></td>
    <th width="374" align="center"><?php echo $dong['mota'] ?></th>
    <th width="90" align="center"><?php echo $dong['gia'] ?></th>
    <th width="149" align="center"> <img src="../images/product/<?php echo $dong['anh'] ?>" height="100"></th>
    <th width="98" align="center"><?php echo $dong['ngaythemsanpham'] ?></th>
    <td width="49" align="center">
    	<a href="modul/sanpham/xuly.php?mssp=<?php echo $dong['mssp'] ?>"> <input name="xoa" type="button" value="Xóa">
        </a></td>
    <td width="55" align="center">
    	<a href="admin.php?ac=suasanpham&mssp=<?php echo $dong['mssp'] ?>"> <input name="sua" type="button" value="Sửa">
        </a></td>
  </tr>
  <?php } ?>
  
</table>
</form>
