<?php 
		$conn = mysqli_connect("localhost","root","","btl");
		$sql = "SELECT * FROM danhmuc ORDER BY msloai ASC";
		$result = mysqli_query($conn,$sql);
?>
<form action="modul/danhmuc/xuly.php" method="post">
<table align="center" width="584" height="36" border="1" style="margin-top:20px; border-collapse::collapse" >
  <tr>
    <th width="56" align="center" style="background-color:#000; color:#FFF">MÃ SỐ LOẠI</th>
    <td width="272" align="center" style="background-color:#000; color:#FFF">TÊN LOẠI</td>
    <td width="144" align="center" style="background-color:#000; color:#FFF">NGÀY THÊM</td>
    <td colspan="2" align="center" style="background-color:#000; color:#FFF">CHỨC NĂNG</td>
  </tr>
  <?php while($dong = mysqli_fetch_array($result)) { ?>
  <tr>
    <th width="56" align="center"><?php echo $dong['msloai'] ?></th>
    <td width="272" align="center"><?php echo $dong['tenloai'] ?></td>
    <td width="144" align="center"><?php echo $dong['ngaythemdanhmuc'] ?></td>
    <td width="39" align="center">
    	<a href="modul/danhmuc/xuly.php?msloai=<?php echo $dong['msloai'] ?>"> <input name="xoa" type="button" value="Xóa">
        </a></td>
    <td width="39" align="center">
    	<a href="admin.php?ac=suadanhmuc&msloai=<?php echo $dong['msloai'] ?>"> <input name="sua" type="button" value="Sửa">
        </a></td>
  </tr>
  <?php } ?>
  
</table>
</form>
