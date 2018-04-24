<?php 
		$conn = mysqli_connect("localhost","root","","btl");
		$sql = "SELECT * FROM thanhvien ORDER BY id ASC";
		$result = mysqli_query($conn,$sql);
?>
<table align="center" width="791" height="108" border="1" style="margin-top:20px; border-collapse::collapse" >
  <tr>
    <th width="38" height="53" align="center" style="background-color:#000; color:#FFF">ID</th>
    <td width="190" align="center" style="background-color:#000; color:#FFF">NAME</td>
    <td width="260" align="center" style="background-color:#000; color:#FFF">EMAIL</td>
    <td width="122" align="center" style="background-color:#000; color:#FFF">NGÀY THAM GIA</td>
  </tr>
  <?php while($dong = mysqli_fetch_array($result)) { ?>
  <tr>
    <th width="38" height="47" align="center"><?php echo $dong['id'] ?></th>
    <td width="190" align="center"><?php echo $dong['name'] ?></td>
    <td width="260" align="center"><?php echo $dong['email'] ?></td>
    <td width="122" align="center"><?php echo $dong['ngaythemthanhvien'] ?></td>
    <td width="38" align="center">
    	<a href="modul/thanhvien/xuly.php?id=<?php echo $dong['id'] ?>">
      		<input name="xoa" type="button" value="Xóa">
    	</a></td>
  </tr>
  <?php } ?>
  
</table>
